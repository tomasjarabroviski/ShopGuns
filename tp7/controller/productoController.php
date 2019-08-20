<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'nuevo':
        $nombreProducto = isset($_POST['nombreProducto']) ? $_POST['nombreProducto'] : $_GET['nombreProducto'];	
        $codigoProducto = isset($_POST['codigoProducto']) ? $_POST['codigoProducto'] : $_GET['codigoProducto'];	
        $precioProdcuto = isset($_POST['precioProdcuto']) ? $_POST['precioProdcuto'] : $_GET['precioProdcuto'];	
        $descuentoProducto = isset($_POST['descuentoProducto']) ? $_POST['descuentoProducto'] : $_GET['descuentoProducto'];	
        $stockMinimo = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $stockActual = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $categoriaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $fotoProducto = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $videoProducto = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $descripcionCortaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $descripcionLargaProducto = isset($_POST['descripcionLargaProducto']) ? $_POST['descripcionLargaProducto'] : $_GET['descripcionLargaProducto'];	
        $destacadoProducto = isset($_POST['destacadoProducto']) ? $_POST['destacadoProducto'] : $_GET['destacadoProducto'];	
        $onSaleProducto = isset($_POST['onSaleProducto']) ? $_POST['onSaleProducto'] : $_GET['onSaleProducto'];	
        $mostrarHomeProducto = isset($_POST['mostrarHomeProducto']) ? $_POST['mostrarHomeProducto'] : $_GET['mostrarHomeProducto'];	
        
        $producto = new Producto();
        $producto->nombreProducto = $nombreProducto;
        $producto->codigoProducto = $codigoProducto;
        $producto->precioProdcuto = $precioProdcuto;
        $producto->descuentoProducto = $descuentoProducto;
        $producto->stockMinimo = $stockMinimo;
        $producto->stockActual = $stockActual;
        $producto->categoriaProducto = $categoriaProducto;
        $producto->fotoProducto = $fotoProducto;
        $producto->videoProducto = $videoProducto;
        $producto->descripcionCortaProducto = $descripcionCortaProducto;
        $producto->descripcionLargaProducto = $descripcionLargaProducto;
        $producto->destacadoProducto = $destacadoProducto;
        $producto->onSaleProducto = $onSaleProducto;
        $producto->mostrarHomeProducto = $mostrarHomeProducto;

		$resultado = ProductoDao::nuevo($producto);	
		echo json_encode($resultado);
        break;    
    case 'ObtenerPorID':
        $idProducto = isset($_POST['idProducto']) ? $_POST['idProducto'] : $_GET['idProducto'];	
        $resultado = ProductoDao::ObtenerPorID($idProducto);
		echo json_encode($resultado);
        break;
    case 'ObtenerTodos':
        $resultado = ProductoDao::ObtenerTodos();
		echo json_encode($resultado);
        break;    
    case 'modificar':
        $idProducto = (isset($_POST['idProducto']) ? $_POST['idProducto'] : $_GET['idProducto']);	
        $nombreProducto = isset($_POST['nombreProducto']) ? $_POST['nombreProducto'] : $_GET['nombreProducto'];	
        $codigoProducto = isset($_POST['codigoProducto']) ? $_POST['codigoProducto'] : $_GET['codigoProducto'];	
        $precioProdcuto = isset($_POST['precioProdcuto']) ? $_POST['precioProdcuto'] : $_GET['precioProdcuto'];	
        $descuentoProducto = isset($_POST['descuentoProducto']) ? $_POST['descuentoProducto'] : $_GET['descuentoProducto'];	
        $stockMinimo = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $stockActual = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $categoriaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $fotoProducto = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $videoProducto = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $descripcionCortaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $descripcionLargaProducto = isset($_POST['descripcionLargaProducto']) ? $_POST['descripcionLargaProducto'] : $_GET['descripcionLargaProducto'];	
        $destacadoProducto = isset($_POST['destacadoProducto']) ? $_POST['destacadoProducto'] : $_GET['destacadoProducto'];	
        $onSaleProducto = isset($_POST['onSaleProducto']) ? $_POST['onSaleProducto'] : $_GET['onSaleProducto'];	
        $mostrarHomeProducto = isset($_POST['mostrarHomeProducto']) ? $_POST['mostrarHomeProducto'] : $_GET['mostrarHomeProducto'];	
        
        $producto = new Producto();
        $producto->idProducto = $idProducto;
        $producto->nombreProducto = $nombreProducto;
        $producto->codigoProducto = $codigoProducto;
        $producto->precioProdcuto = $precioProdcuto;
        $producto->descuentoProducto = $descuentoProducto;
        $producto->stockMinimo = $stockMinimo;
        $producto->stockActual = $stockActual;
        $producto->categoriaProducto = $categoriaProducto;
        $producto->fotoProducto = $fotoProducto;
        $producto->videoProducto = $videoProducto;
        $producto->descripcionCortaProducto = $descripcionCortaProducto;
        $producto->descripcionLargaProducto = $descripcionLargaProducto;
        $producto->destacadoProducto = $destacadoProducto;
        $producto->onSaleProducto = $onSaleProducto;
        $producto->mostrarHomeProducto = $mostrarHomeProducto;
		$resultado = ProductoDao::modificar($producto);	
		echo json_encode($resultado);
        break;    
}

?>