<?php
if(isset($_POST['iniciar'])){
    header("location: ../iniciarSesion.php"); 
}else if(isset($_POST['registrarse'])){
    header("location: ../Registro.php");
}

?>