<?php


include('header.php');

$gamedata = getGames();
printLatestGamesTable($gamedata);
$scores = generateScores($gamedata);
printAllScores($scores);
getWonCharacters($scores);







/*8888888888888888888888888888888888888888888 -- FUNCTIONS -- 88888888888888888888888888888888888888888888888888*/
/*----------------------------VIEWS----------------------------------*/
function printLatestGamesTable($gamedata){
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
function printAllScores($scores){
    $characters = array('Alien','Bo-Rai-Cho','Cassie-Cage','DVorah','Ermac','Erron-Black','Ferra/Torr','Goro','Jacqui-Briggs','Jason-Voorhees','Jax','Johnny-Cage','Kano','Kenshi','Kitana','Kotal-Kahn','Kung-Jin','Kung-Lao','Leatherface','Liu-Kang','Mileena','Predator','Quan-Chi','Raiden','Reptile','Scorpion','Shinnok','Sonya-Blade','Sub-Zero','Takeda','Tanya','Tremor','Triborg');


    echo '<h1>James Scores</h1><table class="scoretable">';
    echo'<tr><th>Character</th><th>Score</th><th>Wins</th><th>Losses</th></tr>';
    foreach($characters as $character){
        echo'<tr><td>'.$character.'</td><td>'.$scores['jscore'][$character].'</td>';
        echo'<td>'.$scores['jwins'][$character].'</td><td>'.$scores['jlosses'][$character].'</td></tr>';
    }
    echo'</table>';
    echo '<h1>Daniel Scores</h1><table class="scoretable">';
    echo'<tr><th>Character</th><th>Score</th><th>Wins</th><th>Losses</th></tr>';
    foreach($characters as $character){
        echo'<tr><td>'.$character.'</td><td>'.$scores['dscore'][$character].'</td>';
        echo'<td>'.$scores['dwins'][$character].'</td><td>'.$scores['dlosses'][$character].'</td></tr>';
    }
    echo'</table>';
}

function printWonCharacters($scores){
    $characters = array('Alien','Bo-Rai-Cho','Cassie-Cage','DVorah','Ermac','Erron-Black','Ferra/Torr','Goro','Jacqui-Briggs','Jason-Voorhees','Jax','Johnny-Cage','Kano','Kenshi','Kitana','Kotal-Kahn','Kung-Jin','Kung-Lao','Leatherface','Liu-Kang','Mileena','Predator','Quan-Chi','Raiden','Reptile','Scorpion','Shinnok','Sonya-Blade','Sub-Zero','Takeda','Tanya','Tremor','Triborg');


    echo '<h1>James Characters</h1><table class="woncharacterstable">';
}

/*----------------------------HELPER FUNCTIONS----------------------------------*/
function getGames(){
    $datafile = fopen("data.json", "r") or die("Unable to open file!");
    $data_json= file_get_contents('data.json') or die("Unable to get contents!");
    $data = json_decode(trim($data_json), true);
    fclose($datafile);
    return $data;
}


function generateScores($gamedata){
    $jscore = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
    $jwinpercent = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
    $jwins = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
    $jlosses = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);

    $dscore = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
    $dwinpercent = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
    $dwins = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);
    $dlosses = array('Alien' => 0,'Bo-Rai-Cho' => 0,'Cassie-Cage' => 0,'DVorah' => 0,'Ermac' => 0,'Erron-Black' => 0,'Ferra/Torr' => 0,'Goro' => 0,'Jacqui-Briggs' => 0,'Jason-Voorhees' => 0,'Jax' => 0,'Johnny-Cage' => 0,'Kano' => 0,'Kenshi' => 0,'Kitana' => 0,'Kotal-Kahn' => 0,'Kung-Jin' => 0,'Kung-Lao' => 0,'Leatherface' => 0,'Liu-Kang' => 0,'Mileena' => 0,'Predator' => 0,'Quan-Chi' => 0,'Raiden' => 0,'Reptile' => 0,'Scorpion' => 0,'Shinnok' => 0,'Sonya-Blade' => 0,'Sub-Zero' => 0,'Takeda' => 0,'Tanya' => 0,'Tremor' => 0,'Triborg' => 0);


    foreach($gamedata as $datarow){
        //Winning Scores
        $jwins[$datarow['james']['character']] += $datarow['james']['score'];
        $jwins[$datarow['daniel']['character']] += $datarow['james']['score'];
        $dwins[$datarow['james']['character']] += $datarow['daniel']['score'];
        $dwins[$datarow['daniel']['character']] += $datarow['daniel']['score'];

        //Losses Scores
        $jlosses[$datarow['james']['character']] += $datarow['daniel']['score'];
        $jlosses[$datarow['daniel']['character']] += $datarow['daniel']['score'];
        $dlosses[$datarow['james']['character']] += $datarow['james']['score'];
        $dlosses[$datarow['daniel']['character']] += $datarow['james']['score'];

        //Overall Scores
        $jscore[$datarow['james']['character']] += $jwins[$datarow['james']['character']] - $jlosses[$datarow['james']['character']];
        $jscore[$datarow['daniel']['character']] += $dlosses[$datarow['james']['character']] - $dwins[$datarow['james']['character']];
        $dscore[$datarow['daniel']['character']] += $dwins[$datarow['daniel']['character']] - $dlosses[$datarow['daniel']['character']];
        $dscore[$datarow['james']['character']] += $jlosses[$datarow['daniel']['character']] - $jwins[$datarow['daniel']['character']];

        //Win Percentage
        $jwinpercent[$datarow['james']['character']] = ($jwins[$datarow['james']['character']]/($jwins[$datarow['james']['character']] + $jlosses[$datarow['james']['character']]));
        $dwinpercent[$datarow['daniel']['character']] = ($dwins[$datarow['daniel']['character']]/($dwins[$datarow['daniel']['character']] + $dlosses[$datarow['daniel']['character']]));

    }
    $scores = array('jscore'=>$jscore, 'jwins'=>$jwins, 'jlosses'=>$jlosses, 'dscore'=>$dscore, 'dwins'=>$dwins, 'dlosses'=>$dlosses);
    return $scores;
}
function getWonCharacters($scores){
    $characters = array('Alien','Bo-Rai-Cho','Cassie-Cage','DVorah','Ermac','Erron-Black','Ferra/Torr','Goro','Jacqui-Briggs','Jason-Voorhees','Jax','Johnny-Cage','Kano','Kenshi','Kitana','Kotal-Kahn','Kung-Jin','Kung-Lao','Leatherface','Liu-Kang','Mileena','Predator','Quan-Chi','Raiden','Reptile','Scorpion','Shinnok','Sonya-Blade','Sub-Zero','Takeda','Tanya','Tremor','Triborg');
    $jbestcharacters =  array();
    $dbestcharacters =  array();
    print_r($scores);
    echo('<p>--------------------------------------------------------------------------------</p>');

    for($i = 0; $i < 10; $i++) {
        $maxjscore = 0;
        $maxjcharacter = '';
        $maxdscore = 0;
        $maxdcharacter = '';

        foreach ($characters as $character) {
            if ($scores['jwinpercent'][$character] > $maxjscore) {
                $maxjscore = $scores['jwinpercent'][$character];
                $maxjcharacter = $character;
            }
            if ($scores['dwinpercent'][$character] > $maxdscore) {
                $maxdscore = $scores['dwinpercent'][$character];
                $maxdcharacter = $character;
            }
        }
        array_push($jbestcharacters, array('character'=>$maxjcharacter, 'score'=>$maxjscore));
        array_push($dbestcharacters, array('character'=>$maxdcharacter, 'score'=>$maxdscore));

        $scores['jwinpercent'][$maxjcharacter] = 0;
        $scores['dwinpercent'][$maxdcharacter] = 0;
    }

    print_r($jbestcharacters);
    print_r($jbestcharacters);

}


?>