<?php
session_start();
if (!isset($_SESSION['paso1']))
{
    session_destroy();
    header('Location: index.php');
}
?>

<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>login2fac</title>
    </head>
    <body>
        <H1>TOKEN</H1>
        <?php
        $user = $_GET["user"];
        echo "Bienvenido " . $user;
        ?>
        <p>Verifique el Token de su móvil por favor</p>
        <form action="validarToken.php"method="POST">
            Ingrese Token: <input name="token" type="text" placeholder="TOKEN" />
            <input name="usuario"  type="hidden" value="<?php echo $user; ?>" />
            <input name="enviar" type="submit" value="ENVIAR" />
        </form>
    </body>
</html>

