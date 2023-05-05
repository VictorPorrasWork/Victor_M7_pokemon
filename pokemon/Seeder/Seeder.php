<?php

include_once '../ModelPokemon.php';
include_once 'EntrenadorSeeder.php';

$bd = ModelPokemon::getInstance();

UsuariSeeder::run();
EntrenadorSeeder::run();
PokemonSeeder::run();
RegioSeeder::run();

?>

