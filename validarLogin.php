<?php
    include 'config.php';
    $usuario = $_POST['user'];
    $clave = md5($_POST['pass']);
    echo sha1('yo06yo12');
    die;
   // echo $usuario . '  ' . $clave ;
    //$conexion = new mysqli('localhost', 'login_atilio', 'yo06yo12','login');
   // print_r($conexion);
    $conection=conectarDB($dbParams);
    $resultado = $conection->query("SELECT user, pass FROM usuario WHERE user='$usuario' AND pass='$clave'");
    //print_r($resultado);
    //print_r($resultado->fetch_assoc());
    if ($resultado->num_rows <1)
    {
        echo 'Usuario o Clave Incorrecta';
    }
    else
    {
        header('Location: formToken.php');
    }
    
?>
