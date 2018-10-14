<?php   
    class Generic{
        public static $value;
        
        static function unsetValue(){
            unset(self::$value);
        }
    }
?>