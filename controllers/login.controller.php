<?php
require_once "model/login.model.php";
class LoginController{
  private $login;
  
  public function __construct(){
    $this->login=new LoginModel();
  }
  
  public function login(){
    $datos=new LoginModel();
    $datos->usuario=$_REQUEST['usuario'];
    $datos->contrasena=$_REQUEST['pass'];
    
    $this->login->login($datos);
  }
}
