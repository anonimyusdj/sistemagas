var app=angular.module("puma",[]);
app.factory("compartir",function(){
    return{
        cargo:'',
        grupo:'',
        docente:'',
        materia:''
    }
});
app.controller("regEmpleado",function($scope,$http,compartir){
  $scope.sexo="";
  $scope.cargoid=compartir;

  $scope.getCargos=function(){
    $http.get("obtenerCargos").then(function(response){
    //  console.log(response.data);
      $scope.cargos=response.data;
    });
  };

/*   $scope.getCargosID=function(id){
     console.log($scope.cargoid.cargo);
     console.log(id);
     $http.get("obtenerCargosID",{params:
       {"id":id}
     }).then(function(response){
      console.log(response.data);
       console.log(id);
      $scope.cargosID=response.data;
    });
  };*/

  $scope.listarEmpleados=function(){
    $http.get("listarEmpleados").then(function(response){
      console.log(response.data);
      $scope.listaEmpleados=response.data.resultado;
    });
  };
  $scope.guardarEmpleado=function(){
    $http.get("guardarEmpleado",{params:{
      "nombre": $scope.nombre,
      "apellido": $scope.apellido,
      "sexo": $scope.sexo,
      "direccion": $scope.direccion,
      "telefono": $scope.telefono,
      "dui": $scope.dui,
      "nit": $scope.nit,
      "cargo": $scope.cargo,
      "usuario": $scope.usuario,
      "contrasena": $scope.contrasena
    }}).then(function(response){
      console.log(response.data);
    });
  };
});

app.controller("factura",function($scope,$http){
    $scope.preCompra=3.100;
    $scope.correlativot="00005";
    $scope.buscar=function(busqueda){
      if(busqueda=="edgar"){
        $scope.nombre="edgar";
        $scope.apellido="Guzman";
        $scope.direccion="triunfo";
      }
    }
});

app..filter("fechaCorta", function() {
    return function(fecha) {
      if (!fecha) return "";
      fecha = new Date(fecha);
      return (fecha.getDate() > 9 ? fecha.getDate() : "0" + fecha.getDate()) + "/" + (["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"][fecha.getMonth()]) + "/" + fecha.getFullYear()
    };
  });
