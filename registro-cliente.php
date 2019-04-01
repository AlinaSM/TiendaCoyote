<?php
require_once('head.php');
require_once('header.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de Cliente</h5>
                        <form class="form-signin" id="frmRegistro" autocomplete="off" method="POST" action="php/Controllers/ClientesController.php?op=registrar-cliente">
                            
                            <div class="row">
                                <div class="col">
                                <i class="m-5">Datos del Cliente</i>
                                    <div class="form-label-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" id="Nombre" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
                                    </div>

                                    <div class="form-label-group">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" id="Apellidos" name="apellido" class="form-control" placeholder="Apellidos" required >
                                    </div>

                                    <div class="form-label-group">
                                        <label for="Email">Correo Electronico</label>
                                        <input type="email" id="Email" name="email"  class="form-control" placeholder="nombre@dominio.com"  required >
                                    </div>

                                    <div class="form-label-group">
                                        <label for="Telefono">Telefono</label>
                                        <input type="email" id="Telefono" name="telefono"  class="form-control" placeholder="744-0000-000"  required >
                                    </div>

                                    <div class="form-label-group">
                                        <label for="Usuario">Nombre de Usuario</label>
                                        <input type="text" id="Usuario" name="alias" class="form-control"  onkeyup ="" placeholder="Nombre de Usuario"  required >
                                        </div>

                                    <div class="form-label-group">
                                        <label for="Contrasena">Contraseña</label>
                                        <input type="password" id="Contrasena" name="contrasena" class="form-control" placeholder="Contraseña" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <i class="m-5">Direccion</i>

                                    <div class="form-label-group">
                                        <label for="estado">Estado</label>
                                        <select name = "estado" id="Estado" class="custom-select form-control"  required >
                                        <!-- Utilizar Ajax PHP  para extraer los municipios del estado seleccionado --->
                                            <option value="">Elegir un estado</option>
                                            <?php foreach ($estadoController->read() as $dato) : ?>
                                                <option value="<?= $dato['id'] ?>"><?= $dato['estado'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-label-group">
                                        <label for="municipio">Municipio</label>
                                        <!-- Utilizar Ajax PHP  para extraer los municipios del estado seleccionado --->
                                        <div id="LlenarMuncipios"></div>
                                        
                                    </div>

                                    <div class="form-label-group">
                                        <label for="Colonia">Colonia</label>
                                        <input type="text" id="Colonia" name="colonia" class="form-control" placeholder=""  required >
                                        </div>

                                    <div class="form-label-group">
                                        <label for="Calle">Calle</label>
                                        <input type="text" id="calle" name="calle" class="form-control" placeholder="" required >
                                    </div>

                                    <div class="form-label-group">
                                        <label for="num_ext">Numero Exterior</label>
                                        <input type="text" id="num_ext" name="num_ext" class="form-control" placeholder=""  required >
                                        </div>

                                    <div class="form-label-group">
                                        <label for="num_int">Numero Interior</label>
                                        <input type="text" id="num_int" name="num_int" class="form-control" placeholder="" required >
                                    </div>

                                </div>
                            </div>
                       
                            <button class="btn btn-lg btn-primary btn-block text-uppercase  my-3" type="submit" id="idBotonRegistro">Registrarse</button>
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