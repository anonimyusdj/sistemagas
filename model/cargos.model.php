<?php
//require_once "model.database.php";
  class CargosModel
  {
    private $conexion;
    public $idCargo;

    public function __construct()
    {
      $this->conexion=Database::conectar();
    }

    public function getcargos(){
      try {
          $sql="SELECT * FROM cargos";
          $stm= $this->conexion->prepare($sql);
          $stm->execute();
          $salida="";

          while($rs=$stm->fetch(PDO::FETCH_ASSOC)){
            if($salida != ""){
              $salida .= ",";
            }
            $salida .= '{"codigo":"'.$rs['id_cargo'].'","nombre":"'.$rs['nombre_cargo'].'","nivel":"'.$rs['nivel'].'","fecha":"'.$rs['fecha_creacion'].'"}';
          }
          $salida='{"resultado":['.$salida.']}';
          echo ($salida);
      } catch (Exception $e) {
        echo "{'resultado':{'".$e->getMessage()."'}}";
      }
 
    }
    public function getcargosphp(){
      try {
          $sql="SELECT * FROM cargos";
          $stm= $this->conexion->prepare($sql);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_OBJ);
      } catch (Exception $e) {
        echo "{'resultado':{'".$e->getMessage()."'}}";
      }

    }
    public function getcargosid($id){
      try {
          $sql="SELECT * FROM cargos where id_cargo=?";
          $stm= $this->conexion->prepare($sql);
          $stm->execute(array($id));
          $salida="";

          while($rs=$stm->fetch(PDO::FETCH_ASSOC)){
             if($salida != ""){
              $salida .= ",";
            }
            $salida .= '{"codigo":"'.$rs['id_cargo'].'","nombre":"'.$rs['nombre_cargo'].'","nivel":"'.$rs['nivel'].'","fecha":"'.$rs['fecha_creacion'].'"}';
          }
          $salida='{"resultado":['.$salida.']}';
          echo ($salida);
          echo $id;

      } catch (Exception $e) {
        echo "{'resultado':{'".$e->getMessage()."'}}";
      }

    }

  }
  /*$cargo=new CargosModel();
  $cargo->getcargosphp();*/
?>
