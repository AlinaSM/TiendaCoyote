<header class="navbar  navbar-expand-lg  navbar-light bg-warning"  >

        <!-- Aqui va el logo de nuestra pagina -->
        <a class="navbar-brand mr-5" href="inicio">
            <img class="logo-principal" src="../page/resources/img/Logo-Coyote.png" width= "130px"> 
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
                    <a class="dropdown-item" href="">Deportes</a>
                    <a class="dropdown-item" href="">Electronica</a>
                    <a class="dropdown-item" href="">Herramientas</a>
                    <a class="dropdown-item" href="">Muebles</a>
                    <a class="dropdown-item" href="">Ropa</a>
                    <a class="dropdown-item" href="">Tecnologia</a>
                    <a class="dropdown-item" href="">Vehiculos</a>
                </div>
            </li>
            
            <!-- Formulario del buscador del sitio web -->
            <li class="nav-item  ml-5 mr-5">
            <form class="form-inline  my-2  my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Articulo que desea...">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            </li>
            <!-- Botones de inicio de sesion y de registro -->
            <li class="nav-item ml-5">
                <a class="nav-link" href="login">Iniciar Sesión</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
            </li>           
        
            </ul>
        </div>
    </header>