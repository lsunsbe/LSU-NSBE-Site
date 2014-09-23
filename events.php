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
    
    <table>
        <thead></thead>
        <!-- TEMPLATE FOR PHP FILE
        <tbody>
            <tr class="head headstyle2"> 
                <td colspan="4" class="titlerow">
                    <p class="name">NSBE Community Geneneral body Meeting </p>
                    <p class="date">September 08, 2014</p>
                </td>
               
            </tr>
            <tr class="content">
                <td class="title">NSBE Community Geneneral body Meeting </td>
                <td class="place">PFT 2013</td>
                <td class="time">8:00PM</td>
                <td class="description">NSBE's Joint Meeting with SWHE</td>
            </tr>
        </tbody>
        -->
        <?php
            ini_set('auto_detect_line_endings', true);
                date_default_timezone_set('America/Chicago');
                $cont = true;
                $today = strtotime('now') - 60000;
                $added = 0;
                $toAdd = 5; //SET TO DETERMINE HOW MANY EVENTS ARE SHOWN
                $file = fopen("upcomingevents.csv", "r");
                fgetcsv($file);
                while (!feof($file)){
                    $data = fgetcsv($file);
                    $eventName = $data[0];
                    $eventDate = $data[1];
                    $eventTime = $data[2];
                    $eventDescription = $data[3];
                    $eventPlace = $data[4];
                    $headstyle = "";
                    $greyStyle = "";
                    if (strtotime($eventDate) < $today){
                        $headstyle = "headstylepast";
                        $greyStyle = "style='background: grey;' ";
                    } else $headstyle = "headstyle1";
                    echo "
        <tbody>
            <tr class='head $headstyle'> 
                <td colspan='4' class='titlerow'>
                    <p class='name'>$eventName</p>
                    <p class='date'>$eventDate</p>
                </td>
               
            </tr>
            <tr class='content' $greyStyle>
                        <td class='title'>$eventName</td>
                        <td class='place'>$eventPlace</td>
                        <td class='time'>$eventTime</td>
                        <td class='description'>$eventDescription</td>
            </tr>
        </tbody>
                    
                    ";


                }

                fclose($file);
        ?>
        
    </table>
    
    
    <iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=f38b27sght4m73mcml7isiq0t0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe> 
    
</div>
    </body>
    </html>