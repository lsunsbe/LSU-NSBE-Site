<?php
require('PHPMailerAutoload.php');
ini_set("display_errors", 1);
$emailaddress = $_POST['e'];
//validate email eddress
if (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/" ,$emailaddress)){
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 2;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; 
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

    $mail->Subject .= ' NSBE Mailing List Email Address Received ';
    $mail->Body    = '<p>The following email address has been submitted by a user from the NSBE Homepage: </p>
                        <p> Email: <b>';
    $mail->Body .= $emailaddress;
    $mail->Body .= '</b></p> 
                    <p>Time: <b>';
    $mail->Body .= $date;
    $mail->Body .= '</b></p><p>Please add it to the mailing list as soon as possible.</p>';
    $mail->Body .= '<br /><br /><p><em>This is a sample of what the email sent when a user of the website clicks the submit button on the front page could look like . <em></p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    if($mail->send())
        echo "Your email address has been successfully submitted. You will be added to the NSBE Mailing list shortly.";
    else
        echo "Erorr in submission. The webmaster has been notified.";

} else
{
    echo "Invalid email address. Please check your entry.";
}