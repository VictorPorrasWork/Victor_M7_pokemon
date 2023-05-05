<link rel="stylesheet" href="../CSS/styles.css">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../seguretat.php';
include_once 'Regio.php';

$model = new Regio();
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
<a id="naveg" href="../pokemons/llistatPokemons.php">Pokemons</a>
<a id="naveg" href="../usuaris/llistatUsuaris.php">Usuaris</a>
<a id="naveg" href="altaRegio.php">Nova Regio</a>
<a id="naveg" href="../entrenadors/llistatEntrenadors.php">Entrenadors</a>
<a id="naveg" href="../Te/llistatPokemonEntrenador.php">Relació Entrenadors i Pokemons</a>
<a id="naveg" href="../desconnectar.php">Logout</a>
<table border=1>
	<tr>
		<td class="title">Nova Regio</td>
		<td class="title">Clima</td>
		<td class="title">Operacions</td>
	</tr>
	<?php  foreach($resultat as $regio) {
	?>
		<tr>
			<td><?=$regio['nom']?></td>
			<td><?=$regio['clima']?></td>
			<td><a id="botdel" href="esborraRegio.php?id_region=<?=$regio['id_region']?>">Esborrar</a>
				<a id="botact" href="mostraRegio.php?id_region=<?=$regio['id_region']?>">Actualitzar</a>
			</td>
		</tr>
	<?php }  ?>
	
</table>


<?php
          for ($i=1; $i<=$numPages; $i++) {
          echo "<a href='llistatRegions.php?&page=".$i."' >".$i."</a> ";
      }

?>

