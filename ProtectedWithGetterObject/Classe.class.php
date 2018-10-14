<?php
    class Classe{
        public $obj;

        function __construct($objo){
            echo 'chegou no construtor';
            echo '<br>';
            $this->obj = $objo;
            echo $objo;
            echo '<br>';
        }
        
        function getObj(){
            //    return $obj->$value;
            echo 'chegou no getter';
            echo '<br>';
            echo $this->obj;
            return $this->$obj;
        }
    }
?>