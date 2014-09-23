<?php
require('PHPMailerAutoload.php');
//ini_set("display_errors", 1);

    $mail = new PHPMailer();
    //$mail->SMTPDebug  = 2;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'p3plcpnl0340.prod.phx3.secureserver.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = "ssl";                              // Enable SMTP authentication
    $mail->Username = 'webmaster@geauxnsbe.org';                 // SMTP username
    $mail->Password = 'nsbelsu2014';  
    $mail->Port = 587;                         // SMTP password
    $mail->SMTPSecure = 'tls';

    $mail->AddAddress('josephbates25@gmail.com');  
    $mail->AddAddress('lsunsbetelecomchair@gmail.com');
    $mail->AddAddress('lsunsbesecretary@gmail.com');


    $mail->From = 'webmaster@geauxnsbe.org';
    $mail->FromName = 'NSBE Mail Server';

    date_default_timezone_set('America/Chicago');
    $date = date('m/d/Y h:i:s a', time());

    

    $mail->WordWrap = 50;     // Set email format to HTML

    $mail->Subject .= ' NSBE Contact Message Recieved.';
    $mail->Body    = '<p>The following email address has been submitted by a user from the NSBE Contact Page: </p>
                        <p> NAME: <b>';
    $mail->Body .= $_POST['name'];
    $mail->Body .= '</b></p> 
                    <p>Email: <b>';
    $mail->Body .= $_POST['email'];
    $mail->Body .= '</b></p> 
                    <p>Subject: <b>';
    $mail->Body .= $_POST['subject'];
    $mail->Body .= '</b></p> 
                    <p>Message: <b>';
    $mail->Body .= $_POST['message'];
    $mail->Body .= '</b></p>';
    $mail->Body .= '</b></p><p>Please address this as soon as possible.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    if($mail->send())
        echo "Your message has been successfully submitted and will be addressed as soon as possible.";
    else
        echo "Erorr in submission. The webmaster has been notified.";

?>