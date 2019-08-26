<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION
//echo "Estoy en el controller";


switch ($accion) {
    
    case 'nuevo':
   
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre'];
    $vector = array();
    if ($nombre == '')
    {
    $vector["errorNombre"] = 'Debe completar ambos campos';
    $resultado = json_encode($vector);
    echo $resultado;
    } else 
    {
 
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre'];	
		$cat = new Categoria();
		$cat->nombreCategoria = $nombre;
		$resultado = CategoriaDao::nuevo($cat);	
        echo json_encode($resultado);
    }
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
        case 'ObtenerTodos':
        $resultado = CategoriaDao::ObtenerTodos();
		echo json_encode($resultado);
        break;
    case 'modificar':
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : $_GET['nombre'];	
        $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : $_GET['idCategoria'];	
		$cat = new Categoria();
        $cat->nombreCategoria = $nombre;
        $cat->idCategoria = $idCategoria;
		$resultado = CategoriaDao::modificar($cat);	
		echo json_encode($resultado);
        break;
        case 'eliminar':
        echo "Estoy en eliminar";
        $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : $_GET['idCategoria'];	
        $resultado = CategoriaDao::eliminar($idCategoria);	
		echo json_encode($resultado);
        break; 
}

?>