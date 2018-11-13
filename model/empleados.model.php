<?php
  class EmpleadosModel{

    private $conexion;
    public $id_empleado;
    public $nombres;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $dui;
    public $nit;
    public $sexo;
    public $usuario;
    public $contrasena;
    public $id_cargo;
    public $foto_perfil;
    public $fecha_registro;

    public function __construct(){
      $this->conexion=Database::conectar();
    }
    public function contar(){
        try{

            $stm = $this->conexion->prepare("SELECT count(id_empleado) FROM empleados");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_COLUMN,0)+1;
        }catch(Exception $ex){
            echo $ex->getMessage();
        }
    }

    public function guardarEmpleado(EmpleadosModel $datos){
      try {
        $sql="INSERT INTO empleados VALUES(?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
        $this->conexion->prepare($sql)->execute(array(
          $datos->id_empleado,
          $datos->nombres,
          $datos->apellidos,
          $datos->direccion,
          $datos->telefono,
          $datos->dui,
          $datos->nit,
          $datos->sexo,
          $datos->usuario,
          $datos->contrasena,
          $datos->id_cargo,
          $datos->foto_perfil
        ));
        echo '{"resultado":"Empleado Registrado con Exito"}';
      } catch (Exception $e) {
        echo '{"resultado":"'.$e->getMessage().'"}';
      }

    }
  }
?>
