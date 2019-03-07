<?php
    /* Página de interface com o usuário responsável por realizar a pesquisa dos produtos */
    include_once("./include_menu.php");
    require_once("./RepositorioDePessoas.php");
?>
<h1>Pesquisar Pessoa</h1>

<form action="" method="get">
    <label>Nome
        <input  type="text" 
                name="nome">
    </label>
    <input type="submit" value="Pesquisar">
</form>
<?php

if (isset($_GET["nome"]))    
{
    $nome=$_GET["nome"];

    $rep = new RepositorioDePessoas();
    
    $pessoa = $rep->buscarPorNome($nome);   
    
    if (isset($pessoa))
    {
        echo "$pessoa->nome - $pessoa->email<br>";
    }
    else{
        echo "Pessoa não encontrada.";
    }
}
else{
    echo "Lista vazia.";
}
?>
