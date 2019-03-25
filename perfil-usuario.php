<?php
require_once('head.php');
require_once('header.php');
?>

<div class="container p-3">

<div class="jumbotron jumbotron-fluid my-4">
    <h1 class="m-3">Mi Perfil</h1>
    <p class="lead m-3"> <b> Hola <?php echo $_SESSION['nombre'] ." " .$_SESSION['apellidos'] ; ?>! </b> </p>
</div>


   <div class="row">

       <!-- Card para editar la configuracion del usuario -->
        <div class="col-sm-4 col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Configuracion del Perfil</h5>
                <p class="card-text">Edita la configuración de tu perfil.</p>
                <a href="#" class="btn btn-primary">Editar Perfil</a>
            </div>
            </div>
        </div>
        
        <!-- Card de las compras de un usuario -->
        <div class="col-sm-4 col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mis Compras</h5>
                <p class="card-text">Registro de tus anteriores compras.</p>
                <a href="#" class="btn btn-primary">Ver compras</a>
            </div>
            </div>
        </div>

        <!-- Card de las ventas del usuario  -->
        <div class="col-sm-4 col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mis Ventas</h5>
                <p class="card-text">Mira la informacion de todas tus ventas.</p>
                <a href="#" class="btn btn-primary">Ver ventas</a>
            </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once('footer.php');
?>