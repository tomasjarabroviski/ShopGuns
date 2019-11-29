<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION
switch ($accion) {




    case 'porCategoria':
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : $_GET['categoria']; //RECIBO EL PARAMETRO ACCION
    $resultado = ProductoDao::ProductosPorCategoria($categoria);
    echo json_encode($resultado);
    break;
    case 'nuevo':
        
        $nombreProducto = isset($_POST['nombreProducto']) ? $_POST['nombreProducto'] : $_GET['nombreProducto'];	
        $codigoProducto = isset($_POST['codigoProducto']) ? $_POST['codigoProducto'] : $_GET['codigoProducto'];	
        $precioProducto = isset($_POST['precioProducto']) ? $_POST['precioProducto'] : $_GET['precioProducto'];	
        $descuentoProducto = isset($_POST['descuentoProducto']) ? $_POST['descuentoProducto'] : $_GET['descuentoProducto'];	
        $stockMinimo = isset($_POST['stockMinimo']) ? $_POST['stockMinimo'] : $_GET['stockMinimo'];	
        $stockActual = isset($_POST['stockActual']) ? $_POST['stockActual'] : $_GET['stockActual'];	
        $categoriaProducto = isset($_POST['categoriaProducto']) ? $_POST['categoriaProducto'] : $_GET['categoriaProducto'];	
        $fotoProducto = $_FILES['fotoProducto']['name'];
        $videoProducto = isset($_POST['videoProducto']) ? $_POST['videoProducto'] : $_GET['videoProducto'];	
        $descripcionCortaProducto = isset($_POST['descripcionCortaProducto']) ? $_POST['descripcionCortaProducto'] : $_GET['descripcionCortaProducto'];	
        $descripcionLargaProducto = isset($_POST['descripcionLargaProducto']) ? $_POST['descripcionLargaProducto'] : $_GET['descripcionLargaProducto'];	
        $destacadoProducto = isset($_POST['destacadoProducto']) ? $_POST['destacadoProducto'] : $_GET['destacadoProducto'];	
        $onSaleProducto = isset($_POST['onSaleProducto']) ? $_POST['onSaleProducto'] : $_GET['onSaleProducto'];	
        $mostrarHomeProducto = isset($_POST['mostrarHomeProducto']) ? $_POST['mostrarHomeProducto'] : $_GET['mostrarHomeProducto'];	
        
        $vector = array();
        if ($nombreProducto != "" && $codigoProducto != ""  && $precioProducto != ""  && $precioProducto  > 0 && 
         $descuentoProducto != "" &&  $descuentoProducto >= 0 && $stockMinimo != "" && $stockMinimo > 0 && $stockActual != "" && $stockActual >= 0 && $categoriaProducto != "" 
         && $fotoProducto != null && $videoProducto != "" && $descripcionCortaProducto != "" &&
         $descripcionLargaProducto != "" && $destacadoProducto != "" && $onSaleProducto != "" &&   $mostrarHomeProducto != ""){
            
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path . basename( $_FILES["fotoProducto"]["name"]);
        move_uploaded_file($_FILES['fotoProducto']['tmp_name'], 'C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR. basename( $_FILES["fotoProducto"]["name"]));
            
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
            $resultado = ProductoDao::nuevo($producto);	
         }
         if ($nombreProducto == ""){
            $vector["errornombreproducto"] = 'Debe Completar El Campo';
         }
         if ($codigoProducto == ""){
            $vector["errorcodigoProducto"] = 'Debe Completar El Campo';
         }
         if ($precioProducto == "" || $precioProducto <= 0){
             if ($precioProducto == ""){
            $vector["errorprecioProducto"] = 'Debe Completar El Campo';
             } else {
                $vector["errorprecioProducto"] = 'El precio no puede ser menor o igaul a 0'; 
             }
         }
         if ($descuentoProducto == "" || $descuentoProducto < 0){
             if ($descuentoProducto == ""){
            $vector["errordescuentoProducto"] = 'Debe Completar El Campo';
             } else {
                $vector["errordescuentoProducto"] = 'El descuento no puede ser negativo ni mayor a 100';
             }
         }
         if ($stockMinimo == "" || $stockMinimo <= 0){
             if ($stockMinimo == ""){
            $vector["errorstockMinimo"] = 'Debe Completar El Campo';
             } else {
                $vector["errorstockMinimo"] = 'El stock Minimo no puede ser menor o igual a 0';
             }
         }
         if ($stockActual == "" || $stockActual < 0){
             if ($stockActual == ""){
            $vector["errorstockActual"] = 'Debe Completar El Campo';
             } else {
                $vector["errorstockActual"] = 'El Strock Actual no puede ser negativo';
             }
         }
         if ($categoriaProducto == ""){
            $vector["errorcategoriaProducto"] = 'Debe Completar El Campo';
         }
         if ($fotoProducto == null){
            $vector["errorfotoProducto"] = 'Debe Completar El Campo';
         }
         if ($videoProducto == ""){
            $vector["errorvideoProducto"] = 'Debe Completar El Campo';
         }
         if ($descripcionCortaProducto == ""){
            $vector["errordescripcionCortaProducto"] = 'Debe Completar El Campo';
         }
         if ($descripcionLargaProducto == ""){
            $vector["errordescripcionLargaProducto"] = 'Debe Completar El Campo';
         }
         if ($destacadoProducto == ""){
            $vector["errordestacadoProducto"] = 'Debe Completar El Campo';
         }
         if ($onSaleProducto == ""){
            $vector["erroronSaleProducto"] = 'Debe Completar El Campo';
         }
         if ($mostrarHomeProducto == ""){
            $vector["errormostrarHomeProducto"] = 'Debe Completar El Campo';
         }
         $resultado = json_encode($vector);
         echo $resultado;
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
        case 'Filtrar':
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : $_GET['categoria'];	
        $ordenPrecio = isset($_POST['ordenPrecio']) ? $_POST['ordenPrecio'] : $_GET['ordenPrecio'];
        $ordenDesc = isset($_POST['ordenDesc']) ? $_POST['ordenDesc'] : $_GET['ordenDesc'];		
        $resultado = ProductoDao::filtrarpor($categoria, $ordenPrecio, $ordenDesc);
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
      $fotoProducto = $_FILES['fotoProducto']['name'];
      $videoProducto = isset($_POST['videoProducto']) ? $_POST['videoProducto'] : $_GET['videoProducto'];	
      $descripcionCortaProducto = isset($_POST['descripcionCortaProducto']) ? $_POST['descripcionCortaProducto'] : $_GET['descripcionCortaProducto'];	
      $descripcionLargaProducto = isset($_POST['descripcionLargaProducto']) ? $_POST['descripcionLargaProducto'] : $_GET['descripcionLargaProducto'];	
      $destacadoProducto = isset($_POST['destacadoProducto']) ? $_POST['destacadoProducto'] : $_GET['destacadoProducto'];	
      $onSaleProducto = isset($_POST['onSaleProducto']) ? $_POST['onSaleProducto'] : $_GET['onSaleProducto'];	
      $mostrarHomeProducto = isset($_POST['mostrarHomeProducto']) ? $_POST['mostrarHomeProducto'] : $_GET['mostrarHomeProducto'];	
      
      $vector = array();
      if ($nombreProducto != "" && $codigoProducto != ""  && $precioProducto != ""  && $precioProducto  > 0 && 
       $descuentoProducto != "" &&  $descuentoProducto >= 0 && $stockMinimo != "" && $stockMinimo > 0 && $stockActual != "" && $stockActual >= 0 && $categoriaProducto != "" 
       && $fotoProducto != null && $videoProducto != "" && $descripcionCortaProducto != "" &&
       $descripcionLargaProducto != ""){


         $resultados = ProductoDao::ObtenerPorID($idProducto);
         unlink('C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR .  $resultados->fotoProducto);   

         $destination_path = getcwd().DIRECTORY_SEPARATOR;
         $target_path = $destination_path . basename( $_FILES["fotoProducto"]["name"]);
         move_uploaded_file($_FILES['fotoProducto']['tmp_name'], 'C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR. basename( $_FILES["fotoProducto"]["name"]));
      
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
       }
       if ($nombreProducto == ""){
          $vector["errornombreproducto"] = 'Debe Completar El Campo';
       }
       if ($codigoProducto == ""){
          $vector["errorcodigoProducto"] = 'Debe Completar El Campo';
       }
       if ($precioProducto == "" || $precioProducto <= 0){
           if ($precioProducto == ""){
          $vector["errorprecioProducto"] = 'Debe Completar El Campo';
           } else {
              $vector["errorprecioProducto"] = 'El precio no puede ser menor o igaul a 0'; 
           }
       }
       if ($descuentoProducto == "" || $descuentoProducto < 0){
           if ($descuentoProducto == ""){
          $vector["errordescuentoProducto"] = 'Debe Completar El Campo';
           } else {
              $vector["errordescuentoProducto"] = 'El descuento no puede ser negativo ni mayor a 100';
           }
       }
       if ($stockMinimo == "" || $stockMinimo <= 0){
           if ($stockMinimo == ""){
          $vector["errorstockMinimo"] = 'Debe Completar El Campo';
           } else {
              $vector["errorstockMinimo"] = 'El stock Minimo no puede ser menor o igual a 0';
           }
       }
       if ($stockActual == "" || $stockActual < 0){
           if ($stockActual == ""){
          $vector["errorstockActual"] = 'Debe Completar El Campo';
           } else {
              $vector["errorstockActual"] = 'El Strock Actual no puede ser negativo';
           }
       }
       if ($categoriaProducto == ""){
          $vector["errorcategoriaProducto"] = 'Debe Completar El Campo';
       }
       if ($fotoProducto == ""){
          $vector["errorfotoProducto"] = 'Debe Completar El Campo';
       }
       if ($videoProducto == ""){
          $vector["errorvideoProducto"] = 'Debe Completar El Campo';
       }
       if ($descripcionCortaProducto == ""){
          $vector["errordescripcionCortaProducto"] = 'Debe Completar El Campo';
       }
       if ($descripcionLargaProducto == ""){
          $vector["errordescripcionLargaProducto"] = 'Debe Completar El Campo';
       }
       $resultado = json_encode($vector);
       echo $resultado;
      break;    
        case 'eliminar':
       // echo "Estoy en eliminar";
        $idProducto = isset($_POST['idProducto']) ? $_POST['idProducto'] : $_GET['idProducto'];	
        echo $idProducto;
        $resultado = ProductoDao::ObtenerPorID($idProducto);
        unlink('C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR .  $resultado->fotoProducto);


        $resultado = productoDao::eliminar($idProducto);	
		echo json_encode($resultado);
        break; 
}
?>