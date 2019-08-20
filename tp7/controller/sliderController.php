<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/slider.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'nuevo':
        $foto = isset($_POST['fotoSlider']) ? $_POST['fotoSlider'] : $_GET['fotoSlider'];	
        $texto = isset($_POST['TextoSlider']) ? $_POST['TextoSlider'] : $_GET['TextoSlider'];	
		$slider = new Slider();
        $slider->fotoSlider = $foto;
        $slider->textoSlider = $texto;
		$resultado = SliderDao::nuevo($slider);	
		echo json_encode($resultado);
        break;    
    case 'ObtenerPorID':
        $idSlider = isset($_POST['idSlider']) ? $_POST['idSlider'] : $_GET['idSlider'];	
        $resultado = SliderDao::ObtenerPorID($idSlider);
		echo json_encode($resultado);
        break;
    case 'ObtenerTodos':
        $resultado = SliderDao::ObtenerTodos();
		echo json_encode($resultado);
        break;    
    case 'modificar':
        $foto = isset($_POST['fotoSlider']) ? $_POST['fotoSlider'] : $_GET['fotoSlider'];	
        $texto = isset($_POST['TextoSlider']) ? $_POST['TextoSlider'] : $_GET['TextoSlider'];
        $id = isset($_POST['idSlider']) ? $_POST['idSlider'] : $_GET['idSlider'];		
		$slider = new Slider();
        $slider->fotoSlider = $foto;
        $slider->textoSlider = $texto;
        $slider->idSlider = $id;
		$resultado = SliderDao::modificar($slider);	
		echo json_encode($resultado);
        break;    
}

?>