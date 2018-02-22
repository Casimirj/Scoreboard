<?php


include('header.php');
echo 'heeeeeeyyyyyy2';

//$gamedata = getGames();

//printLatestGamesTable($gamedata);



function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json= file_get_contents('data.json') or die("Unable to get contents!");
    $data = json_decode(trim($data_json), true);
    fclose($datafile);
    print_r($data);
    return $data;
}/*
function printLatestGamesTable($gamedata){
    ?><table class="latestgames"><?
    foreach($gamedata as $datarow){
        ?><tr>
        <td><?echo $datarow['round']?></td>
        <td><?echo $datarow['jamesCharacter']?></td>
        <td><?echo $datarow['jamesScore']?></td>
        <td><?echo $datarow['danielCharacter']?></td>
        <td><?echo $datarow['danielScore']?></td>

        </tr><?
    }
    ?></table><?
}
*/

?>