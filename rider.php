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
    <p>Under Ongoing Construction.</p>
    <div id="titlebar">
        <!--This is how you link photos-->
        
        <img src="images/NSBElogo.png" alt="NSBElogo">
        

        <!---<h2>Welcome to the official website of the National Society of Black Engineers - Louisiana State University  </h2> -->
        <!--<h2>Welcome to the Official Website </h2> 
        <h3>of the</h3> -->
        <h2>Louisiana State University National Society of Black Engineers  </h2>
    </div>
    
	<div id="menu">
		<ul>
			<li><a class="SELitem" id="home" href="index.php">Home</a></li>
            <li><a class="item" id="purpose" href="purpose">About NSBE</a></li>
            <li ><a class="item" id="eboard"  href="eboard">E-Board</a></li>
            <li><a class="item" id="news" href="news">News</a></li>
            <li><a class="item" id="calendar" href="calendar">Calendar</a></li>
            <li><a class="item" id="photos" href="photos">Photos</a></li>
            <li><a class="item" id="contact" href="contact">Contact Us</a></li>
		</ul>
	</div>


	<!-- Break to break -->
    
    <div class="frontimage" id="frontimage">
        <div><img src="images/genbodyflyer.png"></div>
        <div><img class="active" src="images/fontpage1.png"></div>
        <div><img src="images/frontpage2.png"></div>
        
    </div>
    
    
	<div id="announements">
		<h4 >Upcoming Events</h4>
        <table>
            <!--
            <tr>
                <td class="event">Next General Body Meeting:</td>
                <td class="date">September 10, 2014</td>
            </tr>
            <tr >
                <td  class="event">Next E-Board Meeting:</td>
                <td class="date">September 9, 2014</td>
            </tr>
                <td  class="event">Labor Day Holiday:</td>
                <td class="date">September 01, 2014</td>
            </tr> 
            <tr>
                <td class="event">Student Involvement Fair:</td>
                <td class="date">September 03, 2014</td>
            </tr>  
            <tr >
            <tr>
                <td class="event">Engineering Networking Reception:</td>
                <td class="date">September 08, 2014</td>
            </tr> -->
            
            <?php
                $eventnum = 4;
                $index = 0;
                $file = fopen("emails.txt", "r") or die("ERROR!");
                while ($index < $eventnum){
                    $event = fgets($file);
                    $date = fgets($file);
                    echo 
                        "<tr>
                            <td class='event'>$event</td>
                            <td class='date'>$date</td>
                        </tr>";
                    $index++;
                }
            ?>
        </table>
		<a href="calendar.html">More upcoming events...</a>
	</div>


    <div id="recentnews">
        <h4> Recent News</h4>
        <div class="story">
                <p><span id="date">August 23, 2014: </span> <span id="heading">Kick-Off General Body Meeting  </span></p>
                <p class="content">NSBE will be having their first General Body Meeting of the year on September 10, 2014 at 8PM in Patrick F. Taylor, Rm. 2222. The meeting will offer an Alumni Panel, Regional and National conference updates, study group... <a href="news.html#genbodykickoff">Read More...</a> </p> </div>
        <br />
        <div class="story">
            <p><span id="date">August 23, 2014: </span> <span id="heading">Welcome to GeauxNSBE.org  </span></p>
            <p class="content"> Welcome to LSU NSBE's first, hand-coded, fully customized and designed from scratch website: geauxnsbe.org. This site will be your up to date source for all of NSBE's events, news, and information relevant to your NSBE life. The website features... <a href="news.html#welcome">Read More...</a> </p> 
        </div> 
        
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
    </div>
        <p style="clear: both"></p>
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
