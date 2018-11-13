<?php
require_once 'config.php';
require_once 'database.php';
class Carrera{
    private $pdo;
    public $car_codigo;
    public $inst_codigo;
    public $car_nombre;
    
    public function __construct()
    {
        $this->pdo=Database::conexion();
    }
    public function insertar(Carrera $datos){
        try{
            $sql="INSERT INTO carrera VALUES(?,?,?,NOW())";
            $this->pdo->prepare($sql)->execute(array(
                $datos->car_codigo,
                $datos->inst_codigo,
                $datos->car_nombre
            ));
        }catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    public function obtenerCont(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT count(car_codigo) FROM carrera");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_COLUMN,0)+1;
	    }catch(Exception $e){
            echo($e->getMessage());
	    }
    }
    public function contar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT count(car_codigo) FROM carrera");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_COLUMN,0);
	    }catch(Exception $e){
            echo($e->getMessage());
	    }
    }
    public function listar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM carrera");
            $stm->execute();
            $out="";
            while($rs=$stm->fetch(PDO::FETCH_ASSOC)){
              if($out !=""){
                  $out.=",";
              }
              $out.='{"codigo":"'.$rs['car_codigo'].'",';
              $out.='"nombre":"'.$rs['car_nombre'].'",';
              $out.='"fecha":"'.$rs['car_fecharegistro'].'"}';
            }
           $out='{"resultado":['.$out.']}';
            echo($out);
	    }catch(Exception $e){
            echo($e->getMessage());
	    }
    }
    public function buscar($nombre){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM carrera WHERE car_nombre like'?%'");
            $stm->execute(array($nombre));
            $out="";
            while($rs=$stm->fetch(PDO::FETCH_ASSOC)){
              if($out !=""){
                  $out.=",";
              }
              $out.='{"codigo":"'.$rs['car_codigo'].'",';
              $out.='"nombre":"'.$rs['car_nombre'].'",';
              $out.='"fecha":"'.$rs['car_fecharegistro'].'"}';
            }
           $out='{"resultado":['.$out.']}';
            echo($out);
	    }catch(Exception $e){
            echo($e->getMessage());
	    }
    }
}