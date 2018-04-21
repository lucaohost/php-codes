<?php
    require_once("../Data/Contatos.php");
    class Pessoa{
        public $codigo;
        public $nome;

        function __construct($aNome,$aCodigo){
            $this->nome = $aNome;
            $this->codigo = $aCodigo;
        }

        function getContacts(){
            
        }
    }