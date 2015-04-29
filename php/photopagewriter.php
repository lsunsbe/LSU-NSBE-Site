<?php

//Filters out "..", ".", and "DS-STORE"
function file_array_filter($element){
	return !(($element == ".DS_Store") or ($element == "..") or ($element == "."));
}

function constructGallery(){
    include('config.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("Select * from photos");
    while($row = $result->fetch_assoc()) {

        $albumName = $row['name'];
        $albumInfo = json_decode($row['gallery'], true);
        $albumCount = count($albumInfo);
        $albumThumb = $albumInfo[0]['image'];
        $albumThumb = str_replace("{staticroot}files/", "site/files/thumb_", $albumThumb);

        echo "
		<div class='album'>
	                <a href='photos/$albumName'> <img class='albumthumb' src='/$albumThumb'>
	                <p class='albumtitle'>$albumName</p>
	                <p class='albumcount'> $albumCount pictures</p>
                    </a>
	            </div>
	";

    }

	
}

function constructAlbumPage($album){


	$a = str_replace('%20', " ", $album);

    include('config.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query('Select * from photos where name ="'.$a.'"');
    if ($result->num_rows == 0) {
        //TODO: throw 404
    }
    $row = $result->fetch_assoc();
    $albumInfo = json_decode($row['gallery'], true);



	echo "
        <a href='/photos'><div class='backButton'>Back to Gallery</div></a>
        <div class='title'>$a</div><hr/>";

    for ($i = 0; $i < count($albumInfo); $i+=1) {
        $picture = $albumInfo[$i]['image'];
        $imageName = str_replace("{staticroot}files/", "", $picture);
        $imageThumb = str_replace("{staticroot}files/", "/site/files/thumb_", $picture);
        echo "<a href='/photos/$a/$i'>

		<div class='pic_thmb_container'>
	                <img class='pic_thmb' src='$imageThumb'>
	            </div></a>
	            ";
    }


}

function constructPhotoPage($album, $photo){
	$a = str_replace('%20', " ", $album);
    include('config.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query('Select * from photos where name ="'.$a.'"');
    if ($result->num_rows == 0) {
        //TODO: throw 404
    }
    $row = $result->fetch_assoc();
    $albumInfo = json_decode($row['gallery'], true);
    if ($photo >= count($albumInfo)){
        //TODO: throw 404
    }

    $imageResult = $albumInfo[$photo];
    $imageCamption = $imageResult['caption'];
    $imageFile = str_replace("{staticroot}files/", '/site/files/', $imageResult['image']);

    echo "
		<a href='/photos/$album'><div class='backButton'>Back to Album</div></a>
            <img class='picview' src='$imageFile'>
            <div class='buttons'>
                <a href='/photos/$album/0'><img id='prevbutton' src='/images/arrow_left.png'> </a>
                <a href='/photos/$album/1'><img id='nextbutton'  src='/images/arrow_right.png'></a>
            </div>
	";
}


?>