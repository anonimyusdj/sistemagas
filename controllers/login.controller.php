<?php
require_once "model/login.model.php";
class LoginController{
  private $login;
  
  public function __construct(){
    $this->login=new LoginModel();
  }
}
