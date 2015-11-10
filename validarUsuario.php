<?php

include_once 'config.php';
include_once 'funciones.php';
include_once 'View.php';
require_once 'GoogleAuthenticator.php';

$usuario = $_POST['user'];
$clave = sha1($_POST['pass']);

$ga = new PHPGangsta_GoogleAuthenticator();
$token = $ga->createSecret();
$coneccion = conectarDB($parametrosGlobales['db']);
$resultado = $coneccion->query("INSERT INTO usuario (`user`, `pass`, `token`) VALUES ('$usuario', '$clave', '$token')");

if (!$resultado)
{
    echo "Falló la creación del usuario: (" . $coneccion->errno . ") " . $coneccion->error;
}
else
{
    $utlimoID= mysqli_insert_id($coneccion);
    header("Location: verUsuario.php?id=$ultimoID");
}



