<?php

//session_start();
$dbParams = array(
    'host' => 'localhost',
    'usuario' => 'login_atilio',
    'passwd' => 'yo06yo12',
    'db' => 'login',
);

function conectarDB($dbParams) {
    $conexion = new mysqli($dbParams['host'], $dbParams['usuario'], $dbParams['passwd'], $dbParams['db']);
    return $conexion;
}
function imprimir($variable)
{
    echo'<pre>';
    print_r($variable);
    echo '</pre>';
}
