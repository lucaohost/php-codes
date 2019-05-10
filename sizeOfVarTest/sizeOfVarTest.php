<?php
$array = [];
ini_set("memory_limit", "-1");
for ($i = 0;$i < 1000000;$i++) {
    $obj = new stdClass();
    $obj->name = "Lucas";
    $obj->age = 21;
    $array[] = $obj;
}
echo memory_get_usage();
file_put_contents("/media/lucas/Windows/Downloads/Mega/oi.txt", json_encode($array));
unset($array);
$array = json_decode(file_get_contents("/media/lucas/Windows/Downloads/Mega/oi.txt"));
echo $array[0]->name;
echo "<br>";
echo memory_get_usage();
