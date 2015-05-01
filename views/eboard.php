
<!DOCTYPE html>
<html>
<!--Begin Code-->
<head>
    <title>LSU NSBE E-Board</title>
    <link rel="shortcut icon" type="img/ico" href="../images/favicon.ico">
    <!--CSS Files -->
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" href="../styles/eboard.css">
    <link rel="stylesheet" type="text/css" href="../styles/navmenu.css">
    <!--Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--SEO Meta Tags -->
    <META NAME="Title" CONTENT="LSU NSBE: E-Board">
    <META NAME="Keywords" CONTENT="LSU NSBE, NSBE LSU, LSU, NSBE, Engineers, Engineering, E-Board, Executive, Board, Leaders, Leader GeauxNSBE">
    <META NAME="Description" CONTENT="Learn about the LSU NSBE Leaders: Your 2014-2015 Executive Board">
    <META NAME="Subject" CONTENT="NSBE E-Board">
    <META NAME="Language" CONTENT="English">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <!--Facebook Meta Tags -->
    <meta property="og:title" content="LSU NSBE: E-Board" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://geauxnsbe.org/eboard" />
    <meta property="og:image" content="http://geauxnsbe.org/images/NSBElogo.png">
    <meta property="og:description" content="Learn about your LSU NSBE Executive Board." />
    <!--Twitter Meta Tags -->

</head>
<body>

<?php include("components/socialmediabuttons.php");?>

<div id="container">
    

    <?php
        include("components/header.php");
    ?>
    
	<div id="menu">
		<ul>
			<?php
                include("components/navmenu.php");
                writenav("eboard");
            ?>
		</ul>
	</div>
    <!-- Break to break -->
    <br />
    <div id="names">
        <ul>
            <!--<li class="name" id="nvp" onclick="setUnhidden('vpresident');">Alexander Canton</li>-->

            <?php
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "select first_name, last_name from eboard order by last_name";

                $result = $conn->query($sql);
                $i = 0;
                while($row = $result->fetch_assoc()) {
                    $name = $row['first_name']." ".$row['last_name'];
                    echo
                        "<li class='name' id='seat$i'>$name</li>";
                    $i += 1;
                }
            ?>

        </ul>
    </div>

    <div id="biography">


    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

    $sql = "select * from eboard order by last_name";

    $result = $conn->query($sql);
    $i = 0;
    while($row = $result->fetch_assoc()) {
        $name = $row['first_name']." ".$row['last_name'];
        $position = $row['seat'];
        $linked = $row['linkedin'];
        $email = $row['email'];
        $bio = $row['biography'];
        $image = str_replace("{staticroot}", "", $row['picture']);


    echo
        "<div id='bio_seat$i' class='biography_entry'>
            <h2>$name</h2>
            <h3>$position</h3>
            <img id='biography_img' alt='Picture here.' src='$image'>
            <p> $bio </p>

            <a  href='$linked'>
          <img class='linkedin' src='https://static.licdn.com/scds/common/u/img/webpromo/btn_liprofile_blue_80x15.png' width='80' height='15' border='0'  >
                </a>
            <a href='mailto:$email'><img class='emailpic' src='../images/mail2.ico'> </a>
        </div>";
    $i += 1;
    }
    ?>



    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/scripts/eboard.js"></script>
</body>
<?php
include("components/footer.php");
?>
    
</html>
