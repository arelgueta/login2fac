<?php
//conexión a DB
function conectarDB($dbParams)
{
    $conexion = new mysqli($dbParams['host'], $dbParams['usuario'], $dbParams['passwd'], $dbParams['db']);
    if ($conexion->connect_errno)
    {
        echo "Error en la conexion con MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        die;
    }
    else
    {
        return $conexion;
    }
}
//funcion imprimir variables - para pruebas
function imprimir($variable)
{
    echo'<pre>';
    print_r($variable);
    echo '</pre>';
}
