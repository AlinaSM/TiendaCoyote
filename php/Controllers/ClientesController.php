<?php
require_once('../Models/ClientesModel.php');
require_once('../Models/EmailModel.php');
//require_once('../Models/UsuariosModel.php');
require_once('Domain.php');

$clientesController = new ClientesModel();
$emailController = new EmailModel();

if(isset($_POST['login-normal'])){
    $data = $clientesController->validate($_POST['username'], $_POST['contrasena']);
    /* Si la variable data esta vacia entonces no encontro ningun usuario con 
    ese nombre o la contraseña es incorrecta*/
    if($data){
        //Inicia sesion del usuario
        session_start();
        foreach ($data as $row) {
            $_SESSION['id']        = $row['id'];
            $_SESSION['nombre']    = $row['nombre'];
            $_SESSION['apellidos'] = $row['apellidos'];
            $_SESSION['alias']     = $row['alias'];
            $_SESSION['tipo']      = $row['tipo'];
            $_SESSION['email']     = $row['email'];
        }
        
        header("Location: /$DomainName/home.php");
    }else{
        //manda por GET que hubo un error al iniciar sesion
        header("Location: /$DomainName/index.php?r=noexiste");
    }
}


if(isset($_GET['op'])){

    switch($_GET['op']){
        
        case 'cerrar-sesion':
            session_start();
            session_destroy();
            header("Location: /$DomainName/index.php");
        break;

        case 'registrar-clientes':
            //Registramos la direccion del Cliente

            //Registramos los datos del Cliente
            $new_user = array(
                'nombre'      =>  $_POST['nombre'], 
                'apellido'    =>  $_POST['apellido'],  
                'alias'       =>  $_POST['alias'], 
                'contrasena'  =>  $_POST['contrasena'], 
                'iddireccion' =>  $idDireccion
            );
            $clientesController->create($new_user);

            //Registramos el email del Cliente
            $arr = array(
                'email' => $_POST['email'],
            );
            $emailController->create($arr);

            $clientesController->HasEmail(array(
                'usuario_id' => $clientesController->lastId(),
                'email_id' =>  $emailController->lastId()
            ));
            //Registramos el telefono del cliente

            header("Location: /$DomainName/registro-exitoso.php");
        break;

        
    }
}