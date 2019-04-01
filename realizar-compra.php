<?php
require_once('head.php');
require_once('header.php');
?>



<div class="container ">
<div class="row m-4">
    <h2>
        Registrar Compra
    </h2>
</div>
<div class="row p-4">
    <div class="col-1"></div>
    <div class="col-10">
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="presentacion">Nombre del Producto</label>
      <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" placeholder="Nombre Producto">
    </div>
    <div class="form-group col-md-6">
      <label for="marca">Marca del Producto</label>
      <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
    </div>
   
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="precio_producto">Precio del Producto</label>
      <input type="number" class="form-control" name="precio_producto" id="precio_producto" placeholder="Nombre Producto">
    </div>
    <div class="form-group col-md-6">
      <label for="descripcion_producto">Descripcion del Producto</label>
      <input type="text" class="form-control" name="descripcion_producto" id="descripcion_producto" placeholder="Nombre Producto">
    </div>
    <div class="form-group col-md-6">
      <label for="unidades_producto">Unidades:</label>
      <input type="number" class="form-control" name="unidades_producto" id="unidades_producto" placeholder="Unidades Producto">
    </div>
  </div>

  <div class="form-group">
        <label for="presentacion">Compañia proveedora:</label>
        <input type="text" class="form-control" name="proveedor" id="nombre_producto" placeholder="Proveedor">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Contacto telefono:</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="(Lada) Telefono">
  </div>
  
  <button type="submit" class="btn btn-primary">Registrar Compra</button>
</form>
    </div>
    <div class="col-1"></div>
</div>
</div>


<?php
require_once('footer.php');
?>