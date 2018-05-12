<?php
    /* Página de interface com o usuário responsável por 
    editar os dados referentes ao cadastro do produto:
    */
    include_once("./include_menu.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exclusão de Produto</title>
</head>
<body>
    <h1>Deseja mesmo excluir o produto <?=$_GET['descricao']?> - <?=  $_GET['numero_registro']?>?</h1>
    <form action='pagina_excluir_produto.php' method='post'>
        <input type='hidden' name='numero_registro' value="<?= $_GET['numero_registro']?>">
        <input type='submit' value='Excluir' name='excluir'>
        <input type='submit' value='Voltar' name='voltar'>
    </form>    
</body>
</html>    