<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/model/usuario.php');

class UsuarioDao {

    public static function ObtenerPorID($id) 
    {
        $user = new Usuario();
        $params = array
        (
            ":id" => $id
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM usuarios where idUsuario = :id';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute($params);        
        if ($STH->rowCount() > 0)
        {            
            $row = $STH->fetch();
            $user->idUsuario = $row['idUsuario'];
            $user->mailUsuario = $row['mailUsuario'];
            $user->ConstrasenaUsuario = $row['ConstrasenaUsuario']; 
            $user->nombreUsuario = $row['nombreUsuario'];
            $user->apellidoUsuario = $row['apellidoUsuario'];
            
        }
        return $user;
    }

    public static function ObtenerTodos() 
    {
        $cont = 0;
        $arrayUsuario = array();
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'SELECT * FROM usuarios';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
        if ($STH->rowCount() > 0)
        {
            while($row = $STH->fetch())
            {
                $user = new Usuario();
                $user->idUsuario = $row['idUsuario'];
                $user->mailUsuario = $row['mailUsuario'];
                $user->ConstrasenaUsuario = $row['ConstrasenaUsuario']; 
                $user->nombreUsuario = $row['nombreUsuario'];
                $user->apellidoUsuario = $row['apellidoUsuario'];
                $arrayUsuario[$cont] = $user;
                $cont++;
            }
        }
        return  $arrayUsuario;
        
    }

    public static function nuevo($user) 
    {
        $params = array(

         
            ":mail" => $user->mailUsuario,
            ":contrasena" => sha1($user->ConstrasenaUsuario),
            ":nombre" => $user->nombreUsuario,
            ":apellido" => $user->apellidoUsuario

        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'INSERT INTO usuarios (mailUsuario,ConstrasenaUsuario,nombreUsuario,apellidoUsuario) VALUES (:mail,:contrasena,:nombre,:apellido)';
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
        

    }

    public static function modificar($user) 
    {
        $params = array
        (
            ":id" => $user->idUsuario,
            ":mail" => $user->mailUsuario,
            ":contrasena" => sha1($user->ConstrasenaUsuario),
            ":nombre" => $user->nombreUsuario,
            ":apellido" => $user->apellidoUsuario
        );
        $DBH = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
		$query = 'UPDATE usuarios SET mailUsuario = :mail, 
        ConstrasenaUsuario = :contrasena,
        nombreUsuario = :nombre,
        apellidoUsuario = :apellido
         WHERE idUsuario = :id' ;
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
		$query = 'DELETE FROM usuarios where idUsuario = :id' ;
		$STH = $DBH->prepare($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH->execute($params);
    }

}

?>