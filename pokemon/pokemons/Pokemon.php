<?php 

include_once '../ModelPokemon.php';

class Pokemon extends ModelPokemon {

  
  protected $table = "pokemons";

  public function insert($nom,$tipus,$fase_evolucio) 
  {
    // Validar longitud mínima i máxima del nom
    $nomLength = strlen($nom);
    if ($nomLength < 2 || $nomLength > 30) {
        throw new Exception("El nom del pokemon ha de tenir entre 2 i 30 caràcters");
    }

    // Validar el tipus de pokemons existents
    $tipusPermitidos = array("Planta", "Foc", "Psíquic", "Gel", "Elèctric", "Sinistre", "Bitxo", "Drac", "Hada", "Normal", "LLuita", "Volador", "Roca", "Aigua", "Verí");
    $tipusEncontrado = false;
    foreach ($tipusPermitidos as $t) {
        if (strtolower($tipus) === strtolower($t)) {
            $tipusEncontrado = true;
            break;
        }
    }

    if (!$tipusEncontrado) {
        throw new Exception("El tipus de pokemon no es vàlid");
    }

    $sql = "insert into pokemons(nom,tipus,fase_evolucio)
     values(:nom,:tipus,:fase_evolucio)";

    $ordre = $this->bd->prepare($sql);  
    $ordre->bindValue(':nom',$nom); 
    $ordre->bindValue(':tipus',$tipus);
    $ordre->bindValue(':fase_evolucio',$fase_evolucio); 
    $res = $ordre->execute();
    return $res;

  }

  public function update($id,$nom,
      $tipus,$fase_evolucio)
  {
    // Validar longitud mínima i máxima del nom
    $nomLength = strlen($nom);
    if ($nomLength < 2 || $nomLength > 30) {
        throw new Exception("El nom del pokemon ha de tenir entre 2 i 30 caràcters");
    }

    // Validar el tipus de pokemons existents
    $tipusPermitidos = array("Planta", "Foc", "Psíquic", "Gel", "Elèctric", "Sinistre", "Bitxo", "Drac", "Hada", "Normal", "LLuita", "Volador", "Roca", "Aigua", "Verí");
    $tipusEncontrado = false;
    foreach ($tipusPermitidos as $t) {
        if (strtolower($tipus) === strtolower($t)) {
            $tipusEncontrado = true;
            break;
        }
    }
    
    if (!$tipusEncontrado) {
        throw new Exception("El tipus de pokemon no es vàlid");
    }

    
      $sql = "update pokemons set 
      nom=:nom,
      tipus=:tipus,
      fase_evolucio=:fase_evolucio
      where id=:id";

      $ordre = $this->bd->prepare($sql);  
      $ordre->bindValue(':nom',$nom); 
      $ordre->bindValue(':tipus',$tipus);
      $ordre->bindValue(':fase_evolucio',$fase_evolucio); 
      $ordre->bindValue(':id',$id);
      $res = $ordre->execute();
  }

  public function getById($id)
  {
      $sql = "select * from {$this->table} where id=:id";
      $ordre = $this->bd->prepare($sql);
      $ordre->bindValue(':id', $id);
      $ordre->execute();
      $resultat = $ordre->fetch(PDO::FETCH_ASSOC);
      return $resultat;
  }



}

?>