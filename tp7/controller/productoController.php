<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'nuevo':
        
        $nombreProducto = isset($_POST['nombreProducto']) ? $_POST['nombreProducto'] : $_GET['nombreProducto'];	
        $codigoProducto = isset($_POST['codigoProducto']) ? $_POST['codigoProducto'] : $_GET['codigoProducto'];	
        $precioProducto = isset($_POST['precioProducto']) ? $_POST['precioProducto'] : $_GET['precioProducto'];	
        $descuentoProducto = isset($_POST['descuentoProducto']) ? $_POST['descuentoProducto'] : $_GET['descuentoProducto'];	
        $stockMinimo = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $stockActual = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $categoriaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $fotoProducto = isset($_POST['fotoProducto']) ? $_POST['fotoProducto'] : $_GET['fotoProducto'];	
        $videoProducto = isset($_POST['videoProducto']) ? $_POST['videoProducto'] : $_GET['videoProducto'];	
        $descripcionCortaProducto = isset($_POST['descripcionCortaProducto']) ? $_POST['descripcionCortaProducto'] : $_GET['descripcionCortaProducto'];	
        $descripcionLargaProducto = isset($_POST['descripcionLargaProducto']) ? $_POST['descripcionLargaProducto'] : $_GET['descripcionLargaProducto'];	
        $destacadoProducto = isset($_POST['destacadoProducto']) ? $_POST['destacadoProducto'] : $_GET['destacadoProducto'];	
        $onSaleProducto = isset($_POST['onSaleProducto']) ? $_POST['onSaleProducto'] : $_GET['onSaleProducto'];	
        $mostrarHomeProducto = isset($_POST['mostrarHomeProducto']) ? $_POST['mostrarHomeProducto'] : $_GET['mostrarHomeProducto'];	
        
        $producto = new Producto();
        $producto->nombreProducto = $nombreProducto;
        $producto->codigoProducto = $codigoProducto;
        $producto->precioProdcuto = $precioProducto;
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
            echo $destacadoProducto;
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
        $precioProducto = isset($_POST['precioProducto']) ? $_POST['precioProducto'] : $_GET['precioProducto'];	
        $descuentoProducto = isset($_POST['descuentoProducto']) ? $_POST['descuentoProducto'] : $_GET['descuentoProducto'];	
        $stockMinimo = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $stockActual = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $categoriaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $fotoProducto = isset($_POST['fotoProducto']) ? $_POST['fotoProducto'] : $_GET['fotoProducto'];	
        $videoProducto = isset($_POST['videoProducto']) ? $_POST['videoProducto'] : $_GET['videoProducto'];	
        $descripcionCortaProducto = isset($_POST['descripcionCortaProducto']) ? $_POST['descripcionCortaProducto'] : $_GET['descripcionCortaProducto'];	
        $descripcionLargaProducto = isset($_POST['descripcionLargaProducto']) ? $_POST['descripcionLargaProducto'] : $_GET['descripcionLargaProducto'];	
        $destacadoProducto = isset($_POST['destacadoProducto']) ? $_POST['destacadoProducto'] : $_GET['destacadoProducto'];	
        $onSaleProducto = isset($_POST['onSaleProducto']) ? $_POST['onSaleProducto'] : $_GET['onSaleProducto'];	
        $mostrarHomeProducto = isset($_POST['mostrarHomeProducto']) ? $_POST['mostrarHomeProducto'] : $_GET['mostrarHomeProducto'];	
        
        $producto = new Producto();
        $producto->idProducto = $idProducto;
        $producto->nombreProducto = $nombreProducto;
        $producto->codigoProducto = $codigoProducto;
        $producto->precioProdcuto = $precioProducto;
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
        case 'eliminar':
        echo "Estoy en eliminar";
        $idProducto = isset($_POST['idProducto']) ? $_POST['idProducto'] : $_GET['idProducto'];	
        echo $idProducto;
        $resultado = productoDao::eliminar($idProducto);	
		echo json_encode($resultado);
        break; 
}

?>