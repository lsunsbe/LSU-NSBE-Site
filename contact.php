
<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>Contact LSU NSBE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" type="img/ico" href="images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/navmenu.css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags-->
    <META NAME="Title" CONTENT="LSU NSBE: Contact LSU NSBE">
    <META NAME="Keywords" CONTENT="LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, contact, questions, comments, suggestions, GeauxNSBE">
    <META NAME="Description" CONTENT="Contact LSU NSBE directly with any comments, questions, or suggestions you
                    want to share.">
    <META NAME="Subject" CONTENT="NSBE E-Board">
    <META NAME="Language" CONTENT="English">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <!--Facebook Meta Tags -->
    <meta property="og:title" content="Contact LSU NSBE" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://geauxnsbe.org/contact" />
    <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
    <meta property="og:description" content="Contact LSU NSBE directly with any comments, questions, or suggestions you
                    want to share. " />
    <!--Twitter Meta Tags -->

</head>
<body>
    <div id="container"> 
        <?php include("header.php"); ?>

	<div id="menu">
        <ul>
            <?php
                include("navmenu.php");
                writenav("contact");
            ?>
        </ul>
    </div>
        
        <div id="contactinfo">
            <h2>Contact Info</h2>
            <br/>
            <p>NSBE Main Office: <span>PFT 2173</span></p>
            <p>NSBE Advisor: <a href="mailto:jadal@lsu.edu">Jada Lewis</a></p>
            <br/>
            <p>Webmaster: <a href="mailto:jbate14@lsu.edu">Joseph Bates</a></p>
            
            <div id="socialmediabuttons">
                <a href="https://www.facebook.com/GeauxNSBE" target="_blank"><img src="images/facebook.png"></a>
                <a href="https://www.twitter.com/GeauxNSBE" target="_blank"><img src="images/twitter.png"></a>
                <a href="https://www.instagram.com/nsbe_lsu" target="_blank"><img src="images/instagram.png"></a>
                <a href="http://www.nsbe.org/Regions/Region5/default.aspx" target="_blank"><img src="images/roman.png"></a>
                <a href="http://nsbe.org" target="_blank"><img src="images/NSBElogo.png"></a>
                
            </div>
            
        </div>
        <div id="divider"></div>
        <div id="contactform">
            <h2>Contact NSBE Directly</h2>

            <form action="" method="post">
                <label>Your Name:</label>
                <input id="name" type="text" placeholder="John ">
                <label>E-mail:</label>
                <input id="email" type="text" placeholder="example@example.com">
                <label>Subject:</label>
                <input id="subject" type="text" placeholder="Subject ">
                <label>Message:</label>
                <textarea id="message" type="text" placeholder="Message" rows="10" cols="40"></textarea>
                
                <input type="button" value="SUBMIT" id="submitbutton">
            </form>
        </div>
            
        
    </div>
</body>
<?php
include("footer.php");
?>
</html>