<?php
    include_once '../modelos/sesion_usuario.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../../public/index.php");
?>