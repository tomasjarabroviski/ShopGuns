<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/usuario.php');
$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'nuevo':
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : $_GET['nombreUsuario'];	
        $mailUsuario = isset($_POST['mailUsuario']) ? $_POST['mailUsuario'] : $_GET['mailUsuario'];	
        $contrasenaUsuario = isset($_POST['contrasenaUsuario']) ? $_POST['contrasenaUsuario'] : $_GET['contrasenaUsuario'];	
        $apellidoUsuario = isset($_POST['apellidoUsuario']) ? $_POST['apellidoUsuario'] : $_GET['apellidoUsuario'];	
		$user = new Usuario();
        $user->nombreUsuario = $nombreUsuario;
        $user->mailUsuario = $mailUsuario;
        $user->contrasenaUsuario = $contrasenaUsuario;
        $user->apellidoUsuario = $apellidoUsuario;
		$resultado = UsuarioDao::nuevo($user);	
		echo json_encode($resultado);
        break;    
    case 'ObtenerPorID':
        $idUsuario = isset($_POST['idUsuario']) ? $_POST['idUsuario'] : $_GET['idUsuario'];	
        $resultado = UsuarioDao::ObtenerPorID($idUsuario);
		echo json_encode($resultado);
        break;
    case 'ObtenerTodos':
        $resultado = UsuarioDao::ObtenerTodos();
		echo json_encode($resultado);
        break;    
        case 'ObtenerTodos':
        $resultado = UsuarioDao::ObtenerTodos();
		echo json_encode($resultado);
        break;
    case 'modificar':
        $idUsuario = isset($_POST['idUsuario']) ? $_POST['idUsuario'] : $_GET['idUsuario'];	
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : $_GET['nombreUsuario'];	
        $mailUsuario = isset($_POST['mailUsuario']) ? $_POST['mailUsuario'] : $_GET['mailUsuario'];	
        $contrasenaUsuario = isset($_POST['contrasenaUsuario']) ? $_POST['contrasenaUsuario'] : $_GET['contrasenaUsuario'];	
        $apellidoUsuario = isset($_POST['apellidoUsuario']) ? $_POST['apellidoUsuario'] : $_GET['apellidoUsuario'];	
		$user = new Usuario();
        $user->nombreUsuario = $nombreUsuario;
        $user->mailUsuario = $mailUsuario;
        $user->contrasenaUsuario = $contrasenaUsuario;
        $user->apellidoUsuario = $apellidoUsuario;
        $user->idUsuario = $idUsuario;
		$resultado = UsuarioDao::modificar($user);	
		echo json_encode($resultado);
        break;    
}

?>