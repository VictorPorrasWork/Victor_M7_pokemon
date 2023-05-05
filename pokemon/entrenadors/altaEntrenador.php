<?php
include_once 'Entrenador.php';
include_once '../regions/Regio.php';

$model_entrenador = new Entrenador();
$model_regio = new Regio();

$regions = $model_regio->getAll();

$sobrenom = "";
if(isset($_POST['sobrenom'])) {
	$sobrenom = $_POST['sobrenom'];
}

$medalles = "";
if(isset($_POST['medalles'])) {
	$medalles = $_POST['medalles'];
}

$id_region = "";
	if(isset($_POST['id_region'])) {
	$id_region = $_POST['id_region'];
}


/*
if($sobrenom!="" && $medalles!="") {
	$res = $model->insert($sobrenom,$medalles);
	//if($res) echo "<br>Alta correcta";
	header("Location: llistatEntrenadors.php");
 
}

*/

if($sobrenom!="" && $medalles!="" && $id_region!="") {
	try {
		$res = $model_entrenador->insertEntrenador($sobrenom,$medalles,$id_region);
		//if($res) echo "<br>Alta correcta";
		header("Location: llistatEntrenadors.php");
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

?>

<h3>Nou Entrenador</h3>
	<form method="POST" action="altaEntrenador.php">
		Nom Entrenador <input type="text" name="sobrenom" required><br>
		Medalles <input type="number" name="medalles" required><br>
		Regió 
	<select name="id_region" required>
		<?php foreach($regions as $regio) { ?>
		<option value="<?=$regio['id_region']?>"><?=$regio['nom']?></option>
		<?php } ?>
	</select>
	<br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>