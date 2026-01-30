<?php
include('conexao.php');
$id = $_GET['id'];
$produto = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT * FROM Produtos WHERE id=$id"));
$categorias = mysqli_query($conexao, "SELECT * FROM Categoria");
?>
<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $produto['nome']; ?>">
    Preço: <input type="text" name="preco" value="<?php echo $produto['preco']; ?>">
    Categoria:
    <select name="id_categoria">
        <?php while($cat = mysqli_fetch_assoc($categorias)) { ?>
            <option value = "<?php echo $cat['id']; ?>" <?php echo ($cat['id'] == $produto['id_categoria']) ? 'selected' : ''; ?>>
                <?php echo $cat['nome']; ?>
            </option>
        <?php } ?>
    </select><br><br>
    <button type ="submit"> Salvar Alterações</button>
</form>
