<?php

include_once '../entrenadors/Entrenador.php';

class EntrenadorSeeder {

    public static function run() {
        $entrenador = new Entrenador();

        $entrenador->insert( 12,'Jordi Ketchum',8);
        $entrenador->insert( 13,'Francesc Broew',3);
        $entrenador->insert( 14,'Xavi won',6);
        $entrenador->insert( 15,'Robert Oak',10);
    }

}

?>
