<?php
    require_once("RepositorioDePessoas.php");
    require_once('Pessoa.php');

    if (isset($_POST["nome"]) && isset($_POST["email"]) )
    {
        $rep = new RepositorioDePessoas();
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $p = new Pessoa();
        $p->nome = $nome;
        $p->email = $email;
        // A pessoa é criada por padrão só como pessoa
        $p->ehUsuario = false;
        $rep->adicionar($p);
        
        header('Location: ./pagina_pessoas.php');
    }
?>
