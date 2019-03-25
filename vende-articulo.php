<?php
require_once('head.php');
require_once('header.php');
?>

<?php if(!empty($_SESSION['id'])): ?> <!-- Verifica si la sesion esta iniciada -->

    <form action="php/Controllers/ArticulosController.php" name="frmVenta" method="POST" enctype="multipart/form-data"  >

    <div class="container p-5">
        <h2 class="m-3">Vende tu articulo</h2>
        <div class="row">
            <div class="form-group col-4">
                <label for="nombreArticulo">Titulo: </label>
                <input type="text" name="nombre" class="form-inline form-control" id="" value="" required>
            </div>

            <div class="form-group col-4">
                <label for="Marca">Marca: </label>
                <input type="text" name="Marca" class="form-inline form-control" id="" value="" required>
            </div>

            <div class="form-group col-4">
                <label for="Modelo">Modelo: </label>
                <input type="text" name="Modelo" class="form-inline form-control" id="" value="" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-4">
                <label for="tipo">Tipo: </label>
                <select name = "Tipo" class="custom-select form-control">
                    <?php foreach ($CatalogoTiposController->read() as $tipo) : ?>
                        <option value="<?= $tipo['id'] ?>"><?= $tipo['tipo'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group col-4">
                <label for="Cantidad">Cantidad: </label>
                <input type="number" name="Cantidad" class="form-inline form-control" value="" id="">            
            </div>

            <div class="form-group col-4">
                <label for="Precio">Precio: </label>
                <input type="number" name="Precio" class="form-inline form-control" id="" value="" required>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-12">
                <label for="Descripcion">Descripcion: </label>
                <textarea name="Descripcion" id="" rows="5"  class="form-control"  required>  </textarea>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-6">

                <label for="Condicion">Condicion: </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Condicion"  value="Nuevo"  required>
                    <label class="form-check-label" for="Condicion"> Nuevo </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Condicion"  value="Usado" required>
                    <label class="form-check-label" for="Condicion"> Usado </label>
                </div>
                
            </div>

        </div>

        <div class="row">
            
            <div class=" col-6">
                <label for="Imagen">Imagen:</label>
                <input type="file" name="Imagen" id="Imagen" lang="es" >
                
            </div>
            <div class="col-6">
                <img src="">
            </div>
            
        </div>

        <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['id']; ?>">
        
        <div class="form-group my-4">
            <?php if(isset($_GET['op']) && $_GET['op'] == 'editarArticulo'): ?>
                <input type="hidden" name="idArticulo" value= <?php echo "f"; ?> >
                <input type="submit" value="Guardar Cambios" name="btnCambios" class="btn btn-warning btn-block">
            <?php else:?>
                <input type="hidden" name="op" value="vender">
                <input type="submit" value="Vender" class="btn btn-warning btn-block">
            <?php endif;?>
        </div>
    </div>
   

    </form>
<?php else:?>
<?php
require_once('Error404.php');
?>                                                  
<?php endif;?> <!-- endif de session -->

<?php
require_once('footer.php');
?>