<?php
require('PHPMailerAutoload.php');
require_once('/etc/php-console-master/src/PhpConsole/__autoload.php');
ini_set("display_errors", 1);

//if (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/" ,$emailaddress)){
    
    $mail = new PHPMailer();
    //$mail->SMTPDebug  = 2;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = "ssl";                              // Enable SMTP authentication
    $mail->Username = '94a7ef967e88e580ae0583f45189ce95';                 // SMTP username
    $mail->Password = '6ff861e3a986d0c9de19cc03b0e7279e';  
    $mail->Port = 587;                         // SMTP password
    $mail->SMTPSecure = 'tls';

    $mail->AddAddress('jayjaychrome93@gmail.com');                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'josephbates25@gmail.com';
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

//} else
//{
//    echo "Invalid email address. Please check your entry.";
//}

