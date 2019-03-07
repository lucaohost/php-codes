<?php
require_once("./Sessao.php");
require_once("./Autenticacao.php");

$sessao = Sessao::getInstance();

if ($sessao->existe("AUTENTICACAO")){
    $autenticacao = $sessao->recuperar("AUTENTICACAO");
    $nome = $autenticacao->getNome();
    //troquei pelo menu Meu Perfil
    // echo "Bem vindo $nome!";
}
else{
    $uri = $_SERVER['REQUEST_URI'];
    header("Location: ./pagina_login.php?uri_origem=$uri");
}
?>