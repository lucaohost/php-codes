<?php
    /* Página de interface com o usuário responsável por realizar a pesquisa dos produtos */
    include_once("./include_menu.php");
    require_once("./RepositorioDeProdutos.php");
?>
<h1>Pesquisar Produto</h1>

<form action="" method="get">
    <label>Número do registro
        <input  type="text" 
                name="numero_registro">
    </label>
    <input type="submit" value="Pesquisar">
</form>
<?php

if (isset($_GET["numero_registro"]))    
{
    $numeroRegistro=$_GET["numero_registro"];

    $rep = new RepositorioDeProdutos();
    
    $produto = $rep->buscarPorNumeroRegistro($numeroRegistro);   
    
    if (isset($produto))
    {
        echo "$produto->numeroRegistro - $produto->descricao<br>";
    }
    else{
        echo "Produto não encontrado.";
    }
}
else{
    echo "Lista vazia.";
}
?>
