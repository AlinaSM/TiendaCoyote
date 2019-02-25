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

                case 'buscador':
                $frm->loadView('buscador', $isAdmin);
                break;

                case 'detalle-articulo':
                $frm->loadView('detalle-articulo', $isAdmin);
                break;

                //Paginas para los usuarios registrados
                case 'carrito':
                $frm->loadView('carrito', $isAdmin);
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