<?php
if(isset($_POST['iniciar'])){
    header("location: ../views/iniciarSesion.php"); 
}else if(isset($_POST['registrarse'])){
    header("location: ../views/Registro.php");
}

?>