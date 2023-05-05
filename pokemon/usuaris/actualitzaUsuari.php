<?php

include_once 'Usuari.php';
$model = new Usuari();


if(!isset($_GET['id'])) {
	echo "<br>Falta el codi!";
	exit;
}

$id = $_GET['id'];

$Nom = "";
if(isset($_POST['Nom'])) {
	$Nom = $_POST['Nom'];
}
$Cognom = "";
if(isset($_POST['Cognom'])) {
	$Cognom = $_POST['Cognom'];
}
$email = "";
if(isset($_POST['email'])) {
	$email = $_POST['email'];
}
$username = "";
if(isset($_POST['username'])) {
	$username = $_POST['username'];
}
$password = "";
if(isset($_POST['password'])) {
	$password = $_POST['password'];
}

//si esta en blanco entro
if($id!="" && $Nom!=""  && $Cognom!="" && $email!="" && $username!="") {

	try{
		$res =$model->update($id,$Nom,$Cognom,$email,$username,$password);
		 
		if($res) echo "<br>Actualitzacio correcta";
		header("Location: llistatUsuaris.php");
		//En cas d'errors de validació es recuperen els valors i surt el formulari	
	    } catch (Exception $e) {
	        echo $e->getMessage();
	        $res = $model->get($id);
	    }
}


?>

<h3>Editar usuari</h3>
<form method="POST" action="actualitzaUsuari.php?id=<?=$resultat['id'] ?>">
	Nom <input type="text" name="Nom" value="<?=$resultat['nom']?>" required><br>
	Cognom <input type="text" name="Cognom" value="<?=$resultat['cognoms']?>" required><br>
	email <input type="text" name="email" value="<?=$resultat['email']?>" required><br>	
	username <input type="text" name="username" value="<?=$resultat['username']?>" required><br>
	password <input type="text" name="password" value="" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
