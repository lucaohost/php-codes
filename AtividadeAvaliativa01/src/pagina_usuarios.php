<?php
    /* Página de interface com o usuário responsável por 
    exibir todos os produtos:
    */
    include_once("./include_menu.php");
    require_once("RepositorioDeUsuarios.php");
    echo "<h1>Usuarios</h1>";
    $rep = new RepositorioDeUsuarios();
    $usuarios = $rep->buscarTodos();
    if (isset($usuarios)){
    foreach ($usuarios as $usuario) {
        $nome = $usuario->getNome();
        $login = $usuario->getIdUsuario();
        $acessos = $usuario->getAcessos();
        echo("
            $nome - $login - $acessos  
            <button><a href='#'>Editar</a></button>
            <button><a href='#'>Excluir</a></button><br><br>
        ");
    }
}
?>


