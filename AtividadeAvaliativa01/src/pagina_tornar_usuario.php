<?php
    /* Página responsável por orquestrar o comando de editars o produto:
        1. buscar os dados do POST;
        2. criar o produto com base nos dados recebido;
        3. adicionar o produto no repositório;
    */
    require_once("RepositorioDePessoas.php");
    require_once("RepositorioDeUsuarios.php");
    require_once("Usuario.php");
    if (!empty($_POST["login"]) && !empty($_POST["senha"])){
        $rep = new RepositorioDePessoas();
        $per = new RepositorioDeUsuarios();
        $login = $_POST["login"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $existeLogin = $per->buscarPorIdUsuario($login);
        if($existeLogin){
            header("Location: ./pagina_transformacao_usuario.php?erro=login&login=$login&nome=$nome&email=$email&senha=$senha");
            return;
        }
        $pessoa = $rep->buscarPorNome($nome);
        $pessoa->ehUsuario = true;
        $acessos = "";
        $acessos .= isset($_POST["produtos"]) ? "1":"0"; 
        $acessos .= isset($_POST["cadastrarPr"]) ? "1":"0"; 
        $acessos .= isset($_POST["pesquitarPr"]) ? "1":"0"; 
        $acessos .= isset($_POST["pessoas"]) ? "1":"0"; 
        $acessos .= isset($_POST["cadastrarPe"]) ? "1":"0"; 
        $acessos .= isset($_POST["pesquisarPe"]) ? "1":"0"; 
        $acessos .= isset($_POST["usuarios"]) ? "1":"0"; 
        $user = new Usuario($nome,$login,$senha,$acessos);
        $per->adicionar($user);
        header('Location: ./pagina_usuarios.php');
    }
?>
