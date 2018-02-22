<?php


include('header.php');


$gamedata = getGames();
printLatestGamesTable($gamedata);




function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json = fread($datafile,filesize("data.json"));
    $data = json_decode($data_json);
    print_r($data);
    return $data;
}
function printLatestGamesTable($gameData){
    ?><table class="latestgames"><?
    foreach($gameData as $row){
        ?><tr>
            <td><?$row['round']?></td>
            <td><?$row['jamesCharacter']?></td>
            <td><?$row['jamesScore']?></td>
            <td><?$row['danielCharacter']?></td>
            <td><?$row['danielScore']?></td>

        </tr><?
    }
    ?></table>
}


?>
