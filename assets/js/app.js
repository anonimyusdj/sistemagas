var app=angular.module("puma",[]);

app.controller("regEmpleado",function($scope,$http){
  $scope.sexo="";
  $scope.cargo="";

  $scope.getCargos=function(){
    $http.get("obtenerCargos").then(function(response){
    //  console.log(response.data);
      $scope.cargos=response.data;
    });
  };

   $scope.getCargosID=function(){
     console.log($scope.cargo);
     /*$http.get("obtenerCargosID",{params:
       {"id":id}
     }).then(function(response){
      console.log(response.data);
      $scope.cargosID=response.data;
    });*/
  };

  $scope.listarEmpleados=function(){
    $http.get("listarEmpleados").then(function(response){
      //console.log(response.data);
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
