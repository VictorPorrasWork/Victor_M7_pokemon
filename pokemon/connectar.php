<?php


function connecta() {
	$usuari="root";
	$password="usuari";    
	$database ="pokemon";
	$host = "localhost";

	try {
		
		$bd = new PDO('mysql:host='.$host.';dbname='.$database, 
	               $usuari, 
	               $password);
	} 
	catch(PDOException $e) {
		echo "Error de connexió";
		exit;
	}

	return $bd;
}

?>