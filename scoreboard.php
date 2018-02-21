<?php


include('header.php');





$datafile = fopen("data.json", "r");
echo fread($datafile,filesize("data.json"));
fclose($datafile);



function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json = fread($datafile,filesize("data.json"));
    $data = json_decode($data_json);
}


?>
