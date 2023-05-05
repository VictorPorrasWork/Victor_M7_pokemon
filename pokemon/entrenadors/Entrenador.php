<?php 

include_once '../ModelPokemon.php';

class Entrenador extends ModelPokemon {

  
  protected $table = "entrenadors";

  public function insert($sobrenom,$medalles) 
  {

    $sql = "insert into entrenadors(sobrenom,medalles)
     values(:sobrenom,:medalles)";

    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':sobrenom',$sobrenom); 
    $ordre->bindValue(':medalles',$medalles);
    $res = $ordre->execute();
    return $res;

  }

  public function update($id_entrenador,$sobrenom,
      $medalles)
  {
      // Validar longitud mínima i máxima del sobrenom
      $nomLength = strlen($sobrenom);
      if ($nomLength < 3 || $nomLength > 30) {
          throw new Exception("El sobrenom del entrenador ha de tenir entre 3 i 30 caràcters");
      } 

      // Validar número de medalles
      if ($medalles > 200) {
          throw new Exception("Un entrenador no pot tenir més de 200 medalles");
      }

      $sql = "update entrenadors set 
      sobrenom=:sobrenom,
      medalles=:medalles
      where id_entrenador=:id_entrenador";

      $ordre = $this->bd->prepare($sql);  
      $ordre->bindValue(':sobrenom',$sobrenom); 
      $ordre->bindValue(':medalles',$medalles);
      $ordre->bindValue(':id_entrenador',$id_entrenador);
      $res = $ordre->execute();
  }

  public function getById($id_entrenador)
  {
      $sql = "select * from {$this->table} where id_entrenador=:id_entrenador";
      $ordre = $this->bd->prepare($sql);
      $ordre->bindValue(':id_entrenador', $id_entrenador);
      $ordre->execute();
      $resultat = $ordre->fetch(PDO::FETCH_ASSOC);
      return $resultat;
  }


}

?>