<?php

class ModelPokemon {

  private $usuari="root";
  private $password="usuari";    
  private $database ="pokemon";
  private $host = "localhost";

  protected $bd;

  protected $table = "";
  
  public function __construct() {
    try {
      
      $this->bd = new PDO('mysql:host='.$this->host.';dbname='.$this->database, 
                   $this->usuari, 
                   $this->password);
    } 
    catch(PDOException $e) {
      echo "Error de connexió";
      exit;
    }    
    
  }


  //CRUD: create, read, update, delete

  public function getAll() {

    $sql = "select * from ".$this->table;
    $query = $this->bd->query($sql);
    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
    //print_r($resultat);
    return $resultat;
  }

  public function delete($id) {

    $sql = "delete from ".$this->table." where id=:id";

    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':id',$id);   
    $res = $ordre->execute();
    return $res;
  
  }

  public function get($id) {

    $sql = "select * from ".$this->table." where id=:id";
    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':id',$id);   
    $ordre->execute(); 
    $resultat = $ordre->fetch(PDO::FETCH_ASSOC);  
    return $resultat;
  }

  public function numPages($num_regs) {

    $sql = "select count(*),count(*) from ".$this->table;
    //echo "<br>".$sql."<br>";
    $resultat = $this->bd->prepare($sql);
    $resultat->execute();
    $reg = $resultat->fetch(PDO::FETCH_NUM); // recuperem el registre
    //print_r($reg);
    $total_regs = $reg[0]; // la informaciÃ³ estarÃ  
    // en la primera posiciÃ³ del array
    $total_pags = ceil($total_regs / $num_regs);
    return $total_pags;
  }

  public function getPage($pagina, $numRegs) {
    $inici = ($pagina - 1) * $numRegs;
    $sentencia = $this->bd->prepare("SELECT * from ".$this->table." LIMIT :ini, :numr");
    // El bindValue porta un segon paràmetre per especificar el tipus de la variable que es vol enllaçar.
    // S'ha de fer així per a que ens funcionni correctament!
    $sentencia->bindValue(':ini', $inici, PDO::PARAM_INT);
    $sentencia->bindValue(':numr', $numRegs, PDO::PARAM_INT);
    $sentencia->execute();
    $resultat = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
    }

  //Region

  public function deleteRegion($id_region) {

    $sql = "delete from ".$this->table." where id_region=:id_region";

    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':id_region',$id_region);   
    $res = $ordre->execute();
    return $res;
  
  }

  public function getRegion($id_region) {

    $sql = "select * from ".$this->table." where id_region=:id_region";
    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':id_region',$id_region);   
    $ordre->execute(); 
    $resultat = $ordre->fetch(PDO::FETCH_ASSOC);  
    return $resultat;
  }

  //Entrenador

  public function deleteEntrenador($id_entrenador) {

    $sql = "delete from ".$this->table." where id_entrenador=:id_entrenador";

    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':id_entrenador',$id_entrenador);   
    $res = $ordre->execute();
    return $res;
  
  }

  public function getEntrenador($id_entrenador) {

    $sql = "select * from ".$this->table." where id_entrenador=:id_entrenador";
    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':id_entrenador',$id_entrenador);   
    $ordre->execute(); 
    $resultat = $ordre->fetch(PDO::FETCH_ASSOC);  
    return $resultat;
  }

//Insert entrenador + nom regio (foreing key de Regio)
  public function insertEntrenador($sobrenom, $medalles, $id_region) {

    // Validar longitud mínima i máxima del sobrenom
    $nomLength = strlen($sobrenom);
    if ($nomLength < 3 || $nomLength > 30) {
        throw new Exception("El sobrenom del entrenador ha de tenir entre 3 i 30 caràcters");
    }    

    // Validar número de medalles
    if ($medalles > 200) {
        throw new Exception("Un entrenador no pot tenir més de 200 medalles");
    }
      $sql = "insert into ".$this->table." (sobrenom, medalles, id_region) values (:sobrenom, :medalles, :id_region)";

      $ordre = $this->bd->prepare($sql);  
      $ordre->bindValue(':sobrenom', $sobrenom);   
      $ordre->bindValue(':medalles', $medalles);   
      $ordre->bindValue(':id_region', $id_region);   
      $res = $ordre->execute();
      return $res;
    
    }

}




































