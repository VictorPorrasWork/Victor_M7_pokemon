<link rel="stylesheet" href="../CSS/styles.css">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../seguretat.php';
include_once '../pokemons/Pokemon.php';
include_once '../entrenadors/Entrenador.php';
include_once 'PokemonEntrenador.php';

$modelPokemon = new Pokemon();
$modelEntrenador = new Entrenador();
$modelPokemonEntrenador = new PokemonEntrenador();

if (isset($_POST['id_pokemon']) && isset($_POST['id_entrenador'])) {
    $id_pokemon = $_POST['id_pokemon'];
    $id_entrenador = $_POST['id_entrenador'];

    if (isset($_POST['add'])) {
        $modelPokemonEntrenador->insertTe($id_pokemon, $id_entrenador);
    } else if (isset($_POST['delete'])) {
        $modelPokemonEntrenador->deleteByIds($id_pokemon, $id_entrenador);
    }
}

$pokemons = $modelPokemon->getAll();
$entrenadors = $modelEntrenador->getAll();
$pokemonEntrenadors = $modelPokemonEntrenador->getAll();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $modelPokemonEntrenador->delete($id);
}

?>

<a id="naveg" href="../index.php">Home</a>
<a id="naveg" href="../pokemons/llistatPokemons.php">Pokemons</a>
<a id="naveg" href="../usuaris/llistatUsuaris.php">Usuaris</a>
<a id="naveg" href="../regions/llistatRegions.php">Regions</a>
<a id="naveg" href="../entrenadors/llistatEntrenadors.php">Entrenadors</a>
<a id="naveg" href="../desconnectar.php">Logout</a>

<h3>Relacions Pokemons-Entrenadors</h3>

<form method="POST" action="llistatPokemonEntrenador.php">
    <select name="id_pokemon" required>
        <?php foreach($pokemons as $pokemon) { ?>
            <option value="<?=$pokemon['id']?>"><?=$pokemon['nom']?></option>
        <?php } ?>
    </select>
    <select name="id_entrenador" required>
        <?php foreach($entrenadors as $entrenador) { ?>
            <option value="<?=$entrenador['id_entrenador']?>"><?=$entrenador['sobrenom']?></option>
        <?php } ?>
    </select>
    <input type="submit" name="add" value="Afegir">
    <input type="submit" name="delete" value="Eliminar Tots">
</form>

<table border="1">
    <tr>
        <td class="title">Pokemon</td>
        <td class="title">Entrenador</td>
        <td class="title">Operacions</td>
    </tr>
    <?php foreach($pokemonEntrenadors as $pokemonEntrenador) { 
        $pokemon = $modelPokemon->getById($pokemonEntrenador['id_pokemon']);
        $entrenador = $modelEntrenador->getById($pokemonEntrenador['id_entrenador']);
    ?>
        <tr>
            <td><?=$pokemon['nom']?></td>
            <td><?=$entrenador['sobrenom']?></td>
            <td>
                <a  id="botact" href="actualitzaPokeEntre.php?id_pokemon=<?=$pokemonEntrenador['id_pokemon']?>&id_entrenador=<?=$pokemonEntrenador['id_entrenador']?>
                &id_unico=<?=$pokemonEntrenador['id_unico']?>">Actualitzar</a>

                <a  id="botdel" href="llistatPokemonEntrenador.php?id=<?=$pokemonEntrenador['id_unico']?>">Esborrar</a>
            </td>
        </tr>
    <?php } ?>
</table>
