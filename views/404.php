<?php
/**
 * Created by PhpStorm.
 * User: josephbates
 * Date: 5/15/15
 * Time: 3:06 PM
 */

?>
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
    <link rel="stylesheet" href="styles/rrssb.css" />
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

404


</body>
<?php
include("components/footer.php");
?>
</html>
