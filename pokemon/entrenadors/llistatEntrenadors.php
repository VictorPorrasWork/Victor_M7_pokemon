<link rel="stylesheet" href="../CSS/styles.css">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../seguretat.php';
include_once 'Entrenador.php';
include_once '../regions/Regio.php';

$model = new Entrenador();
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
<a id="naveg" href="../regions/llistatRegions.php">Regions</a>
<a id="naveg" href="altaEntrenador.php">Nou Entrenador</a>
<a id="naveg" href="../Te/llistatPokemonEntrenador.php">Relació Entrenadors i Pokemons</a>
<a id="naveg" href="../desconnectar.php">Logout</a>
<table border=1>
	<tr>
		<td class="title">Entrenador</td>
		<td class="title">Medalles</td>
		<td class="title">Regió</td>
		<td class="title">Operacions</td>
	</tr>
	<?php  foreach($resultat as $entrenador) {
	$modelRegio = new Regio();
	$regio = $modelRegio->getRegion($entrenador['id_region']);
	?>
		<tr>
			<td><?=$entrenador['sobrenom']?></td>
			<td><?=$entrenador['medalles']?></td>
			<td><?=$regio['nom']?></td>
			<td><a id="botdel" href="esborraEntrenador.php?id_entrenador=<?=$entrenador['id_entrenador']?>">Esborrar</a>
				<a id="botact" href="mostraEntrenador.php?id_entrenador=<?=$entrenador['id_entrenador']?>">Actualitzar</a>
			</td>
		</tr>
	<?php }  ?>
	
</table>


<?php
          for ($i=1; $i<=$numPages; $i++) {
          echo "<a href='llistatEntrenadors.php?&page=".$i."' >".$i."</a> ";
      }

?>

