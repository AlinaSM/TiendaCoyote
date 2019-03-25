<?php
require_once('head.php');
require_once('header.php');
?>



<div class="container ">
    <div class="row m-4">   
        <h1>Menu</h1>
    </div>
    <div class="row mb-5">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <a href="" class="btn btn-lg btn-primary btn-block text-uppercase p-3 my-4">
                        <h5>Compras</h5>
                    </a>
                </div>
                <div class="col-6">
                    <a href="" class="btn btn-lg btn-primary btn-block text-uppercase p-3 my-4">
                        <h5>Proveedores</h5>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a href="" class="btn btn-lg btn-primary btn-block text-uppercase p-3 my-4">
                        <h5>Ventas</h5>
                    </a>
                </div>
                <div class="col-6">
                    <a href="" class="btn btn-lg btn-primary btn-block text-uppercase p-3 my-4">
                        <h5>Perfil</h5>
                    </a>
                </div>
            </div>

            <?php if (isset($_SESSION['tipo'])): ?>
                <?php if ($_SESSION['tipo'] == 'admin'): ?>
                    <div class="row">
                        <div class="col-6">
                            <a href="" class="btn btn-lg btn-primary btn-block text-uppercase p-3 my-4">
                                <h5>Administracion de Usuarios</h5>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="col-2"></div>
    </div>
</div>


<?php
require_once('footer.php');
?>