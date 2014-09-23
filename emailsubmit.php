<?php
require('PHPMailerAutoload.php');
ini_set("display_errors", 1);
$emailaddress = trim($_POST['e']);
$toMail = false;
//validate email eddress
if (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/" ,$emailaddress)){
    $addresses = array();
    $file = fopen("emails.txt", "r") or die("File open fail");
    while (!feof($file)){
        array_push($addresses, preg_replace('/\s+/', ' ', trim(fgets($file))));
    }
    if (array_search($emailaddress, $addresses, true)){
       echo "This email address has been successfully submitted. You will be added to the NSBE Mailing list shortly.";
    } else{
        file_put_contents("emails.txt", $emailaddress, FILE_APPEND);
        $mail = new PHPMailer();
        //$mail->SMTPDebug  = 2;
        $mail->isSMTP();                                      
        $mail->Host = 'p3plcpnl0340.prod.phx3.secureserver.net';  
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = "ssl";                              
        $mail->Username = 'webmaster@geauxnsbe.org';                 
        $mail->Password = 'nsbelsu2014';  
        $mail->Port = 587;                         
        $mail->SMTPSecure = 'tls';

        $mail->AddAddress('josephbates25@gmail.com');  
        $mail->AddAddress('lsunsbetelecomchair@gmail.com');
        $mail->AddAddress('lsunsbesecretary@gmail.com');


        $mail->From = 'webmaster@geauxnsbe.org';
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
    }
        

} else
{
    echo "Invalid email address. Please check your entry.";
}
