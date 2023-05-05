<link rel="stylesheet" href="../CSS/styles.css">
<?php
include_once 'Pokemon.php';

$model = new Pokemon();

$nom = "";
if(isset($_POST['nom'])) {
	$nom = $_POST['nom'];
}

$tipus = "";
if(isset($_POST['tipus'])) {
	$tipus = $_POST['tipus'];
}

$fase_evolucio = "";
if(isset($_POST['fase_evolucio'])) {
	$fase_evolucio = $_POST['fase_evolucio'];
}


if($nom!="" && $tipus!="" && $fase_evolucio!="") {
	
	try {
		$res = $model->insert($nom,$tipus,$fase_evolucio);
		//if($res) echo "<br>Alta correcta";
		header("Location: llistatPokemons.php");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<h3>Nou Pokemon</h3>
<form method="POST" action="altaPokemon.php">
	Nom pokemon <input type="text" name="nom" required><br>
	Tipus <input type="text" name="tipus" required><br>
	Fase de la Evolució <input type="number" name="fase_evolucio" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
