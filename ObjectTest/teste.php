<?php
    require('Object.class.php');
    $object = new Object("asd");
    $varTest = &$object->value;
    echo $object->value;
    echo "<br>".$varTest;
    $object->value = "das";
    echo "<br>".$object->value;
    echo "<br>".$varTest;
?>