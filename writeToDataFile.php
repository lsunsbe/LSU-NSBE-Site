<?php
	 header('Access-Control-Allow-Origin: *');
	$data = $_POST['date'];
	$f = fopen("dataFile.txt", "a");
	echo fputcsv($f, 
			array($_POST['title'], $_POST['date'], $_POST['cat'], $_POST['age'], $_POST['loc'], $_POST['content']), $seperator="{");
	fwrite($f, "~");
	fclose($f);
?>