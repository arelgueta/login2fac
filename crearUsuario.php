<html>
    <head>
        <title>login2fac</title>
    </head>
    <body>
        <H1>Crear Nuevo Usuario</H1>

        <form action="validarUsuario.php"method="POST">
            Usuario: <input name="user" type="text" placeholder="USUARIO" />
            <br>
            Password: <input name="pass" type="password" placeholder="PASSWORD" />
            <br>
            <input name="enviar" type="submit" value="ENVIAR" />
        </form>
    </body>
</html>
