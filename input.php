<?php

include('header.php');


if(isset($_POST['jamesCharacter'])){
    echo("Hey it worked!");

}

?>

<form action="input.php" method="post">

    <div class="jamesInput inputbox">
        <div class="inputtext">
            James's Character
        </div>
        <div class="characterinput">
            <input name="jamesCharacter" list="characters" title="jameschar" />
            <datalist id="characters">
                <option>Alien</option>
                <option>Bo Rai Cho</option>
                <option>Cassie Cage</option>
                <option>DVorah</option>
                <option>Ermac</option>
                <option>Erron Black</option>
                <option>Ferra/Torr</option>
                <option>Goro</option>
                <option>Jacqui Briggs</option>
                <option>Jason Voorhees</option>
                <option>Jax</option>
                <option>Johnny Cage</option>
                <option>Kano</option>
                <option>Kenshi</option>
                <option>Kitana</option>
                <option>Kotal Kahn</option>
                <option>Kung Jin</option>
                <option>Kung Lao</option>
                <option>Leatherface</option>
                <option>Liu Kang</option>
                <option>Mileena</option>
                <option>Predator</option>
                <option>Quan Chi</option>
                <option>Raiden</option>
                <option>Reptile</option>
                <option>Scorpion</option>
                <option>Shinnok</option>
                <option>Sonya Blade</option>
                <option>Sub-Zero</option>
                <option>Takeda</option>
                <option>Tanya</option>
                <option>Tremor</option>
                <option>Triborg</option>
            </datalist>
        </div>
        <div class="inputtext">
            <td>Wins</td>
        </div>
        <div class="winsinput">
            <td><input type='number' name="jamesscore" title="jamesscore"/> </td>
        </div>

    </table>






</div>
<div class="danInput inputbox">
    <div class="inputtext">
         Danjamin's Character
    </div>
    <div class="characterinput">
    <input name="danielCharacter" list="characters" title="danielchar" />
    <datalist id="characters">
        <option>Alien</option>
        <option>Bo Rai Cho</option>
        <option>Cassie Cage</option>
        <option>DVorah</option>
        <option>Ermac</option>
        <option>Erron Black</option>
        <option>Ferra/Torr</option>
        <option>Goro</option>
        <option>Jacqui Briggs</option>
        <option>Jason Voorhees</option>
        <option>Jax</option>
        <option>Johnny Cage</option>
        <option>Kano</option>
        <option>Kenshi</option>
        <option>Kitana</option>
        <option>Kotal Kahn</option>
        <option>Kung Jin</option>
        <option>Kung Lao</option>
        <option>Leatherface</option>
        <option>Liu Kang</option>
        <option>Mileena</option>
        <option>Predator</option>
        <option>Quan Chi</option>
        <option>Raiden</option>
        <option>Reptile</option>
        <option>Scorpion</option>
        <option>Shinnok</option>
        <option>Sonya Blade</option>
        <option>Sub-Zero</option>
        <option>Takeda</option>
        <option>Tanya</option>
        <option>Tremor</option>
        <option>Triborg</option>
    </datalist>
    </div>
    <div class="inputtext">
            <td>Wins</td>
    </div>
    <div class="winsinput">
        <td><input type='number' name="danielscore" title="danielscore"/> </td>
    </div>
</div>


<input type="submit" class="submitbutton" value="" />
</form>
















<!--<input type="text" list="characters" />
<datalist id="characters">
    <option>Alien</option>
    <option>Bo Rai Cho</option>
    <option>Cassie Cage</option>
    <option>DVorah</option>
    <option>Ermac</option>
    <option>Erron Black</option>
    <option>Ferra/Torr</option>
    <option>Goro</option>
    <option>Jacqui Briggs</option>
    <option>Jason Voorhees</option>
    <option>Jax</option>
    <option>Johnny Cage</option>
    <option>Kano</option>
    <option>Kenshi</option>
    <option>Kitana</option>
    <option>Kotal Kahn</option>
    <option>Kung Jin</option>
    <option>Kung Lao</option>
    <option>Leatherface</option>
    <option>Liu Kang</option>
    <option>Mileena</option>
    <option>Predator</option>
    <option>Quan Chi</option>
    <option>Raiden</option>
    <option>Reptile</option>
    <option>Scorpion</option>
    <option>Shinnok</option>
    <option>Sonya Blade</option>
    <option>Sub-Zero</option>
    <option>Takeda</option>
    <option>Tanya</option>
    <option>Tremor</option>
    <option>Triborg</option>

</datalist>-->