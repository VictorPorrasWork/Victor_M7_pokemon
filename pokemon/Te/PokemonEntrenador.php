<?php

include_once '../ModelPokemon.php';

class PokemonEntrenador extends ModelPokemon {

    protected $table = "te";

    public function insertTe($id_pokemon, $id_entrenador) 
    {
        $sql = "insert into te(id_pokemon, id_entrenador)
            values(:id_pokemon, :id_entrenador)";

        $ordre = $this->bd->prepare($sql);  
        $ordre->bindValue(':id_pokemon', $id_pokemon); 
        $ordre->bindValue(':id_entrenador', $id_entrenador);
        $res = $ordre->execute();
        return $res;
    }
    
    public function updateByIds($id_pokemon, $id_entrenador, $nom, $sobrenom, $id_unico)
    {
        $sql = "UPDATE te SET id_pokemon=:id_pokemon, id_entrenador=:id_entrenador WHERE id_unico=:id_unico";

        $ordre = $this->bd->prepare($sql);
        $ordre->bindValue(':id_pokemon', $id_pokemon);
        $ordre->bindValue(':id_entrenador', $id_entrenador);
        $ordre->bindValue(':id_unico', $id_unico);
        $res = $ordre->execute();
        return $res;
    }


	public function deleteByIds($id_pokemon, $id_entrenador)
	
	{
	    $sql = "delete from te where id_pokemon=:id_pokemon and id_entrenador=:id_entrenador";
	    $ordre = $this->bd->prepare($sql);
	    $ordre->bindValue(':id_pokemon', $id_pokemon);
	    $ordre->bindValue(':id_entrenador', $id_entrenador);
	    $res = $ordre->execute();
	    return $res;
	}


	public function delete($id) 
	{
	    $sql = "DELETE FROM te WHERE id_unico=:id_unico";
	    $ordre = $this->bd->prepare($sql);
	    $ordre->bindValue(':id_unico', $id);
	    $res = $ordre->execute();
	    return $res;
	}


    public function getAllByPokemonId($id_pokemon) 
    {
        $sql = "select * from te 
            where id_pokemon = :id_pokemon";

        $ordre = $this->bd->prepare($sql);  
        $ordre->bindValue(':id_pokemon', $id_pokemon); 
        $ordre->execute();
        $res = $ordre->fetchAll();
        return $res;
    }

    public function getAllByEntrenadorId($id_entrenador) 
    {
        $sql = "select * from te 
            where id_entrenador = :id_entrenador";

        $ordre = $this->bd->prepare($sql);  
        $ordre->bindValue(':id_entrenador', $id_entrenador); 
        $ordre->execute();
        $res = $ordre->fetchAll();
        return $res;
    }

}


