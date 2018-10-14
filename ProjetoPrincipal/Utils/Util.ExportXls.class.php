<?php
    require_once('../Model/Pessoa.class.php');
    require_once('Util.Exporter.class.php');

    class ExportXls extends Export{

        //Override
        function exportContatos(){
            require('../Data/Contatos.php');
            $pessoas = array ();
            foreach($contatos as $key =>$nome){
                $pessoas [] = new Pessoa($nome,$key);
            }
            $conteudoExportado = "Pessoas Exportadas:"  ."\n"."Código;Nome\n";
            foreach($pessoas as $obj){
                $conteudoExportado .= $obj->codigo . "; " . $obj->nome . "\n";
            }
            $name = '../Data/Contatos.csv';
            file_put_contents($name,$conteudoExportado);
            echo $name;
        }
    }