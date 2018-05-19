<?php
    include_once("./include_menu.php");
        if(isset($_GET['erro']) && $_GET['erro'] == 'login'){
            echo "<h2>" . $_GET['login'] . " é um Login já utilizado</h2><br>";
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tornar Usuário</title>
</head>
<body>
    <br><br>
    <h2>Atribua um Login e senha para o novo Usuário</h2>
    <form action='pagina_tornar_usuario.php' method='post'>
        <?php
            //trata se voltar com erro
            if(isset($_GET['login'])){
                echo "<label>Login <input name='login' value='" . $_GET['login'] ."'></label>";
                echo "<label> Senha <input type = password name='senha' value='" . $_GET['senha'] ."'></label>";
                echo "<h3>Acessos</h3>";
            }else{
                echo "<label>Login <input name='login'></label>";
                echo "<label> Senha <input name='senha' type='password'></label>";  
                echo "<h3>Acessos</h3>";
            }
        ?>       
        <input name='nome' type="hidden" value="<?=$_GET['nome']?>">
        <input name='email' type="hidden" value="<?=$_GET['email']?>">
        <label><input name='produtos' type='checkbox' >Produtos</label><br><br>
        <label><input name='cadastrarPr' value='1' type='checkbox' >Cadastrar Produto</label><br><br>
        <label><input name='pesquisarPr' value='1' type='checkbox' >Pesquiar Produto</label><br><br>
        <label><input name='pessoas' value='1' type='checkbox'>Pessoas</label><br><br>
        <label><input name='cadastrarPe' value='1' type='checkbox' >Cadastrar Pessoas</label><br><br>
        <label><input name='pesquisarPe' value='1' type='checkbox' >Pesquisar Pessoas</label><br><br>
        <label><input name='usuarios' value='1' type='checkbox' >Usuários</label><br><br>
        <input type='submit' value='Tornar Usuário'>
    </form>    
</body>
</html>    