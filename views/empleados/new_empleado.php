<div class="row" ng-controller="regEmpleado">
  <div class="col s12 m2 card"></div>
  <div class="col s12 m9 card">
    <header class="red darken-3 card center white-text z-depth-2"><h4>Nuevo Empleado</h4></header>
      <div class="row">
        <form class="" action="guardarEmpleado" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="col s12 m8">

                      <div class="row">

                        <div class="input-field col s12 m5">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="nombre" ng-model="nombre" type="text" class="validate" name="nombre" required>
                          <label for="nombre" data-error="Campo Requerido">Nombres</label>
                        </div>
                        <div class="input-field col s12 m5">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="apellido" ng-model="apellido" type="text" class="validate" name="apellido" required>
                          <label for="apellido" data-error="Campo Requerido">Apellidos</label>
                        </div>
                        <div class="input-field col s12 m2">
                          <select class="icons" name="sexo" ng-model="sexo">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Masculino" class="circle">Masculino</option>
                            <option value="Femenino"  class="circle">Femenino</option>
                          </select>
                          <label>Sexo</label>
                          {{sexo}}
                        </div>
                        <div class="input-field col s12 m8">
                          <i class="material-icons prefix">person_pin_circle</i>
                          <input id="direccion" ng-model="direccion" type="text" class="validate" name="direccion" required>
                          <label for="direccion" data-error="Campo Requerido">Direccion</label>
                        </div>
                        <div class="input-field col s12 m4">
                          <i class="material-icons prefix">contact_phone</i>
                          <input id="telefono"  ng-model="telefono" type="text" class="validate" name="telefono" required maxlength="9" data-length="9">
                          <label for="telefono" data-error="Campo Requerido">Telefono</label>
                        </div>
                        <div class="input-field col s12 m4">
                          <i class="material-icons prefix">picture_in_picture</i>
                          <input id="dui" ng-model="dui" type="text" class="validate" name="dui" required>
                          <label for="dui" data-error="Campo Requerido">DUI</label>
                        </div>
                        <div class="input-field col s12 m5">
                          <i class="material-icons prefix">picture_in_picture</i>
                          <input id="nit" ng-model="nit" type="text" class="validate" name="nit" required>
                          <label for="nit" data-error="Campo Requerido">NIT</label>
                        </div>
                        <div class="input-field col s12 m3"  ng-init="getCargos()">
                          <select class="icons" name="cargo" ng-model="cargo">
                            <?php
                              echo "  <option value='' disabled selected>Seleccionar</option>";
                                foreach( $this->cargos->getcargosphp() as $cargo):
                                  ?>
                                  <option value="<?php echo $cargo->id_cargo;?>"><?php echo $cargo->nombre_cargo;?></option>
                                  <?php
                                endforeach;
                             ?>
                            <!--option ng-repeat="p in cargos.resultado" value="{{p.codigo}}"  class="circle">{{p.nombre}}</option-->
                          </select>
                          <label>Cargo</label>
                          {{cargo}}
                        </div>
                      </div>
                      <div class="input-field col s12 m6">
                        <i class="material-icons prefix">person</i>
                        <input id="usuario" ng-model="usuario" type="text" class="validate" name="usuario" required>
                        <label for="usuario" data-error="Campo Requerido">Usuario</label>
                      </div>
                      <div class="input-field col s12 m6">
                        <i class="material-icons prefix">lock</i>
                        <input id="constrasena" ng-model="contrasena" type="password" class="validate" name="contrasena" required>
                        <label for="contrasena" data-error="Campo Requerido">Contraseña</label>
                      </div>

              </div>

              <div class="col s12 m4">
                  <div class="row">
                      <div class="col s12 m12">
                        <img ng-if="sexo == 'Femenino'" src="assets/multimedia/imagenes/mujer-01.png" alt="" class="responsive-img circle">
                        <img ng-if="sexo == 'Masculino'" src="assets/multimedia/imagenes/hombre-01.png" alt="" class="responsive-img circle">
                      </div>
                      <div class="col s12 m12">
                        <div class="file-field input-field">
                          <div class="btn btn orange darken-4">
                            <i class="material-icons fixed medium">camera_alt</i>
                            <input type="file" name="foto_perfil" ng-model="foto_perfil">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="col s12 m12">
                <div class="card-action center">
                <button type="submit" name="button" class="btn teal darken-3"><i class="material-icons left">person_add</i>Guardar</button>
                <button type="reset" name="button" class="btn teal darken-3"><i class="material-icons left">autorenew</i>Cancelar</button>
              </div>
              </div>
          </form>
      </div>
  </div>
  <div class="col s12 m3">

  </div>
  <div class="col s12 m9 card">
      <?php require_once "views/empleados/view_empleados.php";?>
  </div>
</div>
