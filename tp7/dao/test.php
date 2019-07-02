<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');


$resultado = CategoriaDao::eliminar(3);
var_dump($resultado);
?>