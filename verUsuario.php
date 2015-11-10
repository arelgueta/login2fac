<?php

include_once 'config.php';
include_once 'funciones.php';
require_once 'GoogleAuthenticator.php';

$idUsuario = $_GET['id'];

$coneccion = conectarDB($parametrosGlobales['db']);
$resultado = $coneccion->query("SELECT * FROM usuario WHERE idUsuario='$idUsuario'");

if ($resultado->num_rows < 1)
{
    echo 'Usuario Inexistente';
}
else
{
    $fila = $resultado->fetch_assoc();
    echo '<h2> Usuario : '. $fila['user'] . '</h2>';

    $ga = new PHPGangsta_GoogleAuthenticator();
    $qrCodeUrl = $ga->getQRCodeGoogleUrl($fila['user'], $fila['token']);
    echo "<p style='margin-left:20%'> <img src='{$qrCodeUrl}'></p>";
    
}