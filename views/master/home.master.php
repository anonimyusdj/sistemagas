<div class="row" ng-controller="factura">
  <div class="col s12 m2"></div>
  <div class="col s12 m6 card">
    <form>
      <div class="row">
       <div class="input-field col s12 m4">
        <input id="preCompra" type="number" class="validate" ng-model="preCompra | number : 3">
        <label for="preCompra">Precio de Compra</label>
      </div>
      </div>
    </form>
  </div>
</div>
