<?php


include('header.php');




function buildScore(){
    $datafile = fopen("data.json", "r");
    echo fread($datafile,filesize("data.json"));
    echo "That iddnt work!";
}
function getNewGames(){

}

?>





