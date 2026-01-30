<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM Produtos WHERE id = $id";

if(mysqli_query($conexao, $sql)) {
    header("Location: index.php");
} else {
    echo "Erro ao excluir: " . mysqli_error($conexao);
}
?>
