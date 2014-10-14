<?php
class conexion extends PDO {
    
       private $motor="mysql";
       private $servidor="localhost";
       private $usuario="root";
       private $contrasena="";
       private $basededatos="datasistemas";
  
    function __construct() {
       try{
         parent::__construct($this->motor.':host='.$this->servidor.';dbname='.$this->basededatos, $this->usuario, $this->contrasena);
         $this->exec("SET CHARACTER SET utf8");
         $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
}
}
?>
