<?php 
include_once '../ModelPokemon.php';

class Usuari extends ModelPokemon {

protected $table = "usuarios";

	public function insert($nom,$cognoms,$email,$username,$password){
		

    // Validar longitud mínima y màxima del nom i cognoms
    $nomLength = strlen($nom);
    $cognomsLength = strlen($cognoms);
    if ($nomLength < 3 || $nomLength > 30 || $cognomsLength < 3 || $cognomsLength > 30) {
        throw new Exception("El nom i cognoms han de tenir entre 3 i 30 caràcters");
    }

    // Validar format del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("L'email no té un format vàlid");
    }

    // Validar longitud mínima y màxima del username
    $usernameLength = strlen($username);
    if ($usernameLength < 3 || $usernameLength > 30) {
        throw new Exception("El nom d'usuari ha de tenir entre 3 i 30 caràcters");
    }

    // Validar contrasenya amb longitud mínima i màxima
    $passwordLength = strlen($password);
    if ($passwordLength < 6 || $passwordLength > 20) {
        throw new Exception("La contrasenya ha de tenir entre 6 i 20 caràcters");
    }


		$sql = "insert into usuarios(nom,cognoms,email,username,password)
		values(:nom,:cognoms,:email,:username,:password)";

		$ordre = $this->bd->prepare($sql);
		$ordre->bindValue(':nom',$nom);
		$ordre->bindValue(':cognoms',$cognoms);
		$ordre->bindValue(':email',$email);
		$ordre->bindValue(':username',$username);
		$ordre->bindValue(':password',md5($password));
		$res = $ordre->execute();

		return $res;

	}

	public function valida ($username,$password){
	//$password sense encriptar
    $sql = "select * from usuarios
    where username=:username AND
    password=:password";
    
    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':username',$username); 
    $ordre->bindValue(':password',md5($password));   
    $ordre->execute(); 
    $resultat = $ordre->fetch(PDO::FETCH_ASSOC);  
    return $resultat;
    if(resultat==null) return false;
    return true;

  	}
	
	public function update ($id,$nom,$cognoms,$email,$username,$password){
	
    // Validar longitud mínima y màxima del nom i cognoms
    $nomLength = strlen($nom);
    $cognomsLength = strlen($cognoms);
    if ($nomLength < 3 || $nomLength > 30 || $cognomsLength < 3 || $cognomsLength > 30) {
        throw new Exception("El nom i cognoms han de tenir entre 3 i 30 caràcters");
    }

    // Validar format del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("L'email no té un format vàlid");
    }

    // Validar longitud mínima y màxima del username
    $usernameLength = strlen($username);
    if ($usernameLength < 3 || $usernameLength > 30) {
        throw new Exception("El nom d'usuari ha de tenir entre 3 i 30 caràcters");
    }

    // Validar contrasenya amb longitud mínima i màxima
    $passwordLength = strlen($password);
    if ($passwordLength < 6 || $passwordLength > 20) {
        throw new Exception("La contrasenya ha de tenir entre 6 i 20 caràcters");
    }	

	//$password sense encriptar
    $sql = "update usuarios set nom=:nom, cognoms=:cognoms,email=:email,username=:username where id=:id";
    
    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':nom',$nom); 
    $ordre->bindValue(':cognoms',$cognoms); 
    $ordre->bindValue(':email',$email); 
    $ordre->bindValue(':username',$username); 
    $ordre->bindValue(':id',$id);   
 	$res = $ordre->execute(); 

	    if($password!="") {

	    $sql = "update usuarios set password=:password 
	    where id=:id";
		$ordre = $this->bd->prepare($sql);  
	    $ordre->bindValue(':password',md5($password)); 
	    $ordre->bindValue(':id',$id);
	    $res = $ordre->execute(); 

	    }


	}




}
?>