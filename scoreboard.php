<?php


include('header.php');
echo 'heeeeeeyyyyyy2';

$gamedata = getGames();

//printLatestGamesTable($gamedata);



function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json= file_get_contents('data.json') or die("Unable to get contents!");
    $data = json_decode(trim($data_json), true);
    fclose($datafile);
    print_r($data);
    return $data;
}

    echo'<table class="latestgames">';
    foreach($gamedata as $datarow){
        echo('<tr>
            <td>'.$datarow['round'].'</td>
            <td>'.$datarow['james']['character'].'</td>
            <td>'.$datarow['james']['score'].'</td>
            <td>'.$datarow['daniel']['character'].'</td>
            <td>'.$datarow['daniel']['score'].'</td>
        </tr>');
    }
    echo'</table>';



?>