<?php
    /* Página de interface com o usuário responsável por 
    exibir todos os produtos:
    */
    include_once("./include_menu.php");

    require_once("RepositorioDeProdutos.php");

    echo "<h1>Produtos</h1>";

    $rep = new RepositorioDeProdutos();
    
    $produtos = $rep->buscarTodos();
    if (isset($produtos))
    {
    foreach ($produtos as $produto) {
        echo "
        <form action='pagina_edicao_produto.php' method='post'><input type='hidden' name='numero_registro' value = $produto->numeroRegistro>
        $produto->numeroRegistro - $produto->descricao
        <input type='hidden' name='descricao' value = $produto->descricao >
        <button type='submit'>Editar</button>
        </form>";
    }
}

?>


