<?php
    require_once('../Model/Pessoa.class.php');
    require_once('Util.Exporter.class.php');
    
    class ExportJson extends Export{
        
        //Override
        function exportContatos(){
            require('../Data/Contatos.php');
            $pessoas = array ();
            foreach($contatos as $key =>$nome){
                $pessoas [] = new Pessoa($nome,$key);
            }
            $name = '../Data/Contatos.json';
            file_put_contents($name, json_encode($pessoas,JSON_UNESCAPED_UNICODE,JSON_PRETTY_PRINT));
            //echo para virar result no ajax e mandar por post pra deletar o arquivo depos de baixado
            echo $name;
        }    
    }
    

