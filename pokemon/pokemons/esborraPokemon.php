<?php
include_once 'Pokemon.php';
$model = new Pokemon();


if(!isset($_GET['id'])) {
	echo "Falta paràmetre!";
	exit;
}
$id = $_GET['id'];

if($id!="") {
	$res= $model->delete($id);
	// if($res) echo "<br>Esborrat correctament";
	header("Location: llistatPokemons.php");
}

?>


