<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
	<title>GEAUXNSBE</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/calendar.css">
    <link rel="stylesheet" type="text/css" href="styles/navmenu.css"> 
	<link rel="shortcut icon" type="img/ico" href="images/favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="scripts/index.js"></script>
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

    
    <iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=f38b27sght4m73mcml7isiq0t0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe> 
    
</div>
    </body>
    </html>