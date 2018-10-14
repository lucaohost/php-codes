<?php
    require('Pessoa.class.php');
    include('nomes.php');
    $pessoas = array ();
    foreach($nomes as $key =>$nome){
        $pessoas [] = new Pessoa($nome,$key);
    }
    $conteudoExportado = "Pessoas Exportadas:<br>";
    foreach($pessoas as $obj){
        $conteudoExportado .= $obj->codigo . "; " . $obj->nome . ";<br>";
    }
    echo $conteudoExportado;
?>