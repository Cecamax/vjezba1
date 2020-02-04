<?php

$teams = array(
    "sarajevo" => "ovo je btim sarajeva",
    "zeljeznicar" => "ovo je tim zeljeznicara",
    "velez" => "ovo je tim veleza"
);

#provjera da li je nesto postavljeno i dali je prazno (nije prazno)

if(isset($_GET['team']) && !empty($_GET['team']) ){
    $team = $_GET ['team'];

    if(array_key_exists($team, $teams)){
        echo "<p> Opis tima: " . $teams[$team] . "</p>";
    }else{
        foreach($teams as $team){
        echo "<p> Opis tima: " . $team . "</p>";
        }
    }

    #provjera da li je parametar postavljen
}else if (isset($_GET ['team']) && $_GET['team'] == 'all'){
    foreach($teams as $teams){
        echo "<p> Opis tima: " . $team . "</p>";
    }

    #sta se desava ako je pogresno (nije postavljen parametar
}else{
    echo "<p> Niste prosljedili valjani parametar, nazalost </p>";

}

?>