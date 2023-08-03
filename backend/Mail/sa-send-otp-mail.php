
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

if (isset( $_POST['sa_email'])) {

    
    
    $sa_email = $_POST['sa_email'];

    $data = '1234567890';
    $sa_otp= substr(str_shuffle($data), 0, 6);


    $_SESSION['sa_otp']=$sa_otp;
    $_SESSION['sa_otp_expiration'] = time()+600; 
    $_SESSION['r_sa_email']=$sa_email;

    

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
        $mail->addAddress($sa_email, 'name');     //Add a recipient

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
            "$sa_otp is your otp only available for 10min";

        // ob_get_contents();

        // ob_end_clean();

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
?>
<script>
    alert("mail sent");
    window.location.href = "../super-admin/sa-reset-password-02.php";
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
    window.location.href = "../super-admin/sa-login.php";
</script>
<?php
}