<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/model/producto.php');

class ProductoDao {

    public static function ObtenerPorID($id) 
    {
        $prod = new Producto();
        $params = array
        (
            ":id" => $id
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM productos where idPrudcto = :id';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute($params);        
        if ($STH->rowCount() > 0)
        {            
            $row = $STH->fetch();
            $prod->idPrudcto = $row['idPrudcto'];
            $prod->nombreProducto = $row['nombreProducto'];
            $prod->codigoProducto = $row['codigoProducto'];
            $prod->precioProdcuto = $row['precioProdcuto'];
            $prod->descuentoProducto = $row['descuentoProducto'];
            $prod->stockMinimo = $row['stockMinimo'];
            $prod->stockActual = $row['stockActual'];
            $prod->categoriaProducto = $row['categoriaProducto'];
            $prod->fotoProducto = $row['fotoProducto'];
            $prod->videoProducto = $row['videoProducto'];
            $prod->descripcionCortaProducto = $row['descripcionCortaProducto'];
            $prod->descripcionLargaProducto = $row['descripcionLargaProducto'];
            $prod->destacadoProducto = $row['destacadoProducto'];
            $prod->onSaleProducto = $row['onSaleProducto'];
            $prod->mostrarHomeProducto = $row['mostrarHomeProducto'];
            
        }
        return $prod;
    }

    public static function ObtenerTodos() 
    {
        $cont = 0;
        $arrayProd = array();
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM productos';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        if ($STH->rowCount() > 0)
        {
            while($row = $STH->fetch())
            {
                $prod = new Producto();
                $prod->idPrudcto = $row['idPrudcto'];
                $prod->nombreProducto = $row['nombreProducto'];
                $prod->codigoProducto = $row['codigoProducto'];
                $prod->precioProdcuto = $row['precioProdcuto'];
                $prod->descuentoProducto = $row['descuentoProducto'];
                $prod->stockMinimo = $row['stockMinimo'];
                $prod->stockActual = $row['stockActual'];
                $prod->categoriaProducto = $row['categoriaProducto'];
                $prod->fotoProducto = $row['fotoProducto'];
                $prod->videoProducto = $row['videoProducto'];
                $prod->descripcionCortaProducto = $row['descripcionCortaProducto'];
                $prod->descripcionLargaProducto = $row['descripcionLargaProducto'];
                $prod->destacadoProducto = $row['destacadoProducto'];
                $prod->onSaleProducto = $row['onSaleProducto'];
                $prod->mostrarHomeProducto = $row['mostrarHomeProducto'];
                $arrayProd[$cont] = $prod;
                $cont++;
            }
        }
        return  $arrayProd;
        
    }

    public static function nuevo($producto) 
    {
        $params = array(
            ":nombre" => $producto->nombreProducto,
            ":codigo" => $producto->codigoProducto,
            ":precio" => $producto->precioProdcuto,
            ":descuento" => $producto->descuentoProducto,
            ":minimo" => $producto->stockMinimo,
            ":actual" => $producto->stockActual,
            ":categoria" => $producto->categoriaProducto,
            ":foto" => $producto->fotoProducto,
            ":video" => $producto->videoProducto,
            ":desripcionCorta" => $producto->descripcionCortaProducto,
            ":desripcionLarga" => $producto->descripcionLargaProducto,
            ":destacado" => $producto->destacadoProducto,
            ":onSale" => $producto->onSaleProducto,
            ":mostrarHome" => $producto->mostrarHomeProducto

        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'INSERT INTO productos (nombreProducto,codigoProducto,precioProdcuto,descuentoProducto,stockMinimo,stockActual,categoriaProducto,fotoProducto,videoProducto,descripcionCortaProducto,descripcionLargaProducto,destacadoProducto,onSaleProducto,mostrarHomeProducto) VALUES (:nombre,:codigo,:precio,:descuento,:minimo,:actual,:categoria,:foto,:video,:desripcionCorta,:desripcionLarga,:destacado,:onSale,:mostrarHome)';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
        

    }

    public static function modificar($producto) 
    {
        $params = array
        (
            ":id" => $producto->idProducto,
            ":nombre" => $producto->nombreProducto,
            ":codigo" => $producto->codigoProducto,
            ":precio" => $producto->precioProdcuto,
            ":descuento" => $producto->descuentoProducto,
            ":minimo" => $producto->stockMinimo,
            ":actual" => $producto->stockActual,
            ":categoria" => $producto->categoriaProducto,
            ":foto" => $producto->fotoProducto,
            ":video" => $producto->videoProducto,
            ":desripcionCorta" => $producto->descripcionCortaProducto,
            ":desripcionLarga" => $producto->descripcionLargaProducto,
            ":destacado" => $producto->destacadoProducto,
            ":onSale" => $producto->onSaleProducto,
            ":mostrarHome" => $producto->mostrarHomeProducto
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'UPDATE productos SET nombreProducto = :nombre, 
        codigoProducto = :codigo,
        precioProdcuto = :precio,
        descuentoProducto = :precio,
        stockMinimo = :minimo,
        stockActual = :actual,
        categoriaProducto = :categoria,
        fotoProducto = :foto,
        videoProducto = :video,
        descripcionCortaProducto = :desripcionCorta,
        descripcionLargaProducto = :desripcionLarga,
        destacadoProducto = :destacado,
        onSaleProducto = :onSale,
        mostrarHomeProducto = :mostrarHome
         WHERE idProducto = :id' ;
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
		$query = 'DELETE FROM productos where idProducto = :id' ;
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
    }

}

?>