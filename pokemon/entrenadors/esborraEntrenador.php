<?php
include_once 'Entrenador.php';
$model = new Entrenador();


if(!isset($_GET['id_entrenador'])) {
	echo "Falta paràmetre!";
	exit;
}
$id_entrenador = $_GET['id_entrenador'];

if($id_entrenador!="") {
	$res= $model->deleteEntrenador($id_entrenador);
	// if($res) echo "<br>Esborrat correctament";
	header("Location: llistatEntrenadors.php");
}

?>


