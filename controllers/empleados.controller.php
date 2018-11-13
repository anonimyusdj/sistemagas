<?php
require_once "model/empleados.model.php";
require_once "model/encript.php";
class EmpleadosController{
  private $empleados;
  private $cifrar;

  public function __construct(){
    $this->empleados=new EmpleadosModel();
    $this->cifrar=new Cifrado();
  }
  public function guardarEmpleado(){
    $datos=new EmpleadosModel();
<<<<<<< HEAD
    //echo "sexo:".$_REQUEST['sexo']."<br>";
=======
echo "sexo:".$_REQUEST['cargo'];
>>>>>>> e43cef91158037f984321dafdd4fac7a291e0a2b
    $datos->id_empleado="GPMEMP".$this->empleados->contar();
    $datos->nombres=$_REQUEST['nombre'];
    $datos->apellidos=$_REQUEST['apellido'];
    $datos->direccion=$_REQUEST['direccion'];
    $datos->telefono=$_REQUEST['telefono'];
    $datos->dui=$_REQUEST['dui'];
    $datos->nit=$_REQUEST['nit'];
    $datos->sexo=$_REQUEST['sexo'];
    $datos->usuario=$this->cifrar->cifrador("cifrar",$_REQUEST['usuario']);
    $datos->contrasena=$this->cifrar->cifrador("cifrar",$_REQUEST['contrasena']);
    $datos->id_cargo=$_REQUEST['cargo'];
    $datos->foto_perfil="assets/multimedia/imagenes/registro.png";


    $this->empleados->guardarEmpleado($datos);
  }
  public function listarEmpleados(){
    $this->empleados->listarEmpleados();
  }
}
?>
