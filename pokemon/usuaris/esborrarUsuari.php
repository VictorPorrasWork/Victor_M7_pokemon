<?php
include_once 'Usuari.php';
$model = new Usuari();


if(!isset($_GET['id'])) {
	echo "Falta paràmetre!";
	exit;
}
$id = $_GET['id'];

if($id!="") {
	$res= $model->delete($id);
	// if($res) echo "<br>Esborrat correctament";
	header("Location: llistatUsuaris.php");
}

?>
