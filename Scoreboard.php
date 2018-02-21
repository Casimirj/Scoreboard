<?php


include('header.php');

echo("huh...");




    $datafile = fopen("data.json", "r");
    echo fread($datafile,filesize("data.json"));
    echo "That iddnt work!";


?>





