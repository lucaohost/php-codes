<?php
    require_once('../Model/Pessoa.class.php');
    class ExportXls{

        function exportXlsContatos(){
            require('../Data/Contatos.php');
            $pessoas = array ();
            foreach($contatos as $key =>$nome){
                $pessoas [] = new Pessoa($nome,$key);
            }
            $conteudoExportado = "Pessoas Exportadas:<br>";
            foreach($pessoas as $obj){
                $conteudoExportado .= $obj->codigo . "; " . $obj->nome . ";<br>";
            }
            echo $conteudoExportado;
        }
    }
?>