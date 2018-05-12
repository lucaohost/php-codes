<?php
    /* Página responsável por orquestrar o comando de cadastrar o produto:
        1. buscar os dados do POST;
        2. criar o produto com base nos dados recebido;
        3. adicionar o produto no repositório;
    */
    require_once("RepositorioDeProdutos.php");
    if (!empty($_POST["numero_registro"]) && !empty($_POST["descricao"]) && !empty($_POST["codigo_antigo"])){
        $codigoAntigo = $_POST["codigo_antigo"];
        $numeroRegistro = $_POST["numero_registro"];
        $descricao = $_POST["descricao"];
        $p = new Produto();
        $p->numeroRegistro = $numeroRegistro;
        $p->descricao = $descricao;
        $rep = new RepositorioDeProdutos();
        $rep->atualizar($p,$codigoAntigo);
        header('Location: ./pagina_produtos.php');
    }
?>
