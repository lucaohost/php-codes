<?php
    /* Página de interface com o usuário responsável por 
    coletar os dados referentes ao cadastro de pessoa:
    */
    include_once("./include_menu.php");
?>
<h1>Cadastro de Pessoa</h1>
<form action="pagina_cadastrar_pessoa.php" method="post">
    <label> Nome
        <input type="text" name="nome">
    </label>
    <label> E-mail
        <input type="text" name="email">
    </label>
    <input type="submit" value="Cadastrar">
</form>