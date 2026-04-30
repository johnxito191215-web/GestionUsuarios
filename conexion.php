<?php
$host = "ftp-johnxito.alwaysdata.net";
$usuario = "johnxito";
$password = "alexander123";
$bd = "gestion_usuarios";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>