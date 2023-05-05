<?php

	session_start();

/*	$usuaris = [
			"prova" => "prova",
			"enric" => "adsdd34werw",
			"joan"  => "5w5rerer5",
			"usuari" => "usuari"
		];
*/
	if(!isset($_POST['username']) 
		|| !isset($_POST['password'])) {
		$_SESSION["missatge"] = "Has de passar pel formulari";		
		header('Location: ../formLogin.php');		
		exit;
	}

	
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username=="" || $password=="") {
		$_SESSION["missatge"] ="Camps obligatoris";
		header('Location: ../formLogin.php');		
		exit;
	}

	/* echo $usuaris[$username];
	echo $password;
	*/

	include_once 'Usuari.php';
	$model = new Usuari();

	if(!$model->valida($username,$password)) {   
        $_SESSION["missatge"] ="Username o password incorrectes";    	
		
		header('Location: ../formLogin.php');
		exit;
	}

	// TOT OK
	$_SESSION["username"] = $username;
	header('Location: ../index.php');

?>

