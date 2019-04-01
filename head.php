<?php
session_start();
require_once('php/Models/CatalogoTiposModel.php');
require_once('php/Controllers/CatalogoTiposController.php');

require_once('php/Models/EstadosModel.php');
require_once('php/Controllers/EstadosController.php');
?>

<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel='stylesheet' href='resources/css/bootstrap.min.css'>
       
    <title>Tienda <?php echo 'Coyote' ?></title>
</head>
<body>
