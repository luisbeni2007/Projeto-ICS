<?php
include('conexao.php');
echo "<h1> Painel Backend</h1>";
echo "<a href='cadastro.php'> [Cadastrar Produto] </a><br><br>";
echo "<a href='cad_categoria.php'> [Cadastrar Categoria] </a><br><br>";

$resultado = mysqli_query($conexao, "SELECT * FROM Produtos");
while($reg = mysqli_fetch_assoc($resultado)) {
    echo $reg['nome'] . " - ";
    echo " <a href='editar.php?id=".$reg['id']."'>[Editar]</a>";
    echo "  <a href='excluir.php?id=".$reg['id']."' style = 'color:red' onclick=\"return confirm('Apagar?')\">[Excluir]</a>";
    echo "<br>";
}
echo "<br><a href='http://lojaprojeto.com.br'> [Voltar para loja] </a>";
?>
