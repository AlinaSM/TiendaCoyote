<?php
require_once('../Models/ArticulosModel.php');
require_once('ProcesarImagenes.php');
require_once('Domain.php');


$ArticulosController = new ArticulosModel();
$Imagen = new ProcesarImagenes();
//session_start();

if( isset($_POST['op']) ){
    //echo "Subiendo ";

    switch( $_POST['op'] ){
        case 'vender':
            
            if(  $ext = $Imagen->ValidarTipoImagen( $_FILES['Imagen']['type'] )  ){

                $RutaImagen = $Imagen->Imagen($_FILES, $ext, $DomainName);
                $ArticulosController->createWithImage($_POST, $RutaImagen);
                echo "Subiendo correctamente";
              
                $idProducto = $ArticulosController->lastId();
                header('Location: /'.$DomainName.'/detalle-articulo.php?id='.$idProducto); 
          /* 
                  
            foreach($articulos->read($_POST['Articulo']) as $registro){
                header('Location: '.$DomainName.'/detalle-articulo.php?id='.$registro['nombre'].'&p='.$registro['precio_unitario'].'&c='.$registro['cantidad'].'&i='.$registro['id']);  
            }
              */      
            }else{
                echo "Error: el tipo de archivo que trata de mandar no es valido. >:c";
            }
        break;
    
    }
    

}