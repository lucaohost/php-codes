<?php
    /* Página de interface com o usuário responsável por 
    exibir todos os produtos:
    */
    include_once("./include_menu.php");
    require_once("RepositorioDePessoas.php");
    echo "<h1>Pessoas</h1>";
    $rep = new RepositorioDePessoas();
    $pessoas = $rep->buscarTodos();
    if (isset($pessoas)){
    foreach ($pessoas as $pessoa) {
        echo "<b>" . $pessoa->nome ."</b>". "-" . $pessoa->email . "<br><br>"; 
    }
}
?>


