<?php


include('header.php');
buildScore();
echo("huh...");




    $datafile = fopen("data.json", "r");
    echo fread($datafile,filesize("data.json"));
    echo "That iddnt work!";


?>





