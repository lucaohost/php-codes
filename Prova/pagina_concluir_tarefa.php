<?php
    include("./include_menu_autenticacao.php");
    require_once("RepositorioDeTarefas.php");
    if(isset($_GET['descricao'])){
            $descricao = $_GET["descricao"];
            $rep = new RepositorioDeTarefas();
            $rep->concluir($descricao);
            header('Location: ./index.php');
    }
?>
