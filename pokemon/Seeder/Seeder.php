<?php

include_once '../ModelPokemon.php';
include_once 'EntrenadorSeeder.php';

$bd = ModelPokemon::getInstance();

EntrenadorSeeder::run();

?>

