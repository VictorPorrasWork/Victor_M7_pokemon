<?php

include_once 'Entrenador.php';
$model = new Entrenador();


if(!isset($_GET['id_entrenador'])) {
	echo "Falta paràmetre!";
	exit;
}
$id_entrenador = $_GET['id_entrenador'];

$resultat = $model->getEntrenador($id_entrenador);

if($resultat==null) {
	echo "<br>Error Entrenador No trobat!";
	exit;
}

?>

<h3>Editar Entrenador</h3>
<form method="POST" action="actualitzaEntrenador.php?id_entrenador=<?=$resultat['id_entrenador'] ?>">
	Nou Entrenador <input type="text" name="sobrenom" value="<?=$resultat['sobrenom'] ?>" required><br>
	Medalles <input type="number" name="medalles" value="<?=$resultat['medalles'] ?>" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
