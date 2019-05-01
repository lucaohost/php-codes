<?php
function cleanNullsOfObject(&$object) {
    foreach ($object as $property => &$value) {
        if (is_object($value)) {
            self::cleanNullsOfObject($value);
            if (empty(get_object_vars($value))) {
                unset($object->$property);
            }
        }
        if(is_array($value) && is_object($value[0])){
            foreach($value as $val){
                self::cleanNullsOfObject($val);
            }
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($object->$property);
        }
    }
}
