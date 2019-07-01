<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/model/categoria.php');

class CategoriaDao {

    public static function ObtenerPorID($id) 
    {
        $cat = new Categoria();
        $params = array
        (
            ":id" => $id
        )
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM categorias where id = :id';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute($params);
        if ($STH->rowCount() > 0)
        {
            $row = $STH->fetch();
            $cat->idCategoria = $row['id'];
            $cat->nombreCategoria = $row['nombre'];
            
        }
    };

    public static function ObtenerTodos() 
    {
        $cont = 0;
        $arrayCat = new array();
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM categorias';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute($params);
        if ($STH->rowCount() > 0)
        {
            while($row = $STH->fetch())
            {
                $cat = new Categoria();
                $cat->idCategoria = $row['id'];
                $cat->nombreCategoria = $row['nombre'];
                $arrayCat[$cont] = $cat;
                $cont++;
            }
        }
        
    }

    public static function nuevo($item) {
        //aca va la logica para crear. Recibe por parametro un objeto de tipo persona
    }// nuevo    

    public static function modificar($item) {
        //aca va la logica para modificar. Recibe por parametro un objeto de tipo persona
    }// modificar

    public static function eliminar($id) {
        //aca va la logica para eliminar
    }// eliminar

}

?>