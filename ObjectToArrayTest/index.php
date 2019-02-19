<?php
require_once("Casa.php");
$casa = new Casa();
$casa = object_to_array($casa);
print("<pre>".print_r($casa,true)."</pre>");

function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}