<?php

include_once '../models/verificar_usuario.php';
include_once '../models/sesion_usuario.php';

$userSession = new UserSession();
$user = new User();
$tabla='usuario';


if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser(),$tabla);
    include_once '../views/INICIO.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm, $tabla)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm, $tabla);

        include_once '../views/INICIO.php';
        
    }else{

        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once '../views/iniciarSesion.php';

    }

}else{

    include_once 'iniciarSesion.php';
}
?>