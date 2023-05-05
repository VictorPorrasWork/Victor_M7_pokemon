<link rel="stylesheet" href="../CSS/styles.css">
<?php

include_once 'Pokemon.php';
$model = new Pokemon();


if(!isset($_GET['id'])) {
	echo "Falta paràmetre!";
	exit;
}
$id = $_GET['id'];

$resultat = $model->get($id);

if($resultat==null) {
	echo "<br>Error Pokemon No trobat!";
	exit;
}

?>

<h3>Editar Pokemon</h3>
<form method="POST" action="actualitzaPokemon.php?id=<?=$resultat['id'] ?>">
	Nom Pokemon <input type="text" name="nom" value="<?=$resultat['nom'] ?>" required><br>
	Tipus <input type="text" name="tipus" value="<?=$resultat['tipus'] ?>" required><br>
	Fase de la evolució <input type="number" name="fase_evolucio" value="<?=$resultat['fase_evolucio'] ?>"required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>