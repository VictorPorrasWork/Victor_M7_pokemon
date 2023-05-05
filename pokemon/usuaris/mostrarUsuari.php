<?php

include_once 'Usuari.php';
$model = new Usuari();


if(!isset($_GET['id'])) {
	echo "Falta paràmetre!";
	exit;
}
$id = $_GET['id'];

$resultat = $model->get($id);

if($resultat==null) {
	echo "<br>Error Super No trobat!";
	exit;
}

?>

<h3>Editar usuari</h3>
<form method="POST" action="actualitzaUsuari.php?id=<?=$resultat['id'] ?>">
	Nom <input type="text" name="Nom" value="<?=$resultat['nom'] ?>" required><br>
	Cognom <input type="text" name="Cognom" value="<?=$resultat['cognoms'] ?>" required><br>
	email <input type="text" name="email" value="<?=$resultat['email'] ?>" required><br>	
	username <input type="text" name="username" value="<?=$resultat['username'] ?>" required><br>
	password <input type="text" name="password" value="" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
