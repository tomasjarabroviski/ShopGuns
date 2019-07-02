<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/model/categoria.php');

class CategoriaDao {

    public static function ObtenerPorID($id) 
    {
        $cat = new Categoria();
        $params = array
        (
            ":id" => $id
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM categorias where idCategoria = :id';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute($params);        
        if ($STH->rowCount() > 0)
        {            
            $row = $STH->fetch();
            $cat->idCategoria = $row['idCategoria'];
            $cat->nombreCategoria = $row['nombreCategoria'];
            
        }
        return $cat;
    }

    public static function ObtenerTodos() 
    {
        $cont = 0;
        $arrayCat = array();
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM categorias';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        if ($STH->rowCount() > 0)
        {
            while($row = $STH->fetch())
            {
                $cat = new Categoria();
                $cat->idCategoria = $row['idCategoria'];
                $cat->nombreCategoria = $row['nombreCategoria'];
                $arrayCat[$cont] = $cat;
                $cont++;
            }
        }
        return  $arrayCat;
        
    }

    public static function nuevo($categoria) 
    {
        $params = array(
            ":nombre" => $categoria->nombreCategoria
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'INSERT INTO categorias (nombreCategoria) VALUES (:nombre)';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
        

    }

    public static function modificar($categoria) 
    {
        $params = array
        (
            ":id" => $categoria->idCategoria,
            ":nombre" => $categoria->nombreCategoria
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'UPDATE categorias SET nombreCategoria = :nombre WHERE idCategoria = :id' ;
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
    }

    public static function eliminar($id) 
    {
        $params = array
        (
            ":id" => $id   
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'DELETE FROM categorias where idCategoria = :id' ;
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
    }

}

?>