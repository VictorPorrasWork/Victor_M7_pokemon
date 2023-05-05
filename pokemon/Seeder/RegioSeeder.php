<?php

include_once '../regions/Regio.php';

class RegioSeeder {

    public static function run() {
        $regio = new Regio();

        $regio->insert( 12,'Johto',"solejat");
        $regio->insert( 13,'Kanto',"nuvolat");
        $regio->insert( 14,'Juhty',"plujós");
        $regio->insert( 15,'Thain',"tropical");
    }

}

?>
