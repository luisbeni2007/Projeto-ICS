<html>
<body>
<?php
include('conexao.php');
$sql = mysqli_query($conexao, 'select Produtos.nome,Produtos.descricao, Produtos.preco, Categoria.nome as nome_categoria from Produtos inner join Categoria on Produtos.id_categoria = Categoria.id') or die(mysqli_error($conexao));

while($row = mysqli_fetch_assoc($sql)) {
    echo $row['nome'].' - '.$row['preco'].' - '.$row['descricao'].' - '.$row['nome_categoria'];
    echo '<br/>';
}
?>
<a href="http://lojaprojeto.backend.biz/index.php" style="font-size:20px; font-weight: bold; color: blue;"> Ir para o Painel Administrativo </a>
</body>
</html>
