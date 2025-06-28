<?php
include("conexao.php");

if (isset($_GET['busca'])) {
    $termo = mysqli_real_escape_string($conn, $_GET['busca']);

    $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$termo%' OR email LIKE '%$termo%'";
    $resultado = mysqli_query($conn, $sql);

    echo "<h2>Resultados da busca:</h2>";
    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Nome: " . $row['nome'] . "<br>";
            echo "E-mail: " . $row['email'] . "<br><hr>";
        }
    } else {
        echo "Nenhum funcionário encontrado.";
    }
} else {
    echo "Digite um nome ou e-mail para buscar.";
}
?>