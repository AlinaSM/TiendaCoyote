<?php
require_once('app/Controllers/Autoload.php');
$autoload = new Autoload();

if(isset($_GET['t'])){

    $route =  !isset($_GET['p']) && $_GET['p'] == 'inicio'? 'inicio' : $_GET['p'] ;
    $page = new Router( $route );
}else{
    header('Location: page/inicio');
}


?>
