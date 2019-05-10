<?php
$obj = new stdClass();
$obj->name = "Lucas";
$oi[] = $obj;
foreach($oi as $object){
	$$object->name = "Carl Johnson";
}
var_dump($oi);

// conclusion: the $obj in foreach, dindn't need &$$object to modificate
// the $obj in array, because it's a object, and it's auto memory refereced
