<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION
//echo "Estoy en el controller";


switch ($accion) {
    
    case 'nuevo':
   
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre'];
    $vector = array();
    if ($nombre != '')
    {

		$cat = new Categoria();
		$cat->nombreCategoria = $nombre;
		$resultado = CategoriaDao::nuevo($cat);	
   
    }  
    
        if ($nombre == ''){
        $vector["errorNombre"] = 'Debe completar ambos campos';
        
        }
        $resultado = json_encode($vector);
        echo $resultado;
        break;    
    case 'ObtenerPorID':
        $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : $_GET['idCategoria'];	
        $resultado = CategoriaDao::ObtenerPorID($idCategoria);
		echo json_encode($resultado);
        break;
    case 'ObtenerTodos':
        $resultado = CategoriaDao::ObtenerTodos();
		echo json_encode($resultado);
        break;    
    case 'modificar':
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre'];	
        $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : $_GET['idCategoria'];	
        /*$arrayCat = array();
        $arrayCat = CategoriaDao::ObtenerTodos();
        $i = 0;
        $flag = false;
        while ($i < count($arrayCat) && $flag == false):
          if   ($arrayCat->nombreCategoria[$i] ==  $nombre) $flag == true;
            $i++;
        endwhile;
        
        $vector = array();
        if ($flag == true){
            $vector["errorNombre"] = 'Esa categoria ya existe';
            $resultado = json_encode($vector);
            echo $resultado;
        }
*/
        $vector = array();
        if ($nombre != '')
        {
            $cat = new Categoria();
            $cat->nombreCategoria = $nombre;
            $cat->idCategoria = $idCategoria;
            $resultado = CategoriaDao::modificar($cat);		
       
        }  
        
            if ($nombre == ''){
            $vector["errorNombre"] = 'Debe completar ambos campos';
            
            }
            $resultado = json_encode($vector);
            echo $resultado;
        break;
        case 'eliminar':
        echo "Estoy en eliminar";
        $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : $_GET['idCategoria'];	
        echo $idCategoria;
        $resultado = CategoriaDao::eliminar($idCategoria);	
		echo json_encode($resultado);
        break; 
    
}

?>