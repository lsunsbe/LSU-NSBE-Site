<?php

//Filters out "..", ".", and "DS-STORE"
function file_array_filter($element){
	return !(($element == ".DS_Store") or ($element == "..") or ($element == "."));
}

function constructGallery(){
	$folders = array_filter(scandir("images/gallery"), "file_array_filter");
	foreach ($folders as $f) {
		$albumName = $f;
		$albumCount = 0;
		$albumCount = count(scanDir("images/gallery/$f")) - 3;
		$thumbIndex = rand(0, $albumCount -1) + 3;
		$thumb = "images/gallery/$f/" . scandir("images/gallery/$f")[$thumbIndex];
		echo "
		<div class='album'>
	                <a href='photos?a=$f'> <img class='albumthumb' src='$thumb'> 
	                <p class='albumtitle'>$albumName</p>
	                <p class='albumcount'> $albumCount pictures</p>
                    </a>
	            </div>
	";

	}
	
}

function constructAlbumPage($album){
	$files = array_values(array_filter(scandir("images/gallery/$album"), "file_array_filter"));
	$index = 1; //Passing 0 as a url value sets isempty() as true which broke the pic viewer, so we start at 1 and subtract in next method
	echo "
    <a href='photos'><div class='backButton'>Back to Gallery</div></a> 
    <div class='title'>$album</div><hr/>";
	foreach ($files as $f) {
		echo "<a href='photos?a=$album&p=$index'>
		<div class='pic_thmb_container'>
	                <img class='pic_thmb' src='images/gallery/$album/$f'>
	            </div></a>
	            ";
        $index++;
	        }


}

function constructPhotoPage($album, $photo){
	$files = array_values(array_filter(scandir("images/gallery/$album"), "file_array_filter"));

	$image = $files[$photo-1]; //see above for -1 explanation

    //if index is one, set prev to length of folder
    //if index is length of folder, set next to 1

    $prev = 0;
    $next = 0;
    if ($photo == 1)
        $prev = count($files);
    else
        $prev = $photo - 1;

    if ($photo == count($files)) {
        $next = 1;
    } else {
        $next = $photo + 1;
    }

	echo "
		<a href='photos?a=$album'><div class='backButton'>Back to Album</div></a> 
            <img class='picview' src='images/gallery/$album/$image'>
            <div class='buttons'>
                <a href='photos.php?a=$album&p=$prev'><img id='prevbutton' src='images/arrow_left.png'> </a>
                <a href='photos.php?a=$album&p=$next'><img id='nextbutton'  src='images/arrow_right.png'></a>
            </div>
	";

}


?>