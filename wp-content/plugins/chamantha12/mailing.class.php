<?php

require_once('PHPMailer_5.2.4/class.phpmailer.php');

class mailing{

    private static $username     = 'testmail@itelasoft.tk';
    private static $password     = '!tel4m4!l';

    private static $host         = 'box374.bluehost.com';

    private static $enable_debug = false;
    private static $use_smpt     = true;

    private static $reply        = 'testmail@itelasoft.tk'; // Should be a valid address
    private static $from         = 'testmail@itelasoft.tk'; // Should be a valid address

    private static function create_object()
    {

       if( self::$enable_debug )
       {
            $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
            $mail->SMTPDebug  = 2;                     // debugging: 1 = errors and messages, 2 = messages only
       }
       else
       {
            $mail = new PHPMailer(false); // the true param means it will throw exceptions on errors, which we need to catch
            $mail->SMTPDebug  = false;                    // debugging: 1 = errors and messages, 2 = messages only
       }

       if( self::$use_smpt )
       {
         $mail->IsSMTP(); // telling the class to use SMTP

         $mail->SMTPAuth   = true;                  // enable SMTP authentication
         $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
         $mail->Host       = self::$host;      // sets as the SMTP server
         $mail->Port       = 587;                   // set the SMTP port for the server

         $mail->Username = self::$username; //  username
         $mail->Password = self::$password; //  password
       }
       else
       {
        $mail->IsSendmail();
       }



       return $mail;

    }


    static function html_mail($to,$subject,$body,$from=NULL,$reply=NULL){

        $to = trim($to);
        if( empty($to) || is_null($to) || count($to) < 0 || !filter_var($to, FILTER_VALIDATE_EMAIL) )
        {
            return false;
        }

        $message=" ";

        if( !is_null($from) && !filter_var($from,FILTER_VALIDATE_EMAIL) ){
            $f = $from;
        }else{
            $f = self::$from;
        }

        if( !is_null($reply) && !filter_var($reply,FILTER_VALIDATE_EMAIL) ){
            $r = $reply;
        }else{
            $r = self::$reply;
        }

        if( empty($subject) )
        {
            $subject = ' ';
        }

        if( empty($body) )
        {
            $body = ' ';
        }

        $message .= $body;

        $mail = self::create_object();

        $mail->AddReplyTo($r,$r);
        $mail->SetFrom($f,$f);

        //$mail->AddBCC('mifas@3cs.asia');
        //$mail->AddBCC('chamantha@3cs.lk');

        $mail->Subject = $subject;
        $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
        $mail->Body = $message;

        $mail->AddAddress($to, $to);

        $send = $mail->Send();

        $mail->ClearAllRecipients();

        return $send;
    }


}

?>