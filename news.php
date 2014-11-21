
<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>LSU NSBE News</title>
    <link rel="shortcut icon" type="img/ico" href="images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" type="text/css" href="styles/navmenu.css">
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags -->
    <META NAME="Title" CONTENT="LSU NSBE: News">
    <META NAME="Keywords" CONTENT="LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, News, Stories, Information, GeauxNSBE">
    <META NAME="Description" CONTENT="All the most recent and up-to-date on all LSU NSBE news, events, and information.">
    <META NAME="Subject" CONTENT="NSBE News">
    <META NAME="Language" CONTENT="English">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <!--Facebook Meta Tags -->
    <meta property="og:title" content="LSU NSBE: News" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://geauxnsbe.org/news" />
    <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
    <meta property="og:description" content="All the most recent and up-to-date on all LSU NSBE news, events, and information." />
    <!--Twitter Meta Tags -->

</head>
    <body>


        <div id="floatingsocial">
        <div class="button" id="facebookbutton">
            <a href="https://www.facebook.com/GeauxNSBE" target="_blank">
                <img src="images/Facebook_Logo.jpeg" 
                alt="" 
                >
            </a>
        </div>
        
        <div class="button" id="twitterbutton">
            <a href="https://www.twitter.com/GeauxNSBE" target="_blank">
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

            <?php include("header.php"); ?>

	<div id="menu">
        <ul>
            <?php
                include("navmenu.php");
                writenav("news");
            ?>
        </ul>
    </div>
            
            
            <!--  News Stories: 
                    All stories and dates contained within the table. Each row has 2 cells. 
                    First cell contains date. Second cell has the story content.
                    First cell class is named date and contains a <p> element with the date.
                    Second cell class is named story and can hold and elements, followed by:
                        The Facebook iframe, customized appropriatly, with a class tag "sharebutton"
                        the Twitter a, customized apropriatly with a class tag "sharebutton"
                    
                    Finally, each row should:
                        1) Alternate class labels between "newsstyle1" and "newsstyle2"
                        2) Be given id tags for URL purposes (no longer need to be ascending. use keyword)


            -->
            
            
            
            <table id=newstable cellspacing="50">
                <!-- NEWS STORY 4
                <tr id="news4" class="newsstyle1" name="story4">
                    <td class="date"><p>05/30/2014</p></td>
                    <td class="story">
                        <h3>News Spaces Can Hold Basic Stories</h3>
                        <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
        <br /> <br />                    
        At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Sanctus sea sed takimata ut vero voluptua.

        Stet clita kasd gubergren, no sea takimata sanctus est. At vero eos et accusam et justo duo dolores et ea rebum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                      <div class="fb-share-button sharebutton" data-href="https://geauxnsbe.org/news.html#news4" data-width="200"></div>
                     <a href="https://twitter.com/share" class="twitter-share-button sharebutton" data-url="http://nsbelsu.org/news#news4" data-text="News Spaces Can Hold Basic Stories" data-via="NSBE_LSU" data-count="false" >Tweet Out</a>
                    </td>
                </tr>
                
                
             -->   
                
                
            <tr id="frcregister" class="newsstyle2">
                <td class="date"><p>09/12/2014</p></td>
                <td >
                    <div class="story">
                        <h3>FRC Registration Now Open</h3>
                        <p>
                            Registration for Fall Regional Conference is now open. This year, the conference will be in Baton Rouge, November 14-16, at the Crowne Plaza Executive Center. 

                        </p>
                       
                            <img class="conimg" src="images/hotel.png" alt="Crowne Plaza Executive Center">
                        
                        <P>Early bird rates are as low as $55 for regular members, but they only last until September 21. Afterwards, rates raise as high as $105, so don't procrastinate with registration. </P>
                         <a href="images/frcprices.png" target="_blank">
                            <img class="conimg" src="images/frcprices.png" alt="Registration Prices" >
                        </a>
                         <p>The Fall Regional Conference provides a space where college and pre-college individuals can discuss, connect, and network with professionals, as well as recieve professional and career development through workshops, competitions, and career fairs. 
                        <br/>
                        Be sure to register soon!
                        </p>
                        <a href="https://nsbe.networkats.com/members_online/registration/reg_chaperone.asp?mt=R5FRC14&af=NSBE" target="_blank">Region V Fall Regional Conference Registration</a>

                           <br /><br />

                                              <a href="https://twitter.com/share" class="twitter-share-button sharebutton" data-url="http://geauxnsbe.org/stories/frcregister" data-text="FRC Registration Now Open!" data-via="GeauxNSBE" data-count="false" >Tweet Out</a> 

                       <a href="javascript:popup('http://geauxnsbe.org/stories/frcregister')"> <img class="sharebutton" src="images/facebookshare.png"></a>
                        </div>
                </td>
            </tr>
                
             
                <!-- NEWS STORY 2 -->
                
            <tr id="genbodykickoff" class="newsstyle1">
                <td class="date"><p>08/23/2014</p></td>
                <td>
                    <div class="story">
                        <h3>Kick-Off General Body Meeting</h3>
                        <img src="images/genbodyflyer.png" width="65%" height="600px" alt="Sample Flyer">

                        <p>NSBE will be having their first General Body Meeting of the year on September 10, 2014 at 8PM in Patrick F. Taylor, Rm. 2222. The meeting will offer an Alumni Panel, Regional and National conference updates, study group sign-ups, and much more important information. Come out and bring a friend!</p>
                        <br />

                         <a href="https://twitter.com/share" class="twitter-share-button sharebutton" data-url="http://geauxnsbe.org/stories/genbodykickoff.html" data-text="NSBE Kickoff General Body Meeting!" data-via="NSBE_LSU" data-count="false" >Tweet Out</a> 

                       <a href="javascript:popup('http://geauxnsbe.org/stories/genbodykickoff.html')"> <img class="sharebutton" src="images/facebookshare.png"></a>
                    <br/>
                    </div>

                </td>
            </tr>
                
                <!-- NEWS STORY 1--> 
                
            <tr id="welcome" class="newsstyle2">
                <td class="date"><p>08/23/2014</p></td>
                <td>
                    <div class="story">
                        <h3>Welcome to GeauxNSBE.org: LSU NSBE's New Website</h3>
                        <p>Welcome to LSU NSBE's first, hand-coded, fully customized and designed from scratch website: geauxnsbe.org. This site will be your up to date source for all of NSBE's events, news, and information relevant to your NSBE life. The website features a highly informative front page so you can get the most information you need the most quickly </p>
                        <img class="conimg" src="images/screen1.png">
                        <p>
                            A news and announcements section where you can read about all of NSBE's events and most recent happenings
                        </p>
                        <img class="conimg" src="images/screen2.png">
                        <p>
                            A contact area where you can reach out to NSBE with any questions, comments, or ideas
                        </p>
                        <img class="conimg" src="images/screen3.png">
                        <p>
                            And much, much more. Be sure to check it all out! 
                        </p>

                         <a href="https://twitter.com/share" class="twitter-share-button sharebutton" data-url="http://geauxnsbe.org/stories/stwelcome.html" data-text="NSBE Welcome to the Official LSU NSBE Homepage" data-via="NSBE_LSU" data-count="false" >Tweet Out</a> 

                       <a href="javascript:popup('http://geauxnsbe.org/stories/stwelcome.html')"> <img class="sharebutton" src="images/facebookshare.png"></a>

                    </div>
                </td>
            </tr>
        </table>
        </div>


        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> 
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </body>
<?php
include("footer.php");
?>
</html>
