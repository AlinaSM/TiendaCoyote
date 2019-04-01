<?php
require_once('../Models/UsuariosModel.php');
require_once('../Models/EmailModel.php');
require_once('Domain.php');

$usersController = new UsuariosModel();
$emailController = new EmailModel();

/*
if(isset($_POST['login-normal'])){
    $data = $usersController->validate($_POST['username'], $_POST['contrasena']);
   
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

*/
if(isset($_POST['op'])){

    switch($_POST['op']){
        
        case 'cerrar-sesion':
            session_start();
            session_destroy();
            header("Location: /$DomainName/index.php");
        break;

        case 'registrar-usuario':
        echo "Registro";

            $new_user = array(
                'nombre'     =>  $_POST['nombre'], 
                'apellido'   =>  $_POST['apellido'], 
                'alias'      =>  $_POST['alias'], 
                'contrasena' =>  $_POST['contrasena'], 
                'tipo'       =>  $_POST['tipo']
            );
            $usersController->create($new_user);

            echo "Suebiendo USER";
            /*$arr = array(
                'email' => $_POST['email'],
            );
            $emailController->create($arr);
            echo "Subiendo EMAIL";

            $usersController->HasEmail(array(
                'usuario_id' => $usersController->lastId(),
                'email_id' =>  $emailController->lastId()
            ));
            echo "Subiendo RELACION";*/
            //header("Location: /$DomainName/registro-exitoso.php");
        break;

        
        
    }
}