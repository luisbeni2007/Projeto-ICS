<?php
include('conexao.php');
$query_cat = mysqli_query($conexao, "SELECT id, nome FROM Categoria");
?>
<html>
<body>
    <h2> cadastro de produto</h2>
    <form action="inserir.php" method="POST">
        nome: <br>
        <input type="text" name="nome" required> <br><br>

        preco: <br>
        <input type="text" name="preco" required> <br><br>

        Descricao: <br>
        <input type="text" name="descricao"><br><br>

        Categoria: <br>
        <select name="id_categoria" required>
            <option value="">Selecione uma categoria</option>
            <?php while($cat = mysqli_fetch_assoc($query_cat)) { ?>
                <option value="<?php echo $cat['id']; ?>">
                    <?php echo $cat['nome']; ?>
                </option>
            <?php } ?>
        </select><br><br>

        <input type="submit" value="Salvar Produto">
    </form>
    <br>
    <a href="index.php">Voltar para Lista</a>
</body>
</html>
