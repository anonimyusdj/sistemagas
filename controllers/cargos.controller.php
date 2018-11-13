<?php
require_once "model/cargos.model.php";
  class CargosController{
    private $cargos;

    public function __construct(){
      $this->cargos=new CargosModel();
    }

    public function listarCargos(){
      $this->cargos->getCargos();
    }
  
  }
?>
