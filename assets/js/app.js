var app=angular.module("puma",[]);

app.controller("regEmpleado",function($scope,$http){
  $scope.getCargos=function(){
    $http.get("obtenerCargos").then(function(response){
    //  console.log(response.data);
      $scope.cargos=response.data;
    });
  }
  $scope.guardarEmpleado=function(){
    $http.get("guardarEmpleado",{params:{
      "nombre":$scope.nombre,
      "apellido":$scope.apellido,
      "sexo": $scope.sexo,
      "direccion": $scope.direccion,
      "telefono":$scope.telefono,
      "dui": $scope.dui,
      "nit":$scope.nit,
      "cargo":$scope.cargo,
      "usuario":$scope.usuario,
      "contrasena":$scope.contrasena
    }}).then(function(response){
      console.log(response.data);
    });
  }
});
