<?php 

include_once '../ModelPokemon.php';

class Regio extends ModelPokemon {

  
  protected $table = "regions";

  public function insert($nom,$clima) 
  {

    $sql = "insert into regions(nom,clima)
     values(:nom,:clima)";

    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':nom',$nom); 
    $ordre->bindValue(':clima',$clima);
    $res = $ordre->execute();
    return $res;

  }

  public function update($id_region,$nom,
      $clima)
  {
      $sql = "update regions set 
      nom=:nom,
      clima=:clima
      where id_region=:id_region";

      $ordre = $this->bd->prepare($sql);  
      $ordre->bindValue(':nom',$nom); 
      $ordre->bindValue(':clima',$clima);
      $ordre->bindValue(':id_region',$id_region);
      $res = $ordre->execute();
  }




}

?>