<table class="responsive-table bordered highlight" ng-init="listarEmpleados()">
      <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>DUI</th>
            <th>NIT</th>
            <th>Sexo</th>
            <th>Cargo</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
      </thead>

      <tbody>
        <tr ng-repeat="e in listaEmpleados" style="font-size:12px;">
          <td>{{e.codigo}}</td>
          <td>{{e.nombres}}</td>
          <td>{{e.apellidos}}</td>
          <td>{{e.direccion}}</td>
          <td>{{e.telefono}}</td>
          <td>{{e.dui}}</td>
          <td>{{e.nit}}</td>
          <td>{{e.sexo}}</td>
          <td>{{e.cargo}}</td>
          <td><a href=""><i class="material-icons fixed">edit</i></a></td>
          <td><a href=""><i class="material-icons fixed">delete</i></a></td>
          <td><a href=""><i class="material-icons fixed">info</i></a></td>
        </tr>
      </tbody>
    </table>
