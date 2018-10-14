<?php
include("./include_menu_autenticacao.php");
?>
<h1>Insira uma descrição para a tarefa</h1>
<form action="pagina_cadastrar_tarefa.php" method="post">
    <label> Descrição
        <input type="text" name="descricao">
    </label>
    <input type="submit" value="Cadastrar">
</form>