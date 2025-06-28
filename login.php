<?php
session_start();
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Proteção contra SQL Injection
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);

    // Verifica no banco
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) === 1) {
        $_SESSION['usuario'] = $email;
        header("Location: menu.html");
        exit();
    } else {
        echo "<script>alert('E-mail ou senha incorretos!'); window.location.href='login.html';</script>";
        exit();
    }
}
?>