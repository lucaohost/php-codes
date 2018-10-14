<?php
    class Element {
        private $value;
        private $nextElement;

        public function __construct($value, $nextElement = NULL){
            $this->value = $value;
            $this->nextElement = $nextElement;
        }   

        public function getValue(){
            return $this->value;
        }

        public function getNextElement(){
            return $this->nextElement;
        }
        
        public function setValue($newValue){
            $this->value = $newValue;
        }

        public function setNextElement($newNextElement){
            $this->nextElement = $newNextElement;
        }
    }
?>