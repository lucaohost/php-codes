<?php
class Autenticacao{
    private $nome;
    private $hora;
    public function Autenticacao($nome, $hora){
        $this->nome = $nome;
        $this->hora = $hora;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getHora(){
        return $this->hora;
    }
}
?>