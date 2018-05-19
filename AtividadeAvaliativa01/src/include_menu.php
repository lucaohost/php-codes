<?php
    include ("./include_menu_autenticacao.php");
    require_once("./Sessao.php");
    $sessao = Sessao::getInstance();
    $autenticacao = $sessao->recuperar("AUTENTICACAO");
    $acessos = $autenticacao->getPermissoes();
    echo "<a href='./pagina_edicao_perfil'>MEU PERFIL</a> | ";
    echo "<a href='./index.php'>HOME</a> | ";
    if($acessos[0] == 1){
        echo "<a href='./pagina_produtos.php'>PRODUTOS</a> | ";
    }
    if($acessos[1] == 1){
        echo "<a href='./pagina_cadastro_produto.php'>CADASTRAR PRODUTOS</a> | ";
    }
    if($acessos[2] == 1){
        echo "<a href='./pagina_pesquisar_produto.php'>PESQUISAR PRODUTOS | </a>";
    }
    if($acessos[3] == 1){
        echo "<a href='./pagina_pessoas.php'>PESSSOAS</a> | ";
    }
    if($acessos[4] == 1){
        echo "<a href='./pagina_cadastro_pessoa.php'>CADASTRAR PESSOAS</a> | ";
    }
    if($acessos[5] == 1){
        echo "<a href='./pagina_pesquisar_pessoa.php'>PESQUISAR PESSOA</a> | "; 
    }
    if($acessos[6] == 1){
        echo "<a href='./pagina_usuarios.php'>USUÁRIOS</a>"; 
    }
    if (isset($autenticacao)){
        echo " | <a href='pagina_sair.php'>Sair</a>";
    }
?>