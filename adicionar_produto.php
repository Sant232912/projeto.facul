<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];

    $nome = mysqli_real_escape_string($conn, $nome);
    $categoria = mysqli_real_escape_string($conn, $categoria);
    $preco = mysqli_real_escape_string($conn, $preco);

    $sql = "INSERT INTO produtos (nome, categoria, preco) VALUES ('$nome', '$categoria', '$preco')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Produto cadastrado com sucesso!'); window.location.href='menu.html';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar produto: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }
}
?>