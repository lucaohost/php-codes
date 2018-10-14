<?php
    require_once('../Model/Element.class.php');
    require_once('../Model/Stack.class.php');
    
    class ServiceStack{
        public function addIntoStack($element, $referenciedElement = null){
            if (is_null(Stack::$rootElement)){
                Stack::$rootElement = $element; 
                return;    
            }
            $referenciedElement = is_null($referenciedElement) ? Stack::$rootElement : $referenciedElement;
            if(is_null($referenciedElement->getNextElement())){
                $referenciedElement->setNextElement($element);
            }else{
                ServiceStack::addIntoStack($element,$referenciedElement->getNextElement());
            }
        }
    
        public function removeFromStack(){
            $newRoot = Stack::$rootElement->getNextElement();
            Stack::$rootElement = null;
            Stack::$rootElement = $newRoot; 
        }
    }
?>