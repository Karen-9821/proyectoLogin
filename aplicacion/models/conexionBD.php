<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "login_bd";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
    echo "conectado correctamente";
}else{
    echo "no se pudo conectar";
}
?>