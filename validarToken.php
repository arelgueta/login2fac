<?php
$tokenIn = $_POST['token'] ;
$usuario = $_POST['usuario'];
//echo $usuario;
//echo $tokenIn;
//Conexion a DB
 include 'config.php';
 $conection=conectarDB($dbParams);
$resultado = $conection->query("SELECT token FROM usuario WHERE user='$usuario'");
//print_r($resultado) ;
if ($resultado->num_rows > 0) {
    // output data of each row
    while($row = $resultado->fetch_assoc()) {
        //echo "Secreto: " . $row["token"]. "<br>";
        $secret=$row["token"];
    }
}
 //Verificación del Código
require_once 'GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

//$secret = $ga->createSecret();
echo "Secret is: ".$secret."\n\n";

$qrCodeUrl = $ga->getQRCodeGoogleUrl('Blog', $secret);
echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n";


$oneCode = $ga->getCode($secret);
echo "Checking Code '$oneCode' and Secret '$secret':\n";

$checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance
if ($checkResult) {
    echo 'OK';
} else {
    echo 'FAILED';
}
