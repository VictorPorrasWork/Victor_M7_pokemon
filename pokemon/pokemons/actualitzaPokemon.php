<link rel="stylesheet" href="../CSS/styles.css">
<?php

include_once 'Pokemon.php';
$model = new Pokemon();


if(!isset($_GET['id'])) {
	echo "<br>Falta el codi!";
	exit;
}

$id = $_GET['id'];

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


if($nom!=""  && $tipus!="" && $fase_evolucio!="") {
	//Si no hi han errors de validació s'actualitza el pokemon
	try {
		$res = $model->update($id,$nom,$tipus,$fase_evolucio);
		 
		if($res) echo "<br>Actualitzacio correcta";
		header("Location: llistatPokemons.php");
    
	//En cas d'errors de validació es recuperen els valors i surt el formulari	
    } catch (Exception $e) {
        echo $e->getMessage();
        $resultat = $model->get($id);
    }
}

?>

<h3>Actualitzar Pokemon</h3>
<form method="POST" action="actualitzaPokemon.php?id=<?=$resultat['id'] ?>">
	Nom Pokemon <input type="text" name="nom" value="<?=$resultat['nom'] ?>" required><br>
	Tipus <input type="text" name="tipus" value="<?=$resultat['tipus'] ?>" required><br>
	Fase de la evolució <input type="number" name="fase_evolucio" value="<?=$resultat['fase_evolucio'] ?>"required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>