<?php
$conexao = mysqli_connect('192.168.100.20', 'loja', 'ifrn') or die(mysqli_connect_error($conexao));
mysqli_select_db($conexao, 'loja') or die(mysqli_error($conexao));
?>
