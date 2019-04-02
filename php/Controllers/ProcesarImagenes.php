<?php

class ProcesarImagenes {
    private $archivo;
    private $ext;

    public function Imagen( $archivo, $ext, $DomainName ){
        $nombreImagen = $archivo['Imagen']['name'];
        $tipoImagen   = $archivo['Imagen']['type'];
    
        $carpetaDestino = $_SERVER['DOCUMENT_ROOT']."/$DomainName/resources/img/articulos/";
        $GenerarNombre = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,10);
            
        $ImagenURL = $carpetaDestino . $GenerarNombre . $ext;
        move_uploaded_file($archivo['Imagen']['tmp_name'],$ImagenURL);
    
        $ImagenURL = "resources/img/articulos/" . $GenerarNombre . $ext;
        return $ImagenURL;
    }

    public function ValidarTipoImagen($tipo){

        if($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
            return false;
        }else{
    
            switch($tipo){
    
                case 'image/jpg':
                    $extencion = '.jpg';
                break;
    
                case 'image/jpeg':
                    $extencion = '.jpeg';
                break;
    
                case 'image/png':
                    $extencion = '.png';
                break;
    
                case 'image/gif':
                    $extencion = '.gif';
                break;
            }
            return $extencion;
        }
    }

}