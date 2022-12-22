<?php

use PHPmailer\PHPmailer\PHPmailer;
function sendmail(){

    $name="Abhishek kumar chaubey";
    $to= "anhishekkumar18@gmail.com";
    $subject="coding and bakchodi with coder";
    $body= "send mail using phpmailer";
    $from= "anhishekkumar18@gmail.com";
    $password= "@123Ragini";

    require_once "PHPmailer/PHPmailer.php";
    require_once "PHPmailer/SMTP.php";
    require_once "PHPmailer/Exception.php";
    $mail= new PHPMailer();


    $mail->isSMTP();
    $mail->SMTPDebug=3;
    $mail->Host= "smtp.gmail.com";
    $mail->SMTPAuth= true;
    $mail->Username= $from;
    $mail->Password= $password;
    $mail->Posrt= 587;
    $mail->SMTPSecure= "tls";
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true]
        
        ]);


        
        $mail->isHTML(true);
        $mail->setfrom($from, $name);
        $mail->addAddress($to);
        $mail->subject= ("$subject");
        $mail->body = $body;
        $mail->isHTML(true);

        if($mail->send()){
            echo "Email is sen!";
        }
        else{
            echo "something is wrong:<br><br>" .$mail-> ErrorInfo;
        }

}
sendmail();


?>