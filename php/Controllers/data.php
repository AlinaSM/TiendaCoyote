<?php

require_once('Domain.php');
require_once('../Models/EstadosModel.php');

$stateController = new EstadosModel();

if( isset($_POST['idestado']) ){
    $idEstado = $_POST['idestado'];
    
    $cadena = " <select name = 'municipio' class='custom-select form-control'  required > ";
    foreach ($stateController->hasMunicipios( $idEstado ) as $dato){
        $cadena = $cadena . "<option value=".$dato["id"].">".$dato['municipio']."</option> ";
    } 
    echo $cadena . "</select>"; 
}
