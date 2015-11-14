<?php
//Valida el Login Usuario + Contraseña
include_once 'config.php';
include_once 'funciones.php'; 
include_once 'View.php';  
//----asignacion de variables ----
$usuario = $_POST['user'];
$clave = sha1($_POST['pass']);
//imprimir("$usuario : $clave");

$coneccion = conectarDB($parametrosGlobales['db']);
$resultado = $coneccion->query("SELECT user, pass FROM usuario WHERE user='$usuario' AND pass='$clave'");
//imprimir($conection);

if ($resultado->num_rows < 1)
{
    echo 'Usuario o Clave Incorrecta';
}
else
{
    //primer paso de la sesión - el 2º lo dará el token
    session_start(array('cookie_lifetime' => 60 * 3)); //sesion de 3 minutos
    $_SESSION['paso1'] = true;
//    $vista = new View();
//    echo $vista->render('formToken.php', array('user' => $usuario));
    header('Location: formToken.php?user=' . $usuario);
}
?>

<br><br><br><a href="index.php">Ir al Login</a>

