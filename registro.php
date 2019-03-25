<?php
require_once('head.php');
require_once('header.php');
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Registro</h5>
                            <form class="form-signin" id="frmRegistro" autocomplete="off" method="POST" action="php/Controllers/UsuariosController.php?op=registrar-usuarios">
                                <div class="form-label-group">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" id="Nombre" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
                                </div>

                                <div class="form-label-group">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" id="Apellidos" name="apellido" class="form-control" placeholder="Apellidos" >
                                </div>

                                <div class="form-label-group">
                                    <label for="Email">Correo Electronico</label>
                                    <input type="email" id="Email" name="email"  class="form-control" placeholder="Correo Electronico"  >
                                </div>

                                <div class="form-label-group">
                                    <label for="Usuario">Nombre de Usuario</label>
                                    <input type="text" id="Usuario" name="alias" class="form-control"  onkeyup ="" placeholder="Nombre de Usuario"  >
                                    </div>

                                <div class="form-label-group">
                                    <label for="Contrasena">Contraseña</label>
                                    <input type="password" id="Contrasena" name="contrasena" class="form-control" placeholder="Contraseña" >
                                </div>

                               
                                <div class="form-label-group">
                                    <label for="tipo">Tipo de Usuario </label>
                                    <select name = "tipo" class="custom-select form-control">
                                        <option value="admin">Administrador</option>
                                        <option value="normal">Normal</option>
                                    </select>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block text-uppercase  my-2" type="submit" id="idBotonRegistro">Registrarse</button>
                                <hr class="my-4">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once('footer.php');
?>