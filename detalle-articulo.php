<?php
require_once('head.php');
require_once('header.php');

$ArticulosController = new ArticulosModel();
$datosArticulo = $ArticulosController->read($_GET['id']);
?>

<div class="container-fluid p-5">
<div class="row">
    <div class="col-6">
        <img src="<?php print_r($datosArticulo[0]['dir_foto']); ?>" >
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col">
                <h3><?php  print_r($datosArticulo[0]['nombre']); ?></h3>
                <h4><?php  print_r($datosArticulo[0]['marca']);  ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col p-3">
                <h5><i>$ <?php  print_r($datosArticulo[0]['precio']);  ?></i></h5>
                <p><i>Unidades disponibles: <?php  print_r($datosArticulo[0]['unidades']);  ?> </i></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>
                    <?php  print_r($datosArticulo[0]['descripcion']);  ?>
                </p>
            </div>
           
        </div>
        <div class="row">
        <button type="submit">Comprar</button>
        </div>
    </div>

    
</div>
</div>

<?php
require_once('footer.php');
?>