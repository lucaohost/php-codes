<?php         
class ListaArvore{

    public static $copa;

    public function __construct($elemento) {
        self::$copa = $elemento;
    }

    public function adicionaNaArvore($elemento){
        self::$copa->adicionarElemento($elemento);
    }

    public function buscaNaArvore(){

    }

    public function excluiDaArvore(){

    }
}

class Elemento{
    public $valor;
    public $elementoMaior;
    public $elementoMenor;
    public $elementoAnterior;

    function __construct($valor){
        $this->valor = $valor;
        $this->elementoMaior = null; 
        $this->elementoMenor = null;
        $this->elementoAnterior = null; 
    }   

    function adicionarElemento($elemento){
        if($elemento->valor > $this->valor){
        if(is_null($this->elementoMaior)){
                $this->elementoMaior = $elemento;
                $elemento->elementoAnterior = $this;
                return;
            }
            $this->elementoMaior->adicionarElemento($elemento);
        }else if($elemento->valor < $this->valor){
            if(is_null($this->elementoMenor)){
                $this->elementoMenor = $elemento;
                $elemento->elementoAnterior = $this;
                return;
            }
            $this->elementoMaior->adicionarElemento($this->$elementoMenor);
        }
    }

}

?>