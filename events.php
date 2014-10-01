<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
	<title>GEAUXNSBE</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/events.css">
    <link rel="stylesheet" type="text/css" href="styles/navmenu.css"> 
	<link rel="shortcut icon" type="img/ico" href="images/favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="scripts/events.js"></script>
    <script type="text/javascript" src="scripts/jQueryRotateCompressed.js"></script>
</head>
<body>
<!--By using container, we can center all the site content easily-->
<div id="container">
<?php include("header.php") ?>
    
	<div id="menu">
        <ul>
            <?php
                include("navmenu.php");
                writenav("calendar");
            ?>
        </ul>
    </div>
            <div id='eventlist'>
        <?php
            ini_set('auto_detect_line_endings', true);
                date_default_timezone_set('America/Chicago');
                $cont = true;
                $today = strtotime('now') - 60000;
                $added = 0;
                $toAdd = 5; //SET TO DETERMINE HOW MANY EVENTS ARE SHOWN
                $file = fopen("upcomingevents.csv", "r");
                fgetcsv($file);
                $headstyle = "";
                while (!feof($file)){
                    $data = fgetcsv($file);
                    $eventName = $data[0];
                    $eventDate = $data[1];
                    $eventTime = $data[2];
                    $eventDescription = $data[3];
                    $eventPlace = $data[4];
                    $startVar = "";
                    $imageShow = "<img class='arrow' src='images/arrow.png' >";
                    $greyStyle = "";
                    if (strtotime($eventDate) < $today){
                        $headstyle = "headstylepast";
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
                                # code...
                                break;
                        }
                    }
                    echo "
                    
                    <div class='eventrow $startVar'>
                        <div class='head' id='$headstyle'>
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

                fclose($file);
        ?>
        </div>
        
    <iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=f38b27sght4m73mcml7isiq0t0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe> 
    
</div>
    </body>
    </html>