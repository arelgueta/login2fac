<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>ATILIO!</title>
    </head>
    <body>
        <h1>ACCESO CORRECTO</h1>
        <H2>Zona de trabajo</H2>
        <H3> Sesión activa:  
<?php
session_start(['cookie_lifetime' => 300]);
$loguser=$_SESSION['usuario'];
print_r($loguser);

?>  
    </H3>
        Este es su espacio de usuario, no olvide cerrar su sesión, en caso contrario, la misma permanecerá activa durante 5 minutos
        <p></p>
        <a href="logout.php">Cerrar Sesión <?php print_r($loguser); ?></a>
        
        
        
        
        
        
        
        <?phap