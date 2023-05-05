<?php

include_once 'Regio.php';
$model = new Regio();


if(!isset($_GET['id_region'])) {
	echo "Falta paràmetre!";
	exit;
}
$id_region = $_GET['id_region'];

$resultat = $model->getRegion($id_region);

if($resultat==null) {
	echo "<br>Error Regio No trobada!";
	exit;
}

?>

<h3>Editar Regió</h3>
<form method="POST" action="actualitzaRegio.php?id_region=<?=$resultat['id_region'] ?>">
	Nova Regió <input type="text" name="nom" value="<?=$resultat['nom'] ?>" required><br>
	Clima <input type="text" name="clima" value="<?=$resultat['clima'] ?>" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
