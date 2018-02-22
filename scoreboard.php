<?php


include('header.php');
echo 'heeeeeeyyyyyy2';

$gamedata = getGames();

printLatestGamesTable($gamedata);
$jwins = array('Alien' => 0,'Bo Rai Cho' => 0,'Cassie Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui Briggs' => 0,'Jason Voorhees' => 0,'Jax' => 0,'Johnny Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal Kahn' => 0,'Kung Jin' => 0,'Kung Lao' => 0,'Leatherface' => 0,'Liu Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
$jlosses = array('Alien' => 0,'Bo Rai Cho' => 0,'Cassie Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui Briggs' => 0,'Jason Voorhees' => 0,'Jax' => 0,'Johnny Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal Kahn' => 0,'Kung Jin' => 0,'Kung Lao' => 0,'Leatherface' => 0,'Liu Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
$dwins = array('Alien' => 0,'Bo Rai Cho' => 0,'Cassie Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui Briggs' => 0,'Jason Voorhees' => 0,'Jax' => 0,'Johnny Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal Kahn' => 0,'Kung Jin' => 0,'Kung Lao' => 0,'Leatherface' => 0,'Liu Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
$dlosses = array('Alien' => 0,'Bo Rai Cho' => 0,'Cassie Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui Briggs' => 0,'Jason Voorhees' => 0,'Jax' => 0,'Johnny Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal Kahn' => 0,'Kung Jin' => 0,'Kung Lao' => 0,'Leatherface' => 0,'Liu Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);



function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json= file_get_contents('data.json') or die("Unable to get contents!");
    $data = json_decode(trim($data_json), true);
    fclose($datafile);
    print_r($data);
    return $data;
}
function printLatestGamesTable($gamedata)
{
    echo '<table class="latestgames">';
    foreach ($gamedata as $datarow) {
        echo('<tr>
            <td>' . $datarow['round'] . '</td>
            <td>' . $datarow['james']['character'] . '</td>
            <td>' . $datarow['james']['score'] . '</td>
            <td>' . $datarow['daniel']['character'] . '</td>
            <td>' . $datarow['daniel']['score'] . '</td>
        </tr>');
    }
    echo '</table>';
}


?>