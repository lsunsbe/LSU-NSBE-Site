<?php

function constructGallery(){
	$folders = scandir("images/gallery");
	foreach ($folders as $f) {
		if (is_dir("images/gallery/$f") && ($f != ".") && ($f != "..")){
		$albumName = $f;
		$albumCount = 0;
		$albumCount = count(scanDir("images/gallery/$f")) - 3;
		$thumbIndex = rand(0, $albumCount -1) + 3;
		$thumb = "images/gallery/$f/" . scandir("images/gallery/$f")[$thumbIndex];
		echo "
		<div class='album'>
	                <a href='photos?a=$f'> <img class='albumthumb' src='$thumb'> </a>
	                <p class='albumtitle'>$albumName</p>
	                <p class='albumcount'> $albumCount pictures</p>
	            </div>
	";
		}
	}
	
}

function constructAlbumPage($album){
	$files = scandir("images/gallery/$album");
	$index = 0;
	echo "<div class='title'>$album</div>";
	foreach ($files as $f) {
		if (!is_dir("images/gallery/$album/$f") and ($f != ".DS_Store")){
		echo "
		<div class='pic_thmb_container'>
	                <a href='photos?a=$album&p=$index'><img class='pic_thmb' src='images/gallery/$album/$f'></a>
	            </div>
	            ";
	        }
	        $index++;
	    }
}


function constructPhotoPage($album, $photo){
	$files = scandir("images/gallery/$album");
	$image = $files[$photo];
	echo "
		<div class='backButton'><a href='photos?a=$album'>BACK</a> </div>
            <img class='picview' src='images/gallery/$album/$image'>
            <div class='buttons'>
                <div class='prevButton'><p>Hello</p></div>
                <div class='nextButton'><p>World</p></div>
            </div>
	";

}



?>