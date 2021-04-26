<?php 
	include_once '../modelos/registrar.php';

	$registro = new Registro();

	
		$tabla="usuario";
		if ($registro->usernameExists($_POST['username'], $tabla)) {
			$error_username = "Nombre de usuario ya existente";
			include_once '../../vistas/registro_alumno.php';
		}else{
			$registro->registrar($_POST['nombre'], $_POST['username'], $_POST['password'], $tabla);
			$registro_exitoso = "El registro se realizo correctamente";
		}
 ?>