<!DOCTYPE html>
<html>
<!--Begin Code-->
    <head>
       <title>LSU NSBE Photos</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/navmenu.css">
        <link rel="stylesheet" type="text/css" href="styles/photos.css">
        <link rel="shortcut icon" type="img/ico" href="images/favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="scripts/photos.js" type="text/javascript"></script>
            <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <div id="container">
    <?php include("header.php"); ?>

        <div id="menu">
    	   <?php include("navmenu.php"); echo writenav("photos"); ?>
        </div>   

        <div id="gallerycontainer">
            

            <?php
                include('photopageWriter.php'); //include statements for methods
                $album = $_GET['a'];
                $picture = $_GET['p'];
                if (empty($album) and empty($picture)){
                     constructGallery();
                } else if (empty($picture) and !empty($album)){
                    constructAlbumPage($album);
                } else if (!empty($picture) and !empty($album)){
                    constructPhotoPage($album, $picture);
                } else{
                    echo "ERROR";
                }
            ?>

            <br class="clear" />
        </div>     
    </div>
    </body>
</html>