<?php
    require_once('../Model/Pessoa.class.php');
    class ExportJson{
    
        function exportJsonContatos(){
            require('../Data/Contatos.php');
            $pessoas = array ();
            foreach($contatos as $key =>$nome){
                $pessoas [] = new Pessoa($nome,$key);
            }
            echo nl2br(json_encode($pessoas,JSON_UNESCAPED_UNICODE,JSON_PRETTY_PRINT));
        }    
    }
    

