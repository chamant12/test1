<?php

require_once 'PHPMailer_5.2.4/class.phpmailer.php' ;

$mail = new PHPMailer(true);

//Send mail using gmail
//if($send_using_gmail){
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "wizsignup@gmail.com"; // GMAIL username
    $mail->Password = "wiz123#$"; // GMAIL password
//}
$email = "dilin.alwis@gmail.com" ;
$name = "D D D D " ;
$email_from = "test@gmail.com";
$name_from = "test sender" ;
//Typical mail data
$mail->AddAddress($email, $name);
$mail->SetFrom($email_from, $name_from);
$mail->Subject = "My Subject";
$mail->Body = "Mail contents";

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
   var_dump($e);
    echo "Fail :(";
}

?>
