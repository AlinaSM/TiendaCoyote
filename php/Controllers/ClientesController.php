<?php
require_once('../Models/ClientesModel.php');
require_once('../Models/EmailModel.php');
require_once('../Models/DireccionModel.php');
//require_once('../Models/UsuariosModel.php');
require_once('Domain.php');

$clientesController = new ClientesModel();
$emailController = new EmailModel();
$direccionController = new DireccionModel();

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


if(isset($_POST['op'])){

    switch($_POST['op']){

        case 'registrar-cliente':
            
            //Registramos la direccion del Cliente
            $new_address = array(
                'colonia'       =>  $_POST['colonia'], 
                'calle'         =>  $_POST['calle'],  
                'num_ext'       =>  $_POST['num_ext'], 
                'num_int'       =>  $_POST['num_int'], 
                'estados_id'    =>  $_POST['estado'], 
                'municipios_id' =>  $_POST['municipio'],
            );
            $direccionController->create($new_address);  

            //Registramos los datos del Cliente
            $new_user = array(
                'nombre'      =>  $_POST['nombre'], 
                'apellido'    =>  $_POST['apellido'],  
                'alias'       =>  $_POST['alias'], 
                'contrasena'  =>  $_POST['contrasena'], 
            );
            $clientesController->create($new_user);


            //Relacionando la direccion al cliente
            $clientesController->addDireccion( array(
                'clientes_id'    =>  $clientesController->lastId(),
                'direccion_id'  =>  $direccionController->lastId()
            ));


            //Registramos el email del Cliente
            $arr = array(
                'email' => $_POST['email'],
            );
            $emailController->create($arr);

            $clientesController->HasEmail(array(
                'clientes_id' => $clientesController->lastId(),
                'email_id' =>  $emailController->lastId()
            ));

            
            //Registramos el telefono del cliente
            $clientesController->HasTelefono(array(
                'clientes_id' => $clientesController->lastId(),
                'telefono'   => $_POST['telefono']
            ));
            
            header("Location: /$DomainName/registro-exitoso.php");
        break;

        
    }
}