<?php
class Stack {
    public static $rootElement;

    public function construct($element = NULL){
        self::$rootElement = $element;
    }
}

?>