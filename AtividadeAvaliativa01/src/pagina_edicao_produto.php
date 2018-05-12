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
    <title>Edição de Produto</title>
</head>
<body>
    <h1>Atualize os dados do produto <?$nome - $codigo ?></h1>
    <form action='pagina_editar_produto.php' method='post'>
        <input type='hidden' name='codigo_antigo' value="<?= $_GET['numero_registro']?>">
        <label> Número do Registro
            <input type='text' name='numero_registro' value="<?= $_GET['numero_registro']?>">
        </label>
        <label> Descrição
            <input type='text' name='descricao' value="<?=$_GET['descricao']?>">
        </label>
        <input type='submit' value='Atualizar'>
    </form>    
</body>
</html>    