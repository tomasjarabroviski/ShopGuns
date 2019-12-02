<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');

$prod = new Producto();



/*$prod->nombreProducto = 'asd';
$prod->codigoProducto = 'asd';
$prod->precioProdcuto = 45;
$prod->descuentoProducto = 3;
$prod->stockMinimo = 4;
$prod->stockActual = 7;
$prod->categoriaProducto = 'TuMama'; 
$prod->fotoProducto = 'asd';
$prod->videoProducto = 'asd';
$prod->descripcionCortaProducto = 'sdf' ;
$prod->descripcionLargaProducto = 'fghfgj';
$prod->destacadoProducto = 1;
$prod->onSaleProducto = 0;
$prod->mostrarHomeProducto = 1; */
$resultado = ProductoDao::filtrarpor('No',false,false,'b');
var_dump($resultado);
/*
$user = new Usuario();
$user->idUsuario = 1;
$user->mailUsuario = 'JEJEJE';
$user->ConstrasenaUsuario = 'AAAA'; 
$user->nombreUsuario = 'dfgdfcg';
$user->apellidoUsuario = 'sdfsdf';
*/



?>