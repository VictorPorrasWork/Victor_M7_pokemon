<link rel="stylesheet" href="../CSS/styles.css">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../seguretat.php';
include_once 'Usuari.php';

$model = new Usuari();

$resultat = $model->getAll();
$numPages = $model->numPages(2);

$page = 1;
if (isset($_GET['page'])) {
	$page = $_GET['page']; 
}

$resultat = $model->getPage($page,8);



?>
<a id="naveg" href="../index.php">Home</a>
<a id="naveg" href="../pokemons/llistatPokemons.php">Pokemons</a>
<a id="naveg" href="altaUsuari.php">Nou Usuari</a>
<a id="naveg" href="../regions/llistatRegions.php">Regions</a>
<a id="naveg" href="../entrenadors/llistatEntrenadors.php">Entrenadors</a>
<a id="naveg" href="../Te/llistatPokemonEntrenador.php">Relació Entrenadors i Pokemons</a>
<a id="naveg" href="../desconnectar.php">Logout</a>
<table border=1>
	<tr>
		<td class="title">Nom </td>
		<td class="title">Cognom</td>
		<td class="title">email</td>
		<td class="title">username</td>
		<td class="title">password</td>
		<td class="title">Opcions</td>
	</tr>
	<?php  foreach($resultat as $usuari) {
	?>
		<tr>
			<td><?=$usuari['nom']?></td>
			<td><?=$usuari['cognoms']?></td>
			<td><?=$usuari['email']?></td>
			<td><?=$usuari['username']?></td>
			<td><?=$usuari['password']?></td>
			<td><a id="botdel" href="esborrarUsuari.php?id=<?=$usuari['id']?>">Esborrar</a>
				<a id="botact" href="mostrarUsuari.php?id=<?=$usuari['id']?>">Actualitzar</a>
			</td>
		</tr>
	<?php }  ?>
 	
</table>


<?php
          for ($i=1; $i<=$numPages; $i++) {
          echo "<a href='llistatUsuaris.php?&page=".$i."' >".$i."</a> ";
      }

?>

