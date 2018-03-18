<?php
    require_once('../Model/Element.class.php');
    require_once('../Model/Stack.class.php');
    
    public function addIntoStack($element){
        if (is_empty(Stack::$rootElement)){ Stack::$rootElement = $element; }
        //fazer recusão aqui
    }

    public function removeFromStack(){
        
    }
?>