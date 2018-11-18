<?php
require_once "model/cargos.model.php";
  class CargosController{
    private $cargos;

    public function __construct(){
      $this->cargos=new CargosModel();
    }

    public function listarCargos(){
      $this->cargos->getcargos();
    }
    public function listarCargosID(){
      echo $_REQUEST['id'];
      $this->cargos->getcargosid($_REQUEST['id']);
    }

  }
?>
