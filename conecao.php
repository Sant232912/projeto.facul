<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>