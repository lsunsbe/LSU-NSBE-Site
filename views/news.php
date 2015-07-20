<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>LSU NSBE News</title>
    <link rel="shortcut icon" type="img/ico" href="../images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" href="../styles/news.css">
    <link rel="stylesheet" type="text/css" href="../styles/navmenu.css">
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags -->
    <link rel="stylesheet" href="styles/rrssb.css" />

    <?php
    //Default News Page Meta Tag info
    $title = "LSU NSBE: News";
    $description = "All the most recent and up-to-date on all LSU NSBE news, events, and information.";
    $url = 'http://geauxnsbe.org/news';
    $ident = $uri[2];
    if (!empty($ident)) {
        date_default_timezone_set('America/Chicago');

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("Select * from Posts Where url = '$ident'");
        while ($row = $result->fetch_assoc()) {
            $title = $row['title'];
            $description = $row['description'];
            $url = 'http://geauxnsbe.org/news/' . $row['url'];
        }
    }
    echo "<META NAME='Title' CONTENT='$title'>
            <META NAME='Keywords' CONTENT='LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, News, Stories, Information, GeauxNSBE'>
            <META NAME='Description' CONTENT='$description'>
            <META NAME='Subject' CONTENT='NSBE News'>
            <META NAME='Language' CONTENT='English'>
            <META NAME='Robots' CONTENT='INDEX,FOLLOW'>



            <meta property='og:title' content='$title' />
            <meta property='og:type' content='article' />
            <meta property='og:url' content='$url' />
            <meta property='og:image' content='http://geauxnsbe.org/images/NSBElogo.png'>
            <meta property='og:description' content='$description' />";


    ?>


</head>
<body>


<?php include("components/socialmediabuttons.php");?>

<div id="container">

    <?php /*include("components/header.php");*/
    include("components/header.php"); ?>

    <div id="menu">
        <ul>
            <?php
            /*include("components/navmenu.php"); */
            include("components/navmenu.php");
            writenav("news");
            ?>
        </ul>
    </div>


    <div id="post_container">

        <div>
            <svg id="pic" src="/images/facebook.svg" preserveAspectRatio='xMidYMid' viewBox='0 0 29 29'></svg>
        </div>
        <?php
        /*
            1) Connect to database
            2) Get table data into varaible(s)
            3) Assemble html
        */
        date_default_timezone_set('America/Chicago');

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (empty($ident)){


            $sql = "SELECT * FROM Posts Order By date Desc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $title = $row['title'];
                    $date = strtotime($row['date']);
                    $mysqldate = date('m/d/Y', $date);
                    $description = $row['description'];
                    $ident = $row['url'];
                    $content = str_replace("]", ">", str_replace("[", "<", $row['content']));
                    $content = str_replace("{staticroot}", "/site/", $content);
                    $url = "/news/$ident";
                    $space = 120 - strlen($url);
                    $tweetDescrtip = substr($title, 0, $space) . "...";


                    echo "<div class='post'>
                                                <h3 class='post_title'><a href=$url>$title</a></h3>
                                                <h4 class='post_date'>$mysqldate</h4>
                                                <div class='post_content'>
                                                $content
                                                </div>
                                                <div class='social_media_buttons_container'>
                                                    <!--<div class='fb-share-button' data-href='$url' data-layout='button'></div>
                                                    <a href='https://twitter.com/share' class='twitter-share-button' data-url='$url' data-text='$tweetDescrtip' data-via='GeauxNSBE' data-count='none'></a>
                                                 -->
                                                <ul class='rrssb-buttons clearfix'>
                                                <li class='rrssb-facebook'>
                <a href='https://www.facebook.com/sharer/sharer.php?u=http://kurtnoble.com/labs/rrssb/index.html' class='popup'>
      <span class='rrssb-icon'>
        <svg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid' width='29' height='29' viewBox='0 0 29 29'><path d='M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z'
                                                                                                                                class='cls-2' fill-rule='evenodd'/></svg>
      </span>
                    <span class='rrssb-text'>facebook</span>
                </a>
            </li>
            <li class='rrssb-twitter'>
                <a href='http://twitter.com/home?status=Ridiculously%20Responsive%20Social%20Sharing%20Buttons%20by%20%40dbox%20and%20%40joshuatuscan%3A%20http%3A%2F%2Fkurtnoble.com%2Flabs%2Frrssb%20%7C%20http%3A%2F%2Fkurtnoble.com%2Flabs%2Frrssb%2Fmedia%2Frrssb-preview.png'
                   class='popup'>
                    <span class='rrssb-icon'><svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' viewBox='0 0 28 28'><path d='M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62c-3.122.162-6.22-.646-8.86-2.32 2.702.18 5.375-.648 7.507-2.32-2.072-.248-3.818-1.662-4.49-3.64.802.13 1.62.077 2.4-.154-2.482-.466-4.312-2.586-4.412-5.11.688.276 1.426.408 2.168.387-2.135-1.65-2.73-4.62-1.394-6.965C5.574 7.816 9.54 9.84 13.802 10.07c-.842-2.738.694-5.64 3.434-6.48 2.018-.624 4.212.043 5.546 1.682 1.186-.213 2.318-.662 3.33-1.317-.386 1.256-1.248 2.312-2.4 2.942 1.048-.106 2.07-.394 3.02-.85-.458 1.182-1.343 2.15-2.48 2.71z'/></svg></span>
                    <span class='rrssb-text'>twitter</span>
                </a>
            </li>


                                                </ul> </div>
                                            </div>";

                }
            } else {
                echo "0 results";
            }
            $conn->close();
        } else {
            //Lookup variable name

            $result = $conn->query("Select * from Posts Where url = '$ident'");
            while ($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $date = strtotime($row['date']);
                $mysqldate = date('m/d/Y', $date);
                $description = $row['description'];
                $ident = $row['url'];
                $content = str_replace("]", ">", str_replace("[", "<", $row['content']));
                $content = str_replace("{staticroot}", "/site/", $content);
                $url = "/news/$ident";
                $space = 120 - strlen($url);
                $tweetDescrtip = substr($title, 0, $space) . "...";


                echo "<div class='post'>
                                                <h3 class='post_title'><a href=$url>$title</a></h3>
                                                <h4 class='post_date'>$mysqldate</h4>
                                                <div class='post_content'>
                                                $content
                                                </div>
                                                <div class='social_media_buttons_container'>
                                                    <div class='fb-share-button' data-href='$url' data-layout='button'></div>
                                                    <a href='https://twitter.com/share' class='twitter-share-button' data-url='$url' data-text='$tweetDescrtip' data-via='GeauxNSBE' data-count='none'></a>
                                                </div>
                                            </div>";
            }
        }
        ?>




    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.1.10.2.min.js"><\/script>')</script>
    <script src="scripts/rrssb.min.js"></script>
</body>



<?php
include("components/footer.php");
?>
</html>

