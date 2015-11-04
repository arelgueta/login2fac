<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>ATILIO!</title>
    </head>
    <body>
        <H1>TOKEN</H1>
        <?php
        
        //session_start();
        //$user = $_SESSION['usuario'];
        //$user=$_GET["usuario"];
        
        echo "Bienvenido ". $user ;
           //".$hola ;
        ?>
        <p>Verifique el Token de su móvil por favor</p>
        <form action="validarToken.php"method="POST">
            Ingrese Token: <input name="token" type="text" placeholder="TOKEN" />
            <input name="usuario"  type="hidden" value="<?php echo $user;?>" />
            <input name="enviar" type="submit" value="ENVIAR" />
        </form>
    </body>
</html>

