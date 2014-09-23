<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
	<title>LSU National Society of Black Engineers: Home</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="styles/main.css"> 
	<link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/navmenu.css"> 
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="img/ico" href="images/favicon.ico">

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<meta property="og:title" content="Welcome to GeauxNSBE.org" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://geauxnsbe.org" />
        <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
        <meta property="og:description" content="Welcome to the LSU NSBE homepage, source of all your up to date information about what's going on with NSBE." />

				

</head>
<body>

<!--By using container, we can center all the site content easily-->
    <div id="floatingsocial">
        <div class="button" id="facebookbutton">
            <a href="https://www.facebook.com/GeauxNSBE" target="_blank">
                <img src="images/Facebook_Logo.jpeg" 
                alt="" 
                >
            </a>
        </div>
        
        <div class="button" id="twitterbutton">
            <a href="https://www.twitter.com/NSBELSU" target="_blank">
                <img src="images/Twitter_logo_blue.jpg" 
                alt="" 
                >
            </a>
        </div>
        
        <div class="button" id="instagrambutton">
            <a href="https://www.instagram.com/nsbe_lsu" target="_blank">
                <img src="images/instagram.ico" 
                alt="" 
                >
            </a>
        </div>
        
        <div class="button" id="r5button">
            <a href="http://www.nsbe.org/Regions/Region5/default.aspx" target="_blank">
                <img src="images/roman.png" 
                alt="NSBE Region 5" 
                >
            </a>
        </div>
        
        <div class="button" id="nsbebutton">
            <a href="http://nsbe.org" target="_blank">
                <img src="images/NSBElogo.png" 
                alt="NSBE Official" 
                >
            </a>
        </div>
        
    </div>

<div id="container">
    <?php
        include("header.php");
    ?>

    <div id="menu">
	<?php  
        include("navmenu.php");
        writeNav("index");
    ?>
    </div>

	<!-- Break to break -->
    
    <div class="frontimage" id="frontimage">
        <?php
        $images = scandir("images/frontpage");
        for ($i = 3; $i < count($images); $i++){
            $image = $images[$i];
            echo "<div><img src='images/frontpage/$image'></div>";
        }
    ?>  
    </div>
    
    
	<div id="announements">
		<h4 >Upcoming Events</h4>
        <table>
            <?php
                ini_set('auto_detect_line_endings', true);
                date_default_timezone_set('America/Chicago');
                $cont = true;
                $today = strtotime('now') - 60000;
                $added = 0;
                $toAdd = 5; //SET TO DETERMINE HOW MANY EVENTS ARE SHOWN
                $file = fopen("upcomingevents.csv", "r");
                while ($cont){
                    $data = fgetcsv($file);
                    $eventName = $data[0];
                    $eventDate = trim($data[1], '"');
                    if (strtotime($eventDate) > $today){
                        if ($eventName=="General Body Meeting"){
                            echo "<tr>
                                    <td class='event'><b>$eventName</b> :</td>
                                    <td class='date'>$eventDate </td>
                                 </tr>";
                        } else{
                            echo "<tr>
                                    <td class='event'>$eventName :</td>
                                    <td class='date'>$eventDate </td>
                                 </tr>";
                        }
                        $added++;
                    }
                    if ($added == $toAdd or feof($file))
                        $cont = false;
                }
                fclose($file);
            ?>
        </table>
		<a href="events.php">More upcoming events...</a>
	</div>


    <div id="recentnews">
        <h4> Recent News</h4>
        <div class="story">
            <p><span id="date">September 12, 2014: </span> <span id="heading">FRC Registration Now Open  </span></p>
            <p class="content"> Registration for Fall Regional Conference is now open. This year, the conference will be in Baton Rouge, November 14-16, at the Crowne Plaza Executive Center. Early bird rates are as low as.... <a href="news.php#frcregister">Read More...</a> </p> 
        </div> 
        <div class="story">
                <p><span id="date">August 23, 2014: </span> <span id="heading">Kick-Off General Body Meeting  </span></p>
                <p class="content">NSBE will be having their first General Body Meeting of the year on September 10, 2014 at 8PM in Patrick F. Taylor, Rm. 2222. The meeting will offer an Alumni Panel, Regional and National conference updates, study group... <a href="news.html#genbodykickoff">Read More...</a> </p> </div>
        
            <div class="morenews"><a href="news.html">More News...</a></div>
    </div>

        
        <div id="email">
            <h2 id="interestedheading">Want To Get Involved With NSBE?</h2>   
            <h3>Add your email to the NSBE mailing list:</h3>
            <form action="" method="post">
                <input id="emailbox" type="text" name="email" placeholder="Enter email here..." value="">
                <input id="gobutton" type="submit" name="submitbutton" value="SEND" autocomplete="off">
                
            </form> 
            <br/>
            <p>Or <a href="contact.html">Contact Us</a> directly for more info.</p>
            <hr>
            <br>
            <p>You can also <a href="https://nsbe.networkats.com/members_online/members/newmember_quick.asp?action=" target="_blank">Register as an Official NSBE Member</a></p>
            <br>
            <p>And don't forget to check out the <a href="http://www.nsbe.org/Regions/Region5/default.aspx" target="_blank">Region 5 Mainpage</a> </p>
        </div>
        
        <div id="links">
         <h2 id="linksheading">Links</h2>
         <a href="https://nsbe.networkats.com/members_online/registration/reg_chaperone.asp?mt=R5FRC14&af=NSBE" target="_blank">Resgistration Link- </a>-Region 5 Fall Regional Conference Registration
         <a href="http://geauxnsbe.org/NSBE 1st General_update.pdf" target="_blank">Kickoff Meeting Slides- </a>-NSBE General Body Kickoff Meeting Slides
          <a href="http://geauxnsbe.org/newsletter1.pdf" target="_blank">NSBE News Letter #1- </a>-NSBE's First Newsletter
    </div>
        <br />
        <br />

    	
</div> 
    
    
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="scripts/index.js"></script>
    <script src="scripts/index2.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

</body>
<footer>
	<p>© 2014 National Society of Black Engineers, All Rights Reserved.</p>
</footer>
</html>
