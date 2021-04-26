<?php

include_once '../views/conexionBD.php';

class User extends DB{

    private $nombre;
    private $username;
    private $id;

    public function userExists($user, $pass, $tabla){
        $md5pass = md5($pass);
        $tablas='SELECT * FROM '.$tabla;
        $query = $this->connect()->prepare($tablas.' WHERE username = ? AND password = ?');
        $query->execute([$user, $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user, $tabla){
        $tablas='SELECT * FROM '.$tabla;
        $query = $this->connect()->prepare($tablas.' WHERE username = ?');
        $query->execute([$user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
            $this->id = $currentUser['id'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getId(){
        return $this->id;
    }

}

?>