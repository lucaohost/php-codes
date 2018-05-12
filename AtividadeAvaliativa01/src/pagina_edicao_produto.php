<?php
    /* Página de interface com o usuário responsável por 
    editar os dados referentes ao cadastro do produto:
    */
    include_once("./include_menu.php");
    $nome = $_POST['descricao'];
    $codigo = $_POST['numero_registro'];
    echo "
    <h1>Atualize os dados do produto $nome - $codigo </h1>
    <form action='pagina_cadastrar_produto.php' method='post'>
        <label> Número do Registro
            <input type='text' name='numero_registro' value='$codigo'>
        </label>
        <label> Descrição
            <input type='text' name='descricao' value='$nome'>
        </label>
        <input type='submit' value='Atualizar'>
    </form>
    "
?>