<?php
    /* Página responsável por orquestrar o comando de excluir o produto:
        1. buscar os dados do POST;
        2. manda pro repositório, o codigo do produto;
    */
    require_once("RepositorioDeProdutos.php");
    if(isset($_POST['excluir'])){
        if (!empty($_POST["numero_registro"])){
            $numeroRegistroExcluir = $_POST["numero_registro"];
            $rep = new RepositorioDeProdutos();
            $rep->remover($numeroRegistroExcluir);
            header('Location: ./pagina_produtos.php');
        }
    }else{
        header('Location: ./pagina_produtos.php');
    }
?>
