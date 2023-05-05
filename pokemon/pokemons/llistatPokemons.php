<link rel="stylesheet" href="../CSS/styles.css">

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../seguretat.php';
include_once 'Pokemon.php';

$model = new Pokemon();
$resultat = $model->getAll();
//$model->numPages(2);
$numPages = $model->numPages(2);

$page = 1;
if (isset($_GET['page'])) {
	$page = $_GET['page']; 
}

$resultat = $model->getPage($page,8);


?>
<a id="naveg" href="../index.php">Home</a>
<a id="naveg" href="altaPokemon.php">Nou Pokemon</a>
<a id="naveg" href="../usuaris/llistatUsuaris.php">Usuaris</a>
<a id="naveg" href="../regions/llistatRegions.php">Regions</a>
<a id="naveg" href="../entrenadors/llistatEntrenadors.php">Entrenadors</a>
<a id="naveg" href="../Te/llistatPokemonEntrenador.php">Relació Entrenadors i Pokemons</a>
<a id="naveg" href="../desconnectar.php">Logout</a>
<table border=1>
	<tr>
		<td class="title">Nom Pokemon</td>
		<td class="title">Tipus</td>
		<td class="title">Fase Evolució</td>
		<td class="title">Operacions</td>
	</tr>
	<?php  foreach($resultat as $pokemon) {
	?>
		<tr>
			<td><?=$pokemon['nom']?></td>
			<td><?=$pokemon['tipus']?></td>
			<td><?=$pokemon['fase_evolucio']?></td>
			<td><a id="botdel" href="esborraPokemon.php?id=<?=$pokemon['id']?>">Esborrar</a>
				<a id="botact" href="mostraPokemon.php?id=<?=$pokemon['id']?>">Actualitzar</a>
			</td>
		</tr>
	<?php }  ?>
	
</table>
<br>

<?php
          for ($i=1; $i<=$numPages; $i++) {
          echo "<a href='llistatPokemons.php?&page=".$i."' >".$i."</a> ";
      }

?>

