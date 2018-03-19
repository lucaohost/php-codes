<?php
    require_once('../Model/Element.class.php');
    require_once('../Model/Stack.class.php');
    
    public function addIntoStack(c, $referenceElement = Stack::$rootElement){
        if (empty(Stack::$rootElement)){
            Stack::$rootElement = $element; 
            return;    
        }
        if(empty($referenceElement->getNexPosition())){
            $referenceElement->setNextElement($element);
        }else{
            addIntoStack($element,$referenceElement->getNexPosition());
        }
    }

    public function removeFromStack(){
        $newRoot = Stack::$rootElement->getNextPostion();
        unset($GLOBALS['$rootElement']);
        Stack::$rootElement = $newRoot; 
    }
?>