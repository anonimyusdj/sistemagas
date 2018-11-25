<div class="row" ng-controller="factura">
  <div class="col s12 m2"></div>
  <div class="col s12 m9 card">
    <form>
      <div class="row">

        <div class="input-field col s12 m4">
            <i class="material-icons prefix">search</i>
            <input id="buscar" type="text" class="validate" ng-model="busqueda" ng-change="buscar(busqueda)">
            <label for="buscar">Buscar Cliente</label>
        </div>
        <div class="input-field col s12 m3">
          <select ng-model="tipo">
            <option value="" disabled selected>Seleccionar</option>
            <option value="1">Ticket</option>
            <option value="2">Consumidor Final</option>
            <option value="3">Credito Fiscal</option>
          </select>
          <label>Tipo de Factura</label>
          {{tipo}}
        </div>
        <div class="input-field col s12 m2">
            <i class="material-icons prefix">#</i>
            <input ng-if="tipo=='1'" id="correlativo" type="text" class="validate" ng-model="correlativot" placeholder="Ticket" disabled>
            <input ng-if="tipo=='2'" id="correlativo" type="text" class="validate" ng-model="correlativof" placeholder="Consumidor" disabled>
            <input ng-if="tipo=='3'" id="correlativo" type="text" class="validate" ng-model="correlativoc" placeholder="Credito" disabled>
        </div>
        <div class="input-field col s12 m2">
          <input type="text" class="datepicker" ng-model="fecha" value="<?php
          /*  $hoy = getdate();
            $fecha=$hoy['year']."/".$hoy['mon']."/".$hoy['mday'];
            echo $fecha;*/
            ?>">
          {{fecha}}
        </div>
      <div class="col s12 m12"></div>
          <div class="input-field col s4">
              <i class="material-icons prefix">count</i>
              <input id="nombre" type="text" class="validate" disabled ng-model="nombre" placeholder="">
              <label for="nombre">Nombre Cliente</label>
          </div>
          <div class="input-field col s4">
              <i class="material-icons prefix">acount</i>
              <input id="nombre" type="text" class="validate" disabled ng-model="apellido" placeholder="">
              <label for="nombre">Apellidos Cliente</label>
          </div>
          <div class="input-field col s4">
              <i class="material-icons prefix">count</i>
              <input id="nombre" type="text" class="validate" disabled ng-model="direccion" placeholder="">
              <label for="nombre">Direccion Cliente</label>
          </div>
      </div>
    </form>
  </div>
</div>
<script>
 toastr.options = {toastr.options = { "closeButton":true, "progressBar": true};
 
  toastr.success("Hola, bienvenido al sistema!","Sistema Web");
</script>
