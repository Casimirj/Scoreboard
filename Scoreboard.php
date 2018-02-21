<?php


include('header.php');
buildScore();
echo("huh...");



function buildScore(){
    $datafile = fopen("data.json", "r");
    echo fread($datafile,filesize("data.json"));
    echo "That iddnt work!";
}
function getNewGames(){

}

?>





