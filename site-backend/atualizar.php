<?php
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$id_categoria = $_POST['id_categoria'];

$sql = "UPDATE Produtos SET nome = '$nome', preco='$preco', id_categoria='$id_categoria' WHERE id=$id";

if(mysqli_query($conexao, $sql)) {
    header("Location: http://lojaprojeto.com.br/index.php");
} else {
    echo "Erro ao atualizar categoria: " . mysqli_error($conexao);
}
?>
