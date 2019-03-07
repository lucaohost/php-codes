<?php
    /* Página de interface com o usuário responsável por 
    coletar os dados referentes ao cadastro do produto:
    */
    include_once("./include_menu.php");
    if(isset($_GET['error']) && $_GET['error'] == "codigoInvalido"){
        echo "<h2>Código Inválido</h2><br>";
    }
    $descricao = "";
    $nroRegistro = "";
    if(isset($_GET['nroRegistro'])){
        $nroRegistro =  $_GET['nroRegistro'];
    }
    if(isset($_GET['descricao'])){
        $descricao =  $_GET['descricao'];
    }
?>
<h1>Cadastro de Produto</h1>
<form action="pagina_cadastrar_produto.php" method="post">
    <label> Número do Registro
        <input type="text" name="numero_registro" value="<?=$nroRegistro?>">
    </label>
    <label> Descrição
        <input type="text" name="descricao" value="<?=$descricao?>">
    </label>
    <input type="submit" value="Cadastrar">
</form>