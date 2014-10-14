<?php
    
class usuario {
 
    private $user;
    private $password;
    private $name;    
    private $rol;


    function setUser($use) {
        $this->user=$use;
    }
    
    function setPassword($password) {
        $this->password=$password;
    }
    
    function setRol($rol) {
        $this->rol=$rol;
    }
    
    function setName($nom) {
        $this->name=$nom;
    }
    
    function getUser() {
        return $this->user;
    }
    
    function getPassword() {
        return $this->password;
    }
    
    function getRol() {
        return $this->rol;
    }       
    
    function getName() {
        return $this->name;
    }

}
    ?>