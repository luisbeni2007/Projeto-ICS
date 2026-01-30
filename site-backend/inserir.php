<?php
include('../lojaprojeto.com.br/conexao.php');

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$id_cat = $_POST['id_categoria'];

$sql = "INSERT INTO Produtos (nome, preco, descricao, id_categoria)
        VALUES ('$nome','$preco', '$descricao', '$id_cat')";

if(mysqli_query($conexao, $sql)){
    echo "<h2> Produto Cadastrado com sucesso</h2>";
    echo "<a href='http://lojaprojeto.com.br/index.php'>Clique aqui para ver o produto no site principal</a>";
} else {
    echo "erro ao cadastrar" . mysqli_error($conexao);
}
?>
