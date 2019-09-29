<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/slider.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'nuevo':
       $filename = $_FILES['fotoSlider']['name'];
       $texto = isset($_POST['TextoSlider']) ? $_POST['TextoSlider'] : $_GET['TextoSlider'];	
       $vector = array();
       if ( $texto != "" && $filename != null)
       {
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path . basename( $_FILES["fotoSlider"]["name"]);
        move_uploaded_file($_FILES['fotoSlider']['tmp_name'], 'C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR. basename( $_FILES["fotoSlider"]["name"]));
       
        $slider = new Slider();
       $slider->fotoSlider = $filename;
       $slider->textoSlider = $texto;
       $resultado = SliderDao::nuevo($slider);	
       //echo json_encode($resultado);
          
       }
       if ($texto == "") 
       {
       $vector["errorTexto"] = 'Debe Completar El Campo';
       } 
       if ($filename == null){
        $vector["errorFoto"] = 'Debe Completar El Campo';
       }
     
       $resultado = json_encode($vector);
       echo $resultado;
   
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
        $filename = $_FILES['fotoSlider']['name'];
        $texto = isset($_POST['TextoSlider']) ? $_POST['TextoSlider'] : $_GET['TextoSlider'];
        $id = isset($_POST['idSlider']) ? $_POST['idSlider'] : $_GET['idSlider'];
        $vector = array();
        if ( $texto != "" && $filename != null)
        {

        $resultados = SliderDao::ObtenerPorID($id);
        unlink('C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR .  $resultados->fotoSlider);   

        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path . basename( $_FILES["fotoSlider"]["name"]);
        move_uploaded_file($_FILES['fotoSlider']['tmp_name'], 'C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR. basename( $_FILES["fotoSlider"]["name"]));
           

		$slider = new Slider();
        $slider->fotoSlider = $filename;
        $slider->textoSlider = $texto;
        $slider->idSlider = $id;
        $resultado = SliderDao::modificar($slider);
        }
        if ($texto == "") 
        {
        $vector["errorTexto"] = 'Debe Completar El Campo';
        }
        if ($filename == null){
            $vector["errorFoto"] = 'Debe Completar El Campo';
           }
      
        $resultado = json_encode($vector);
        echo $resultado;
        break; 

        case 'eliminar':
        $idSlider = isset($_POST['idSlider']) ? $_POST['idSlider'] : $_GET['idSlider'];	
        $resultado = SliderDao::ObtenerPorID($idSlider);
        unlink('C:\wamp64\www\ShopGuns\tp7\images'. DIRECTORY_SEPARATOR .  $resultado->fotoSlider);
        $resultado = SliderDao::eliminar($idSlider);	
		echo json_encode($resultado);
        break;   
}

?>