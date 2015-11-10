<?php

session_start();
if (!isset($_SESSION['paso1']))
{
    session_destroy();
    header('Location: index.php');
}


include_once 'config.php';
include_once 'funciones.php';
require_once 'GoogleAuthenticator.php';

$tokenIn = $_POST['token'];
$usuario = $_POST['usuario'];

//Conexion a DB
$coneccion = conectarDB($parametrosGlobales['db']);
$resultado = $coneccion->query("SELECT token FROM usuario WHERE user='$usuario'");

if ($resultado->num_rows > 0)
{
    $fila = $resultado->fetch_assoc();
    $secreto = $fila["token"];
}
else
{
    echo 'No existe el usuario <br>';
    echo "<a href='formToken.php?user=$usuario'>Intentar Nuevamente </a>";
    die;
}

$ga = new PHPGangsta_GoogleAuthenticator();
$checkResult = $ga->verifyCode($secreto, $tokenIn, 3);    // 2 = 2*30sec clock tolerance
if ($checkResult)
{
    session_start();
    $_SESSION['validado'] = true;
    header('Location: bienvenido.php');
}
else
{
    echo 'TOKEN NO VALIDO <br>';
    echo "<a href='formToken.php?user=$usuario'>Intentar Nuevamente </a>";
}