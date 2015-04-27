<?php
	function writeNav($page){
		$item = "item";
		echo '<ul>';
		if ($page == "index"){
			echo '<li><a class="SELitem" id="home" href="/home">Home</a></li>';
		} else {
			echo '<li><a class="item" id="home" href="/home">Home</a></li>';
		
		}
		if ($page == "purpose"){
			echo '<li><a class="SELitem" id="purpose" href="/about">About NSBE</a></li>';
		} else {
			echo '<li><a class="item" id="purpose" href="/about">About NSBE</a></li>';
		}
		
		if ($page == "eboard"){
			echo '<li><a class="SELitem" id="eboard" href="/eboard">E-Board</a></li>';
		} else {
			echo '<li><a class="item" id="eboard" href="/eboard">E-Board</a></li>';
		}
		
		if ($page == "news"){
			echo '<li><a class="SELitem" id="news" href="/news ">News</a></li>';
		} else {
			echo '<li><a class="item" id="news" href="/news">News</a></li>';
		
		}
		if ($page == "calendar"){
			echo '<li><a class="SELitem" id="calendar" href="/events">Events</a></li>';
		} else {
			echo '<li><a class="item" id="calendar" href="/events">Events</a></li>';
		}
		if ($page == "photos"){
			echo '<li><a class="SELitem" id="photos" href="/photos">Photos</a></li>';
		} else {
			echo '<li><a class="item" id="photos" href="/photos">Photos</a></li>';
		
		}
		if ($page == "contact"){
			echo '<li><a class="SELitem" id="contact" href="/contact">Contact Us</a></li>';
		} else {
			echo '<li><a class="item" id="contact" href="/contact">Contact Us</a></li>';
		
		}
		echo '</ul>';
	}
?>