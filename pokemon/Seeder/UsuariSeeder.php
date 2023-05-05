<?php

include_once '../usuaris/Usuari.php';

class UsuariSeeder {

    public static function run() {
        $usuari = new Usuari();

        $usuari->insert( 12,'Antoni','Marti Cansas','antoni@gmail.com','antoni12','abcd');
        $usuari->insert( 12,'Marta','Caparros Sero','marta@gmail.com','marta22','efgh');
        $usuari->insert( 12,'Carla','Vigo Mortense','carla@gmail.com','carla99','hjkl');
        $usuari->insert( 12,'Xavi','Villena','xavi@gmail.com','xavi99','zxcv');
    }

}

?>
