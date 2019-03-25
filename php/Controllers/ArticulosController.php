<?php
require_once('../Models/ArticulosModel.php');
require_once('ProcesarImagenes.php');
require_once('Domain.php');
/*
class ArticulosController{
    private $model;

    public function __construct(){
        $this->model = new ArticulosModel();
    }

    public function create( $data = array(), $urlImage ){
        return $this->model->create($data, $urlImage);
    }

    public function read( $id ='' ){
        return $this->model->read($id);
    }

    public function update( $data = array() ){
        return $this->model->update($data);
    }

    public function delete( $id = '' ){
        return $this->model->delete($id);
    }

}
*/



$ArticulosController = new ArticulosModel();
$Imagen = new ProcesarImagenes();
session_start();

if( isset($_POST['op']) ){
    //echo "Subiendo ";

    switch( $_POST['op'] ){
        case 'vender':
            
            if(  $ext = $Imagen->ValidarTipoImagen( $_FILES['Imagen']['type'] )  ){

                $RutaImagen = $Imagen->Imagen($_FILES, $ext, $DomainName);
                $IdUsuario = $_SESSION['id'];
                echo "Subiendo correctamente";
                $ArticulosController->create($_POST, $RutaImagen);
                $registro = $articulos->getArticuloByNombre($_POST['Articulo']);
         
                  
            foreach($articulos->read($_POST['Articulo']) as $registro){
                header('Location: '.$DomainName.'/detalle-articulo.php?id='.$registro['nombre'].'&p='.$registro['precio_unitario'].'&c='.$registro['cantidad'].'&i='.$registro['id']);  
            }
                    
            }else{
                echo "Error: el tipo de archivo que trata de mandar no es valido. >:c";
            }
        break;
    
    }
    

}