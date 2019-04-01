<?php
require_once('../Models/UsuariosModel.php');
require_once('../Models/ClientesModel.php');
require_once('../Models/EmailModel.php');
//require_once('../Models/UsuariosModel.php');
require_once('Domain.php');

$usersController = new UsuariosModel();
$clientsController = new ClientesModel();
$emailController = new EmailModel();

if(isset($_POST['login'])){
    $dataUser   = $usersController->validate($_POST['alias'], $_POST['contrasena']);
    $dataClient = $clientsController->validate($_POST['alias'], $_POST['contrasena']);
    
    /* Si la variable data esta vacia entonces no encontro ningun usuario con 
    ese nombre o la contraseña es incorrecta*/
    if( $dataUser ){
        //Inicia sesion del usuario
       /* session_start();
        foreach ($data as $row) {
            $_SESSION['id']        = $row['id'];
            $_SESSION['nombre']    = $row['nombre'];
            $_SESSION['apellidos'] = $row['apellidos'];
            $_SESSION['alias']     = $row['alias'];
            $_SESSION['tipo']      = $row['tipo'];
            $_SESSION['email']     = $row['email'];
        }
        
        header("Location: /$DomainName/home.php"); */
        echo "Es usuario del sistema";
    }elseif ( $dataClient ){
        echo "Es cliente de la pagina";
        

        //header("Location: /$DomainName/home.php");
    }else{
        //manda por GET que hubo un error al iniciar sesion
        //header("Location: /$DomainName/index.php?r=noexiste");
        echo "No se quien eres";
    }
}