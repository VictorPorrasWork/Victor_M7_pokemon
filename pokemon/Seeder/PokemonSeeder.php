<?php

include_once '../pokemons/Pokemon.php';

class PokemonSeeder {

    public static function run() {
        $pokemon = new Pokemon();

        $pokemon->insert( 20,'spearow','Volador', 1);
        $pokemon->insert( 21,'clefairy','Hada', 2);
        $pokemon->insert( 22,'ekans','Verí', 1);
        $pokemon->insert( 23,'poliwhirl','Aigua', 2);
    }

}

?>
