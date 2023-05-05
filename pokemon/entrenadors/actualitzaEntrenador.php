<?php

include_once 'Entrenador.php';
$model = new Entrenador();


if(!isset($_GET['id_entrenador'])) {
	echo "<br>Falta el codi!";
	exit;
}

$id_entrenador = $_GET['id_entrenador'];

$sobrenom = "";
if(isset($_POST['sobrenom'])) {
	$sobrenom = $_POST['sobrenom'];
}

$medalles = "";
if(isset($_POST['medalles'])) {
	$medalles = $_POST['medalles'];
}


if($sobrenom!=""  && $medalles!="") {

	//Si no hi han errors de validació s'actualitza l'entrenador
	try {

	$res = $model->update($id_entrenador,$sobrenom,$medalles);
	 
	if($res) echo "<br>Actualitzacio correcta";
	header("Location: llistatEntrenadors.php");

	//En cas d'errors de validació es recuperen els valors i surt el formulari	
    } catch (Exception $e) {
        echo $e->getMessage();
        $resultat = $model->getEntrenador($id_entrenador);
    }
}

?>

<h3>Editar Entrenador</h3>
<form method="POST" action="actualitzaEntrenador.php?id_entrenador=<?=$resultat['id_entrenador'] ?>">
	Nou Entrenador <input type="text" name="sobrenom" value="<?=$resultat['sobrenom'] ?>" required><br>
	Medalles <input type="number" name="medalles" value="<?=$resultat['medalles'] ?>" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>