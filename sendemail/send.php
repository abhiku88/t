<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';

 if(isset($_POST["send"])) {
    

     // $mail->SMTPDebug  = 3;
    $mail->PHPMailer(true);
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; 
	$mail->Username = "anhishekkumar18@gmail.com";
	$mail->Password = "zxozrmnnfapckntj";
	$mail->SetFrom("anhishekkumar18@gmail.com");
	
	$mail->Body = $_POST["message"];
    $mail->addAddress($_POST["email"]);
    $mail->IsHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->send();
    echo "
    <script>
    alert('sent successfully');
    document.location.href= 'index.php';
    </script>
    ";
 }

?>