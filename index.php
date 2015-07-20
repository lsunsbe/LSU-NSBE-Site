<?php
include('config.php');

function is_legacy_url($url_arg){
    return preg_match("/(news|photos)\?(\w+=\w+)?(&(\w+=\w+))*/", $url_arg);
}

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);
switch ($uri[1]){
    case "about":
        include('views/about.php');
        break;
    case "aboutus":
        include('views/about.php');
        break;
    case "aboutnsbe":
        include('views/about.php');
        break;
    case "purpose":
        include('views/about.php');
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
        include("views/mail.php");
        break;
   case "mailinglist14":
        include("views/mail.php");
        break;
    case "admin":
        header( 'Location: http://localhost/site/index.php/admin/dashboard/' ) ;
        die();
        break;
    case "404":
        include('views/404.php');
        break;
    default:
        http_response_code(404);
        include("views/404.php");
        break;
}
?>
