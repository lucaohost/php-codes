<?php
    /* Página de interface com o usuário responsável por 
    exibir todos os produtos:
    */
    include_once("./include_menu.php");
    require_once("RepositorioDeProdutos.php");
    echo "<h1>Produtos</h1>";
    $rep = new RepositorioDeProdutos();
    $produtos = $rep->buscarTodos();
    if (isset($produtos)){
    foreach ($produtos as $produto) {
        $dataGet = "?numero_registro=$produto->numeroRegistro&descricao=$produto->descricao";
        echo("
            $produto->numeroRegistro - $produto->descricao 
            <button><a href='pagina_edicao_produto.php$dataGet'>Editar</a></button>
            <button><a href='pagina_exclusao_produto.php$dataGet'>Excluir</a></button><br><br>
        ");
    }
}
?>


