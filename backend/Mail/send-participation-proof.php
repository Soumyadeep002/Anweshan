<?php

session_start();

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_SESSION['event_id'])){
include "db.php";

$event_id =$_SESSION['event_id'];

$sql = "SELECT * FROM participant WHERE event_id ='$event_id' AND attendance=1";
$result = $conn->query($sql);


$sql2 = "SELECT * FROM events WHERE event_id ='$event_id'";
$result2 = $conn->query($sql2);


$font = "C:/xampp/htdocs/anweshan/backend/Mail/BASKVILL.TTF";

require('fpdf.php');

if ($result->num_rows > 0 && $result2->num_rows>0) 
{
    $row2 = $result2->fetch_assoc();
    $i=0;
		while ($row = $result->fetch_assoc()){
						$p_name = $row['p_name'];
						$p_email = $row['p_email'];
						$event_name = $row2['event_name'];
						$organizer = $row2['organizer'];
						$participants[]= array(	'name'=>$row['p_name'],
						'email'=>$row['p_email'],
						'event_name'=>$row2['event_name'],
						'Eorganizer'=>$row2['organizer'],
						'frame'=>'../frames/framed.png'
					);				
						
						header('content-type:image/jpeg');
						$myframe = imagecreatefromjpeg('certificate.jpg');
						$color = imagecolorallocate($myframe, 19,21,22);
						$jpg_path = "jpegs/".$p_name.".jpeg";
						imagettftext($myframe,20,0,400,420,$color,$font,$p_name);
						imagejpeg($myframe, $jpg_path);
						
						
						$pdf_path = "certificates/".$p_name.".pdf";
						$pdf = new FPDF();
						$pdf -> AddPage('L','A4');
						$pdf -> Image($jpg_path, 0,0,295,205);
						$pdf -> Output($pdf_path, "F");
												
						
						
						
						
						
			try {
				//Server settings
				// $mail ->isSMTP();   
				$mail = new PHPMailer();           
				$mail->isSMTP();
				$mail->Host       = 'smtp.gmail.com';
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = 'eventbuddy05@gmail.com';  // ! admin.eventbuddy@gmail.com
				$mail->Password   = 'wobegropabtylszh';                               //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				// $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
				$mail->Port       = 465;
				$mail->CharSet= 'UTF-8';
				$mail->ContentType ='text/html; charset=UTF-8';
				$mail->Encoding='8bit';
				
				// $mail->Port       = 587;
												//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('eventbuddy05@gmail.com', "admin@Anweshan");
				foreach($participants as $participants) { 
					$name = $participants['name'];
					$event_name = $participants['event_name'];
					$email = $participants['email'];
					$organizer = $participants['Eorganizer'];
					$frame= $participants['frame'];
				   
					$certificate_html = str_replace(
							array('pname', 'eventName','Eorganizer','back_frame'),
							array($name, $event_name, $organizer, $frame), $html);

					$mail->addAddress($email, $name);
					$mail->IsHTML(true);
					$mail->Body   ="Here is your Certificate"; 
					$mail->Subject = 'Certificate of Participation';
					$mail->addAttachment($pdf_path);
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
						if(!$mail->send()){
							echo "Mailer error".$mail->ErrorInfo;
						}else{
							?>
							<script>
							   alert("Certificate Sent");
							   window.location.href = "../admin/admin.php";
							</script>
							<?php
						   
							"Mail sent to".$p_email;
						}
						imagedestroy($myframe);
						$mail->clearAddresses();
						$mail->clearAttachments();
					   }
				}
			catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
			}
}
else{
}
}
?>
