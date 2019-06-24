<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/model/categoria.php');

class CategoriaDao {

    public static function ObtenerPorID($id) {
        //devuelve un objeto de tipo persona
    }// get

    public static function ObtenerTodos() {
        //devuelve un array de objetos de tipo persona
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