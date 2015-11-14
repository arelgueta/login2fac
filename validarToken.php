<?php
//solo se podra ingresar a la validación del token si la sesión de usr y pwd está activa
session_start();
if (!isset($_SESSION['paso1']))
{
    session_destroy();
    header('Location: index.php');
}
//

include_once 'config.php';
include_once 'funciones.php';
require_once 'GoogleAuthenticator.php';

$tokenIn = $_POST['token'];
$usuario = $_POST['usuario'];

//Conexion a DB
$conexion = conectarDB($parametrosGlobales['db']);
$resultado = $conexion->query("SELECT token FROM usuario WHERE user='$usuario'");

if ($resultado->num_rows > 0)
{
//extraigo el secreto de la DB para regenerar el Token   
    $fila = $resultado->fetch_assoc();
    $secreto = $fila["token"];
//llamo a función, le paso el secreto y el token ingesado y los comparo
    $ga = new PHPGangsta_GoogleAuthenticator();
    $checkResult = $ga->verifyCode($secreto, $tokenIn, 3);    // 2 = 2*30sec clock tolerance
    if ($checkResult)
    {
  //si el token generado al del usuario son idénticos, la variable de sesión "validado" pasa a true y se redirige a la pagina de usuario
        session_start();
        $_SESSION['validado'] = true;
        header('Location: bienvenido.php');
    }
    else
    {
        echo 'TOKEN NO VALIDO <br>';
    }
}
else
{
    echo 'No existe el usuario <br>';
}

echo "<br><br><a href='formToken.php?user=$usuario'>Intentar Nuevamente </a>";
