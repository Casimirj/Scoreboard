<?php


//include('header.php');

echo("<p>huh...</p>");




$datafile = fopen("data.json", "r");
echo fread($datafile,filesize("data.json"));



?>
