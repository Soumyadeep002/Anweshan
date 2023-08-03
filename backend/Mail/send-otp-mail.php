
<head>
<title>Sending Mail</title>
<!-- logo -->
<link rel="icon" type="image/x-icon" href="../assets/logo/eb-transperent-logo.png" />

</head>

<?php

include "db.php";
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['event_id']) &&  isset( $_POST['a_email'])) {

    
    $event_id = $_POST['event_id'];
    $a_email = $_POST['a_email'];

    $data = '1234567890';
    $otp= substr(str_shuffle($data), 0, 6);


    $_SESSION['otp']=$otp;
    $_SESSION['otp_expiration'] = time()+600; 
    $_SESSION['r_event_id']=$event_id;
    $_SESSION['r_a_email']=$a_email;

     //Hashing Password
     $h_otp = password_hash($otp, PASSWORD_DEFAULT);
     $h_event_id = password_hash($event_id, PASSWORD_DEFAULT);
     $h_a_email = password_hash($a_email, PASSWORD_DEFAULT);
    

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail ->isSMTP();              
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'eventbuddy05@gmail.com';  // ! admin.eventbuddy@gmail.com
        $mail->Password   = 'wobegropabtylszh';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;
        // $mail->IsHTML(true);                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('eventbuddy05@gmail.com', "admin@Anweshan");
        $mail->addAddress($a_email, 'name');     //Add a recipient

        //Attachments
        // $path = "../QR/Generation/images/$qrimage";
        // $mail->addAttachment($path);         //Add attachments
        // $mail->AddEmbeddedImage($path, 'banana');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML 
        $mail->Subject = 'Hey ' . 'name' . ' here is OTP';
        //body of the mail





        // ob_start();
        // include('test.php');

        $mail->Body   =
            "$otp is your otp only available for 10min";

        // ob_get_contents();

        // ob_end_clean();

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
?>
<script>
    alert("mail sent");
    window.location.href = "../reset-password/reset-password-02.php";
</script>
<?php
        // session_unset();
        // session_destroy();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    ?>
<script>
    alert("Mail not sent");
    window.location.href = "../signup-login.php";
</script>
<?php
}