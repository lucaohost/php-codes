<?php
    include("./include_menu_autenticacao.php");
    require_once("RepositorioDeTarefas.php");
    echo "<p align='right'><button align='right'><a href='pagina_sair.php'>Sair</a></button></p>";
    echo "<h1 align='center'>Minhas Tarefas</h1>";
    $rep = new RepositorioDeTarefas();
    echo("<button><a href='pagina_cadastro_tarefa.php'>Incluir Tarefa</a></button><br><br>");
    $tarefas = $rep->buscarTodos();
    if (isset($tarefas)){
        echo ("
            <table border='1' align='center' width='30%'>
            <tr><th>Descrição</th><th>Opções</th></tr>
        ");    
        foreach ($tarefas as $tarefa) {
            echo("
            <tr>
                <td align='center'>
                    <b>$tarefa->descricao
                </td>
                <td align='center'>
                    <button>
                        <a href='pagina_concluir_tarefa.php?descricao=$tarefa->descricao'>Concluir</a>
                    </button>
                </td>
            </tr>
            ");
        }
        echo "</table>";
}
?>


