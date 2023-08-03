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

if (isset($_SESSION['e-a-event-id']) &&  isset($_SESSION['e-a-event-name'])  && isset($_SESSION['e-a-email']) && isset($_SESSION['a_password'])&& isset($_SESSION['e-a-organizer']))
{

    $a_name = $_SESSION['e-a-name'];
    $event_name = $_SESSION['e-a-event-name'];
    $event_id =  $_SESSION['e-a-event-id'];
    $a_email = $_SESSION['e-a-email'];
    $a_password = $_SESSION['a_password'];

   
    $organizer =  $_SESSION['e-a-organizer'];
    

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
        $mail->addAddress($a_email, $a_name);     //Add a recipient

        //Attachments
        // $path = "../QR/Generation/images/$qrimage";
        // $mail->addAttachment($path);         //Add attachments
        // $mail->AddEmbeddedImage($path, 'banana');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML 
        $mail->Subject = 'Hey '.$a_name.' ' .$event_name .' Created ' ;
        //body of the mail

      
          


            ob_start();
            include('create-admin-mail-template.php');
        
        $mail->Body   =  ob_get_contents();
        
        
        
       

        ob_end_clean();






















        
        
        

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        // echo "mail sent";

        
            ?>
            <script>
                // alert("Thee mail senndd");
            window.location.href = "../admin/admin.php";
            </script>
            <?php
            // session_unset();
            // session_destroy();
    } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}else
    {
            
         Header("location:../access-denied.html");
    
}


?>