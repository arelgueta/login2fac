<?php
    include 'config.php';
    include 'View.php';
    $usuario = $_POST['user'];
    $clave = sha1($_POST['pass']);
    //echo sha1('123456');
    //print_r($clave);
    //die;
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
       //session_start();
       //$_SESSION['usuario']=$usuario;
        $vista = new View();
        echo $vista->render('formToken.php', ['user'=>$usuario,'hola'=>33 ]);
        
        //header('Location: formToken.php?usuario='.$usuario);
    } 
?>
