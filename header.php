
<header class="navbar  navbar-expand-lg  navbar-light bg-warning"  >

        <!-- Aqui va el logo de nuestra pagina -->
        <a class="navbar-brand mr-5" href="index.php">
            <img class="logo-principal" src="resources/img/Logo-Coyote.png" width= "130px"> 
        </a>

        <!-- Esto es el recuadro del menu que sale al minimizar la pagina  -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Boton dropeable donde aparecen los diferentes tipos de articulos -->
        <div class="collapse  navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav  mr-auto  mt-2  mt-lg-0">
            
            <li class="nav-item  dropdown">
                <a class="nav-link  dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Departamentos
                </a>
                <!-- TODO: Sacarlo desde la base de datos  -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php foreach ($CatalogoTiposController->read() as $tipo) : ?>
                        <a class="dropdown-item" href="buscar-categoria.php?tipo=<?= $tipo['id'] ?>&categoria=<?= $tipo['tipo'] ?>"><?= $tipo['tipo'] ?></a>
                    <?php endforeach; ?>
                </div>
            </li>
            
            <!-- Formulario del buscador del sitio web -->
            <li class="nav-item  ml-5 mr-5">
            <form class="form-inline  my-2  my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Articulo que desea...">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            </li>
               
            <?php if (!isset($_SESSION['id'])): ?>
                <!-- Botones de inicio de sesion y de registro -->
            <li class="nav-item ml-5">
                <a class="nav-link" href="login.php">Iniciar Sesión</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="registro-cliente.php">Registrarse</a>
            </li> 
            <?php endif; ?>

            <?php if (isset($_SESSION['id'])): ?>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="vende-articulo.php">Vender</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="perfil-usuario.php">Perfil</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="php/Controllers/UsuariosController.php?op=cerrar-sesion">Cerrar Sesión</a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
    </header>