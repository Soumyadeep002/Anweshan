
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

if (isset($_SESSION['e_event_id']) &&  isset($_SESSION['e_p_email'])) {

    $p_name = $_SESSION['e_p_name'];
    $event_name = $_SESSION['e_event_name'];
    $event_id = $_SESSION['e_event_id'];
    $p_email = $_SESSION['e_p_email'];
    $qrimage = $_SESSION['e_qrimage'];

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
        $mail->addAddress($p_email, $p_name);     //Add a recipient

        //Attachments
        $path = "../QR/Generation/images/$qrimage";
        // $mail->addAttachment($path);         //Add attachments
        $mail->AddEmbeddedImage($path, 'banana');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML 
        $mail->Subject = 'Hey ' . $p_name . ' here is your ticket for ' . $event_name;
        //body of the mail





        // ob_start();
        // include('test.php');

        $mail->Body   =
            '
        <div
            style="background-image: linear-gradient(to bottom right, rgb(10, 138, 138), cyan);; width: 500px; margin: auto; border-radius: 25px;">
            <img src="https://raw.githubusercontent.com/Soumyadeep002/anweshan/master/assets/logo.png" alt="ANWESHAN 2k23"
                style="width: 50%; display: block; margin-left: auto; margin-right: auto; padding-top: 10px ;">
    
    
            <div style="text-align: center; display: flex; padding-top: 50px; margin-left:0px ;padding-left: 50px; padding-right: 50px; justify-content: center;">
                <div style="margin: auto; margin-left: auto;">
                    <img height="300px" width="300px" src="cid:banana" alt="event-qr">
                </div>
            </div>
    
            <div style="text-align: center; color: rgb(3, 72, 3); padding-bottom: 30px; font-size: large;"><b>Your Booking is confirmed</b></div>
    
            <div class="details" style="text-align: center;">
                <div class="name">Name: <strong>'.$p_name.'</strong></div>
                <div class="ename">Event Name: <strong>'.$event_name.'</strong></div>
                
            </div>
            <div style="text-align: center; padding: 15px; font-size: large;">
                <p><b>Show this QR Ticket at entry</b></p>
            </div>
    
        </div>
        ';



        // ob_get_contents();

        // ob_end_clean();



        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
?>
<script>
    window.location.href = "../../src/event.php?event_id=<?php echo $event_id ?>";
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
    window.location.href = "../../src/event.php?event_id=<?php echo $event_id ?>";
</script>
<?php
}