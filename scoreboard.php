<?php


include('header.php');
echo 'heeeeeeyyyyyy2';

$gamedata = getGames();

printLatestGamesTable($gamedata);




function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json= file_get_contents('data.json') or die("Unable to get contents!");
    fclose($datafile);
    $data = json_decode($data_json);
    print_r($data);
    return $data;
}
function printLatestGamesTable($gamedata){
    ?><table class="latestgames"><?
    foreach($gamedata as $datarow){
        ?><tr>
            <td><?$datarow['round']?></td>
            <td><?$datarow['jamesCharacter']?></td>
            <td><?$datarow['jamesScore']?></td>
            <td><?$datarow['danielCharacter']?></td>
            <td><?$datarow['danielScore']?></td>

        </tr><?
    }
    ?></table><?
}


?>
