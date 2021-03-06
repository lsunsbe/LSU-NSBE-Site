<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>LSU NSBE Photos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" type="img/ico" href="/images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
    <link rel="stylesheet" type="text/css" href="/styles/navmenu.css">
    <link rel="stylesheet" type="text/css" href="/styles/photos.css">
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags-->
    <META NAME="Title" CONTENT="LSU NSBE: Photos">
    <META NAME="Keywords" CONTENT="LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, photos, pictures, images, gallery, albums, album">
    <META NAME="Description" CONTENT="Contact LSU NSBE directly with any comments, questions, or suggestions you
                    want to share.">
    <META NAME="Subject" CONTENT="NSBE Photos">
    <META NAME="Language" CONTENT="English">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <!--Facebook Meta Tags -->
    <meta property="og:title" content="LSU NSBE Photos" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://geauxnsbe.org/photos" />
    <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
    <meta property="og:description" content="View LSU NSBE photos of events and activities that NSBE participates in." />
    <!--Twitter Meta Tags -->

</head>
    <body>
    <?php include("components/socialmediabuttons.php");?>
    <div id="container">
    <?php include("components/header.php"); ?>

        <div id="menu">
    	   <?php include("components/navmenu.php"); echo writenav("photos"); ?>
        </div>   

        <div id="gallerycontainer">
            <?php
                $album = $uri[2];
                if (count($uri) == 4) {
                    $picture = $uri[3];
                } else
                    $picture = -1;
                include('php/photopagewriter.php'); //include statements for methods
                if (empty($album)){
                     constructGallery();
                } else if (($picture == -1) and isset($album)){
                    constructAlbumPage($album);
                } else if (($picture != -1) and isset($album)){
                    constructPhotoPage($album, $picture);
                } else{
                    echo "ERROR";
                }
            ?>

            <br class="clear" />
        </div>     
    </div>
    </body>
<?php
include("components/footer.php");
?>
</html>