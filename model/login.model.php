<?php

  class LoginModel{

    private $conexion;
    public $usuario;
    public $contrasena;

    public function __construct(){
      $this->conexion=Database::conectar();
    }

    public function login(LoginModel $datos){
      try {

      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }

  }
?>
