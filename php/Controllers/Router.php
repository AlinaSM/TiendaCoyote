<?php

class Router{
    public $route;

    public function __construct($route){

        $session_options = array(
			'use_only_cookies' => 1,
			//'auto_start' => 1,
			'read_and_close' => true
        );
        
        if( !isset( $_SESSION ) )  session_start( $session_options );
        if( !isset( $_SESSION['ok'] ) ) $_SESSION['ok'] = false;
        
        $frm = new ViewController();
        $usersController = new UsuariosController();
        $isAdmin = null; // $_SESSION['tipo'] == 'admin' ? true : false

        if( $_SESSION['ok'] ){

        }else{
            
            switch($route){
               
                case 'inicio':
                $frm->loadView('inicio', $isAdmin);
                break;

                case 'registro':
                $frm->loadView('registro', $isAdmin);
                break;

                case 'login':
                $frm->loadView('login', $isAdmin);
                break;
                
                case 'login':
                $frm->loadView('login', $isAdmin);
                break;
                //login/noexiste
                case 'buscador':
                $frm->loadView('buscador', $isAdmin);
                break;

                case 'usuario/registrar':
                /* Seccion para crear a un usuario */
                $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 'normal';
                $new_user = array(
                    'nombre'     =>  $_POST['nombre'], 
                    'apellido'   =>  $_POST['apellido'], 
                    'email'      =>  $_POST['email'], 
                    'username'   =>  $_POST['username'], 
                    'contrasena' =>  $_POST['contrasena'], 
                    'direccion'  =>  $_POST['direccion'],
                    'tipo'       =>  $tipo
                );
                $usersController->create($new_user);
                
                header('Location: /page/registro-exitoso');
                break;

                case 'registro-exitoso':
                $frm->loadView('registro-exitoso', $isAdmin);
                break;

                //Paginas para los usuarios registrados
                case 'usuario/validar':
                $data = $usersController->validate($_POST['username'], $_POST['contrasena']);
                /* Si la variable data esta vacia entonces no encontro ningun usuario con 
                ese nombre o la contraseña es incorrecta*/
                if($data){
                    //Inicia sesion del usuario
                    header('Location: /coyote/');
                }else{
                    //manda por GET que hubo un error al iniciar sesion
                    header('Location: /coyote/page/login/noexiste');
                }
                
                break;

                case 'compra':
                $frm->loadView('compra', $isAdmin);
                break;

                //Paginas para el administrador
                case 'inicio-sesion':
                $frm->loadView('inicio-sesion', $isAdmin);
                break;

                case 'crear-usuario':
                $frm->loadView('crear-usuario', $isAdmin);
                break;


            }

        }
    }

}