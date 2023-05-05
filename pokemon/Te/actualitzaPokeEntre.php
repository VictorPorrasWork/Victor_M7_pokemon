<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'PokemonEntrenador.php';
include_once '../pokemons/Pokemon.php';
include_once '../entrenadors/Entrenador.php';

$modelPokemon = new Pokemon();
$modelEntrenador = new Entrenador();
$modelPokemonEntrenador = new PokemonEntrenador();

if (!isset($_GET['id_pokemon']) || !isset($_GET['id_entrenador']) || !isset($_GET['id_unico'])) {
    echo "Falta paràmetre!";
    exit;
}

$id_pokemon = $_GET['id_pokemon'];
$id_entrenador = $_GET['id_entrenador'];
$id_unico = $_GET['id_unico'];

$pokemon = $modelPokemon->getById($id_pokemon);
$entrenador = $modelEntrenador->getById($id_entrenador);

$pokemons = $modelPokemon->getAll();
$entrenadors = $modelEntrenador->getAll();

if (isset($_POST['update'])) {
    $nom = $_POST['id_pokemon'];
    $sobrenom = $_POST['id_entrenador'];
    $modelPokemonEntrenador->updateByIds($nom, $sobrenom, $id_pokemon, $id_entrenador, $id_unico);
    header("Location: llistatPokemonEntrenador.php");
}

?>
<h3>Actualitzar relació Pokemon-Entrenador</h3>
<form method="POST" action="actualitzaPokeEntre.php?id_pokemon=<?=$id_pokemon?>&id_entrenador=<?=$id_entrenador?>&id_unico=<?=$id_unico?>">
    <select name="id_pokemon" required>
        <option value="<?=$pokemon['id']?>" selected><?=$pokemon['nom']?></option>
        <?php foreach($pokemons as $p) { 
                if ($p['id'] != $pokemon['id']) {  
        ?> 
                     <option value="<?=$p['id']?>"><?=$p['nom']?></option>
        <?php 
                }
            }
         ?>
    </select>
    <select name="id_entrenador" required>
        <option value="<?=$entrenador['id_entrenador']?>" selected><?=$entrenador['sobrenom']?></option>
        <?php foreach($entrenadors as $e) { 
            if ($e['id_entrenador'] != $entrenador['id_entrenador']) { 
        ?>
            <option value="<?=$e['id_entrenador']?>"><?=$e['sobrenom']?></option>
        <?php 
             } 
            }
         ?>
    </select>
    <input type="submit" name="update" value="Actualizar">
</form>

<a href="llistatPokemonEntrenador.php">Tornar a la llista de relacions Pokemon-Entrenador</a>
<br>
<br>
<button onclick="history.go(-1)">Tornar Enrere</button>