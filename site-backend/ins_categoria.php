<?php
include('conexao.php');

$nome = $_POST['nome_categoria'];

$sql = "INSERT INTO Categoria (nome) VALUES ('$nome')";

if(mysqli_query($conexao, $sql)) {
    header("Location: index.php");
} else{
    echo "Erro: " . mysqli_error($conexao);
}
?>
