<?php
include_once 'Regio.php';
$model = new Regio();


if(!isset($_GET['id_region'])) {
	echo "Falta paràmetre!";
	exit;
}
$id_region = $_GET['id_region'];

if($id_region!="") {
	$res= $model->deleteRegion($id_region);
	// if($res) echo "<br>Esborrat correctament";
	header("Location: llistatRegions.php");
}

?>


