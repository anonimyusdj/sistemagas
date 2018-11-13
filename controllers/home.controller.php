<?php
require_once "model/cargos.model.php";
class  HomeController{
  private $cargos;

  public function __construct(){
    $this->cargos=new CargosModel();
  }
  public function index(){
    require_once "views/partes/header.php";
    require_once "views/empleados/new_empleado.php";
    require_once "views/partes/footer.php";
  }
}
 ?>
