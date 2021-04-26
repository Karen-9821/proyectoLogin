<?php

include_once 'conexionBD.php';

class Registro extends DB{

    public function registrar($nombre, $username, $password, $tabla){
        $md5pass = md5($password);
        $consulta = 'INSERT INTO '.$tabla;

        $query = $this->connect()->prepare($consulta.' VALUES (NULL, ?, ?, ?)');
        $query->execute([$nombre, $username, $md5pass]);
        header("location: ../views/INICIO.php");
    }

    public function usernameExists($user, $tabla){
        $tablas='SELECT * FROM '.$tabla;
        $query = $this->connect()->prepare($tablas.' WHERE username = ?');
        $query->execute([$user]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }


}

?>