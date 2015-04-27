
<!DOCTYPE html>

<html>
<!--Begin Code-->
<head>
    <title>GEAUXNSBE</title>
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" href="../styles/events.css">
    <link rel="stylesheet" type="text/css" href="../styles/navmenu.css">
    <!--Fonts -->
    <link rel="shortcut icon" type="img/ico" href="../images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags -->
    <META NAME="Title" CONTENT="LSU NSBE: Events">
    <META NAME="Keywords" CONTENT="LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, Events, Calendar Information, GeauxNSBE">
    <META NAME="Description" CONTENT="Learn what's going on and LSU NSBE and what events we'll be holding.">
    <META NAME="Subject" CONTENT="NSBE Events">
    <META NAME="Language" CONTENT="English">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <!--Facebook Meta Tags -->
    <meta property="og:title" content="LSU NSBE: Events" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://geauxnsbe.org/events" />
    <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
    <meta property="og:description" content="Learn what's going on and LSU NSBE and what events we'll be holding." />
    <!--Twitter Meta Tags -->

</head>
<body>
<!--By using container, we can center all the site content easily-->
<?php include("components/socialmediabuttons.php");?>
<div id="container">

<?php include("components/header.php") ?>
    
	<div id="menu">
        <ul>
            <?php
                include("components/navmenu.php");
                writenav("calendar");
            ?>
        </ul>
    </div>
            <div id='eventlist'>
        <?php
        ini_set('display_errors', 1);
            ini_set('auto_detect_line_endings', true);
                date_default_timezone_set('America/Chicago');
                $cont = true;
                $today = strtotime('now') - 60000;
                date_default_timezone_set('America/Chicago');
                   
                   // Create connection
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   // Check connection
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                   } 
                   
                   $sql = "SELECT * FROM Events ORDER BY start_date asc";
                   $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        $eventName = $row['name'];
                        $eventDate = date('F d, Y', strtotime($row['start_date']));

                        $eventTime = date("g:iA", strtotime($row['start_time']));
                        if ($row['end_time'] != null){
                            $eventTime = $eventTime . " - " . date("g:iA", $row['end_time']);
                        }
                        $eventDescription = $row['description'];
                        $eventPlace = $row['place'];
                        $startVar = "";
                        $imageShow = "<img class='arrow' src='../images/arrow.png' >";
                        $greyStyle = "";
                        
                        if (strtotime($eventDate) < $today){
                            $headstyle = "headstyle1";
                            $imageShow = "";
                        } else {
                            switch ($headstyle) {
                                case 'headstylepast':
                                    $headstyle = "headstyle1";
                                    $startVar = "start active";
                                    break;
                                case 'headstyle1':
                                    $headstyle = "headstyle2";
                                    break;
                                case 'headstyle2':
                                    $headstyle = "headstyle1";
                                    break;
                                default:
                                    $headstyle = "headstyle1";
                                    break;
                            }
                        }
                        
                        echo "
                        
                        <div class='eventrow $startVar'>
                            <div id='$headstyle' class='head' >
                                <p class='eventtitle'>$eventName</p>
                                $imageShow
                                <p class='eventdate'>$eventDate</p>
    
                            </div>
                            <div class='body' id='$headstyle'>
                                <div class='time'>
                                    <p>$eventTime</p>
                                </div>
                                <div class='place'>
                                    <p>$eventPlace</p>
                                </div>
                                <div class='description'>
                                    <p>$eventDescription</p>
                                </div>
                            </div>
                        
                        </div>
                        "; 
                    }

                }
                
                
        ?>
        </div>
        

</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../scripts/events.js"></script>
    <script type="text/javascript" src="../scripts/jQueryRotateCompressed.js"></script>
    </body>
<?php
include("components/footer.php");
?>
    </html>