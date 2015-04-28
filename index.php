<?php
include('config.php');

function is_legacy_url($url_arg){
    return preg_match("/(news|photos)\?(\w+=\w+)?(&(\w+=\w+))*/", $url_arg);
}

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);
switch ($uri[1]){
    case "about":
        include('views/purpose.php');
        break;
    case "aboutus":
        include('views/purpose.php');
        break;
    case "aboutnsbe":
        include('views/purpose.php');
        break;
    case "purpose":
        include('views/purpose.php');
        break;
    case "events":
        include('views/events.php');
        break;
    case "news":
        include("views/news.php");
        break;
    case "contact":
        include('views/contact.php');
        break;
    case "photos":
        include('views/photos.php');
        break;
    case "eboard":
        include('views/eboard.php');
        break;
    case "home":
        include('views/home.php');
        break;
    case "index":
        include("views/home.php");
        break;
    case "":
        include("views/home.php");
        break;
    case "mail":
        include("views/mailinglist14.php");
        break;
   case "mailinglist14":
        include("views/mailinglist14.php");
        break;
    case "admin":
        header( 'Location: http://localhost/site/index.php/admin/dashboard/' ) ;
        die();
        break;
    case "rider":
        include('rider.php');
    default:
        include("views/home.php");
        break;
}
?>
