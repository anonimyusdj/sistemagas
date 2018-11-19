<?php
require_once "model/cargos.model.php";
class  HomeController{
  private $cargos;

  public function __construct(){
    $this->cargos=new CargosModel();
  }
  public function index(){
    require_once "views/partes/header.php";
    require_once "views/home/menu.php";
    require_once "views/home/login.php";
    require_once "views/partes/footer.php";
  }
}
 ?>
