<?php include('conexao.php'); ?>
<h2> Cadastrar nova categoria</h2>
<form action="ins_categoria.php" method="POST">
    Nome da categoria: <br>
    <input type="text" name="nome_categoria" required maxlength="30"><br><br>
    <input type="submit" value="Salvar Categoria">
</form>
<br>
<a href="index.php">Voltar ao Painel</a>
