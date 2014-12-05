
<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>LSU NSBE News</title>
    <link rel="shortcut icon" type="img/ico" href="images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" type="text/css" href="styles/navmenu.css">
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags -->

    <?php
    //Default News Page Meta Tag info
    $title = "LSU NSBE: News";
    $description = "All the most recent and up-to-date on all LSU NSBE news, events, and information.";
    $url = 'http://geauxnsbe.org/news';

    if (!empty($_GET['s'])) {
        date_default_timezone_set('America/Chicago');

        $servername = "127.0.0.1";
        $username = "root";
        $password = "cabrini93";
        $dbname = "GeauxNSBE";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare('SELECT * FROM Posts WHERE ident = ?');
        $stmt->bind_param('s', $_GET['s']);

        $stmt->execute();

        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $title = $row['title'];
            $description = $row['description'];
            $url = 'http://geauxnsbe.org/news?s=' . $row['ident'];
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


<div id="floatingsocial">
    <div class="button" id="facebookbutton">
        <a href="https://www.facebook.com/GeauxNSBE" target="_blank">
            <img src="images/Facebook_Logo.jpeg"
                 alt=""
                >
        </a>
    </div>

    <div class="button" id="twitterbutton">
        <a href="https://www.twitter.com/GeauxNSBE" target="_blank">
            <img src="images/Twitter_logo_blue.jpg"
                 alt=""
                >
        </a>
    </div>

    <div class="button" id="instagrambutton">
        <a href="https://www.instagram.com/nsbe_lsu" target="_blank">
            <img src="images/instagram.ico"
                 alt=""
                >
        </a>
    </div>

    <div class="button" id="r5button">
        <a href="http://www.nsbe.org/Regions/Region5/default.aspx" target="_blank">
            <img src="images/roman.png"
                 alt="NSBE Region 5"
                >
        </a>
    </div>

    <div class="button" id="nsbebutton">
        <a href="http://nsbe.org" target="_blank">
            <img src="images/NSBElogo.png"
                 alt="NSBE Official"
                >
        </a>
    </div>

</div>

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


    <!--  News Stories:
            All stories and dates contained within the table. Each row has 2 cells.
            First cell contains date. Second cell has the story content.
            First cell class is named date and contains a <p> element with the date.
            Second cell class is named story and can hold and elements, followed by:
                The Facebook iframe, customized appropriatly, with a class tag "sharebutton"
                the Twitter a, customized apropriatly with a class tag "sharebutton"

            Finally, each row should:
                1) Alternate class labels between "newsstyle1" and "newsstyle2"
                2) Be given id tags for URL purposes (no longer need to be ascending. use keyword)


    -->



    <!-- NEWS STORY 1-->

    <div id="post_container">

        <?php
        /*
            1) Connect to database
            2) Get table data into varaible(s)
            3) Assemble html
        */
        date_default_timezone_set('America/Chicago');

        $servername = "127.0.0.1";
        $username = "root";
        $password = "cabrini93";
        $dbname = "GeauxNSBE";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (empty($_GET['s'])){


            $sql = "SELECT * FROM Posts Order By date Desc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $title = $row['title'];
                    $date = strtotime($row['date']);
                    $mysqldate = date('m/d/Y', $date);
                    $description = $row['description'];
                    $ident = $row['ident'];
                    $content = str_replace("]", ">", str_replace("[", "<", $row['content']));
                    $url = "http://localhost/news?s=$ident";
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
            } else {
                echo "0 results";
            }
            $conn->close();
        } else {
            //Lookup variable name
            $stmt = $conn->prepare('SELECT * FROM Posts WHERE ident = ?');
            $stmt->bind_param('s', $_GET['s']);

            $stmt->execute();

            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $date = strtotime($row['date']);
                $mysqldate = date('m/d/Y', $date);
                $description = $row['description'];
                $ident = $row['ident'];
                $content = str_replace("]", ">", str_replace("[", "<", $row['content']));
                $url = "http://geauxnsbe.org/news?s=$ident";
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


    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</body>



<?php
/*include("components/footer.php"); */
include("components/footer.php");
?>
</html>

