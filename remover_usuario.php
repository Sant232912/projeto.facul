<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "DELETE FROM usuarios WHERE email = '$email'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Usuário removido com sucesso!'); window.location.href='menu.html';</script>";
    } else {
        echo "<script>alert('Erro ao remover: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }
}
?>