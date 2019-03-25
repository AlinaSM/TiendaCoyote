<?php
require_once('head.php');
require_once('header.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5 mb-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Inicio de Sesión</h5>
                        <?php if (isset($_GET['r'])): ?>
                                <div class="alert alert-danger" role="alert">
                                    Error al iniciar sesión, favor de ingresar sus datos correctamente
                                </div>  
                        <?php endif; ?>
                        </form>
                        <form class="form-signin" id="frmRegistro" autocomplete="off" method="POST" action="php/Controllers/UsuariosController.php">
                            <input type="hidden" name="login-normal">
                            <div class="form-label-group">
                                <label for="Usuario">Nombre de Usuario</label>
                                <input type="text" id="Usuario" name="username" class="form-control" placeholder="Nombre de Usuario"  >
                                </div>

                            <div class="form-label-group">
                                <label for="Contrasena">Contraseña</label>
                                <input type="password" id="Contrasena" name="contrasena" class="form-control" placeholder="Contraseña" >
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase  my-4" type="submit" id="idBotonLogin">Ingresar</button>
                            <hr class="my-3">
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once('footer.php');
?>