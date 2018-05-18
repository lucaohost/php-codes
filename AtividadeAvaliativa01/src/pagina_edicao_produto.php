<?php
    /* Página de interface com o usuário responsável por 
    editar os dados referentes ao cadastro do produto:
    */
    include_once("./include_menu.php");
    if(isset($_GET['error']) && $_GET['error'] == "codigoInvalido"){
        echo "<h2>" . $_GET['numero_registro'] . " é um Código Inválido</h2><br>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Edição de Produto</title>
</head>
<body>
    <?php
    //Se for a primeira vez a editar, ele exibe o nome normalmente. Caso tiver voltado de erro,
    //ele pega a descricaoAntiga e o codigoAntigo que são retornardos, e joga na tela diferente.
        if(isset($_GET['codigoAntigo']) && isset($_GET['descricaoAntiga'])){
            echo "<h1>Atualize os dados do produto " . $_GET['descricaoAntiga'] . " - " .
             $_GET['codigoAntigo'] . "</h1>";
        }else{
            echo "<h1>Atualize os dados do produto " . $_GET['descricao'] . " - " . $_GET['numero_registro']. "</h1>";
        }
    ?>
    <form action='pagina_editar_produto.php' method='post'>
        <!-- Se for a primeira vez, ele assume como codigo antigo, o que está vindo da tela de produto.
        Caso tiver voltando de erro da pagina_editar_produto, ele assume como antigo, o primeiro de todos.
        Isso se faz necessário, pois a busca do produto é feito a partir do código. -->
        <?php
            if(isset($_GET['codigoAntigo'])){
                echo "<input type='hidden' name='codigo_antigo' value='" . $_GET['codigoAntigo'] ."'>";
            }else{
                echo "<input type='hidden' name='codigo_antigo' value='" . $_GET['numero_registro'] ."'>";
            }
        ?>       
        <input type='hidden' name='descricao_antiga' value="<?= $_GET['descricao']?>">
        <label> Número do Registro
            <input type='text' name='numero_registro' value="<?= $_GET['numero_registro']?>">
        </label>
        <label> Descrição
            <input type='text' name='descricao' value="<?=$_GET['descricao']?>">
        </label>
        <input type='submit' value='Atualizar'>
    </form>    
</body>
</html>    