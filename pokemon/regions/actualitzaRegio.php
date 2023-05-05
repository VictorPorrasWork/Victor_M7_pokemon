<?php

include_once 'Regio.php';
$model = new Regio();


if(!isset($_GET['id_region'])) {
	echo "<br>Falta el codi!";
	exit;
}

$id_region = $_GET['id_region'];

$nom = "";
if(isset($_POST['nom'])) {
	$nom = $_POST['nom'];
}

$clima = "";
if(isset($_POST['clima'])) {
	$clima = $_POST['clima'];
}


if($nom!=""  && $clima!="") {

	$res = $model->update($id_region,$nom,$clima);
	 
	if($res) echo "<br>Actualitzacio correcta";
	header("Location: llistatRegions.php");

}


?>

<button onclick="history.go(-1)">Tornar Enrere</button>



