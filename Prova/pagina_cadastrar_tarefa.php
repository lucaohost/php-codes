<?php
    include("./include_menu_autenticacao.php");
    require_once("RepositorioDeTarefas.php");
    require_once('Tarefa.php');

    if (isset($_POST["descricao"]))
    {
        $rep = new RepositorioDeTarefas();
        $descricao = $_POST["descricao"];

        $tarefa = new Tarefa();
        $tarefa->descricao = $descricao;
        $rep->adicionar($tarefa);
        
        header('Location: ./index.php');
    }
?>
