<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'Usuari.php';
$model = new Usuari();

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


if($Nom!=""  && $Cognom!="" && $email!="" && $username!="" && $password!="") {

	try{
		$res =$model->insert($Nom,$Cognom,$email,$username,$password);
	 
		// if($res) echo "<br>Alta correcta";
		header("Location: llistatUsuaris.php");
    } catch (Exception $e) {
        echo $e->getMessage();
    }

}

?>

<h3>Nou usuari</h3>
<form method="POST" action="altaUsuari.php">
	Nom <input type="text" name="Nom" value="<?php echo $Nom; ?>" required=""><br>
	Cognom <input type="text" name="Cognom" value="<?php echo $Cognom; ?>" required><br>
	email <input type="text" name="email" value="<?php echo $email; ?>" required><br>
	username <input type="text" name="username" value="<?php echo $username; ?>" required><br>
	password <input type="text" name="password" value="<?php echo $password; ?>" required><br>
	<input type="submit" value="desar">
</form>

<button onclick="history.go(-1)">Tornar Enrere</button>
