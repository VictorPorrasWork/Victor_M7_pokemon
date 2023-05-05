<?php
include_once 'Regio.php';

$model = new Regio();

$nom = "";
if(isset($_POST['nom'])) {
	$nom = $_POST['nom'];
}

$clima = "";
if(isset($_POST['clima'])) {
	$clima = $_POST['clima'];
}


if($nom!="" && $clima!="") {
	$res = $model->insert($nom,$clima);
	//if($res) echo "<br>Alta correcta";
	header("Location: llistatRegions.php");
 
}

?>

<h3>Nova Regió</h3>
<form method="POST" action="altaRegio.php">
	Nom Regió <input type="text" name="nom" required><br>
	Clima <input type="text" name="clima" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
