<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/model/slider.php');

class SliderDao {

    public static function ObtenerPorID($id) 
    {
        $slider = new Slider();
        $params = array
        (
            ":id" => $id
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM sliders where idSlider = :id';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute($params);        
        if ($STH->rowCount() > 0)
        {            
            $row = $STH->fetch();
            $slider->idSlider = $row['idSlider'];
            $slider->fotoSlider = $row['fotoSlider'];
            $slider->textoSlider = $row['textoSlider'];
            
        }
        return $slider;
    }

    public static function ObtenerTodos() 
    {
        $cont = 0;
        $arraySlider = array();
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM sliders';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        if ($STH->rowCount() > 0)
        {
            while($row = $STH->fetch())
            {
                $slide = new Slider();
                $slide->idSlider = $row['idSlider'];
                $slide->fotoSlider = $row['fotoSlider'];
                $slide->textoSlider = $row['textoSlider'];
                $arraySlider[$cont] = $slide;
                $cont++;
            }
        }
        return  $arraySlider;
        
    }

    public static function nuevo($slider) 
    {
        $params = array(
            ":foto" => $slider->fotoSlider,
            ":texto" => $slider->textoSlider
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'INSERT INTO sliders (fotoSlider,textoSlider) VALUES (:foto,:texto)';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
        

    }

    public static function modificar($slider) 
    {
        $params = array
        (
            ":id" => $slider->idSlider,
            ":foto" => $slider->fotoSlider,
            ":texto" => $slider->textoSlider
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'UPDATE sliders SET fotoSlider = :foto, textoSlider = :texto WHERE idSlider = :id' ;
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
    }

    public static function eliminar($id) 
    {
        $params = array
        (
            ":id" => $id   
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'DELETE FROM sliders where idSlider = :id' ;
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
    }

}

?>