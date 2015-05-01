
<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>LSU National Society of Black Engineers: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" type="img/ico" href="../images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" href="../styles/home.css">
    <link rel="stylesheet" type="text/css" href="../styles/navmenu.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags -->
    <META NAME="Title" CONTENT="LSU National Society of Black Engineers: Home">
    <META NAME="Keywords" CONTENT="LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, GeauxNSBE">
    <META NAME="Description" CONTENT="Welcome to the LSU NSBE homepage, source of all your up to date information about what's going on with NSBE.">
    <META NAME="Subject" CONTENT="Organization Website">
    <META NAME="Language" CONTENT="English">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <!--Facebook Meta Tags -->
    <meta property="og:title" content="Welcome to GeauxNSBE.org" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://geauxnsbe.org" />
    <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
    <meta property="og:description" content="Welcome to the LSU NSBE homepage, source of all your up to date information about what's going on with NSBE." />

    <!--Twitter Meta Tags -->

</head>
<body>

<!--By using container, we can center all the site content easily-->
<?php include("components/socialmediabuttons.php");?>

<div id="container">
    <?php
        include("components/header.php");
    ?>

    <div id="menu">
	<?php  
        include("components/navmenu.php");
        writeNav("index");
    ?>
    </div>

	<!-- Break to break -->
    
    <div class="frontimage" id="frontimage">
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);
        $result = $conn->query("Select * from FrontPageImages");
        $imagesString = $result->fetch_assoc()['images'];
        $imageArray = json_decode($imagesString, true);
        for ($i = 0; $i < count($imageArray); $i++){
            $src = str_replace("{staticroot}","site/",$imageArray[$i]["image"] );
            echo "<div><img src='$src'></div>";
        }
    ?>  
    </div>
    
    
	<div id="announements">
		<h4 >Upcoming Events</h4>
        <table>
            <?php
                ini_set('auto_detect_line_endings', true);
                date_default_timezone_set('America/Chicago');
                $today = strtotime('now') - 60000;
                $toAdd = 5; //SET TO DETERMINE HOW MANY EVENTS ARE SHOWN
                date_default_timezone_set('America/Chicago');

                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
          
                
                $sql = "SELECT * FROM Events LIMIT 5  ";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            $eventName = $row['name'];
                            $eventDate = date('F d, Y', strtotime($row['start_date']));
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
                        }
                    }
                        $conn->close();
                    ?>

        </table>
		<a href="events">More upcoming events...</a>
	</div>


    <div id="recentnews">
        <h4> Recent News</h4>
        
        
        <?php
        
        date_default_timezone_set('America/Chicago');

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query('Select * from Posts order by date desc limit 2');
        while ($row = $result->fetch_assoc()) {
            $date = date('F d, Y', strtotime($row['date']));
            $title = $row['title'];
            $ident = $row['url'];
            $description = $row['preview'];
            echo "<div class='story'>
                <p><span id='date'>$date: </span> <span id='heading'>$title  </span></p>
                <p class='content'> $description.... <a href='news/$ident'>Read More...</a> </p>
            </div>";
        }
        
        ?>
            <div class="morenews"><a href="news">More News...</a></div>
    </div>

        <div id="welcome">
        
        <h4 id="welcometitle">President's Welcome</h4>
        <h5 id="nameplate">Vonzell Williams</h5>
        <img id="image" src="../images/jj.jpg">
        <p id="welcomecontent">Hello everyone and welcome to the NSBE family. I am Vonzell Williams, the President of the National Society of Black Engineers.
I am overjoyed to serve as the president this year and am looking forward to getting to know all the new members of our NSBE family. 

We have a lot of great plans for NSBE this semester, including the new Freshman Action Team (F.A.T.). 
While you are here, feel free to browse around our site. As you can see, our home page is full of the latest news on NSBE and even a link to get involved! If you aren't very familiar with our organization, then you can browse to the "About NSBE" page and learn a little bit more about us. There is so much NSBE has to offer and it doesn't stop here. Before you close your web browser be sure to view our regional and national web pages to learn more about what is going on in NSBE outside of LSU! </p>
    </div>
    <div id="links">
        <h2 id="linksheading">Links</h2>
    <?php
        date_default_timezone_set('America/Chicago');

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $result = $conn->query("Select * from Links");
            while  ($row = $result->fetch_assoc()){
                $url = $row['url'];
                $linktitle = $row['title'];
                $description = $row['description'];
                echo "<a href='$url' target='_blank'>$linktitle- </a>-$description <br/>";
            }
        }


    ?>
    </div>
        <div id="email">
            <h2 id="interestedheading">Want To Get Involved With NSBE?</h2>   
            <h3>Add your email to the NSBE mailing list:</h3>
            <form action="" method="post">
                <input id="emailbox" type="text" name="email" placeholder="Enter email here..." value="">
                <input id="gobutton" type="submit" name="submitbutton" value="SEND" autocomplete="off">
                
            </form> 
            <br/>
            <p> <a href="contact">Contact Us</a> directly for more info.</p>
            <hr>
            <br>
            <p>You can also <a href="https://nsbe.networkats.com/members_online/members/newmember_quick.asp?action=" target="_blank">Register as an Official NSBE Member</a></p>
            <br>
            <p>And don't forget to check out the <a href="http://www.nsbe.org/Regions/Region5/default.aspx" target="_blank">Region 5 Mainpage</a> </p>
        </div>
        

        <br />
        <br />
    
    	
</div> 
    
    
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="../scripts/index.js"></script>
    <script src="../scripts/index2.js"></script>
<script type="text/javascript" src="../slick/slick.min.js"></script>

</body>
<?php
include("components/footer.php");
?>
</html>
