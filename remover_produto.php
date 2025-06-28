<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);

    $sql = "DELETE FROM produtos WHERE nome = '$nome'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Produto removido com sucesso!'); window.location.href='menu.html';</script>";
    } else {
        echo "<script>alert('Erro ao remover produto: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }
}
?>