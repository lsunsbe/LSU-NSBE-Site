<?php
    $file = fopen("../mailinglist14.txt", "r") or die("Error.");
    $dataString = fgets($file);
    echo $dataString;
?>