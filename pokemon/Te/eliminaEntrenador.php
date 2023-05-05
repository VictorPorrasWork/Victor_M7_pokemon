<?php
include_once '../seguretat.php';
include_once '../entrenadors/Entrenador.php';
include_once 'PokemonEntrenador.php';

$modelEntrenador = new Entrenador();
$modelPokemonEntrenador = new PokemonEntrenador();

if (isset($_GET['id'])) {
    $id_entrenador = $_GET['id'];
    
    // Obtener todos los registros en pokemon_entrenador con este id_entrenador
    $registros = $modelPokemonEntrenador->getByIdEntrenador($id_entrenador);

    // Eliminar todos los registros en pokemon_entrenador con este id_entrenador
    foreach ($registros as $registro) {
        $modelPokemonEntrenador->deleteByIds($registro['id_pokemon'], $id_entrenador);
    }

    // Eliminar el entrenador de la tabla entrenadors
    $modelEntrenador->delete($id_entrenador);
}

header("Location: llistatEntrenadors.php");
