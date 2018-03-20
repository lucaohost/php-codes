<?php
    require('Object.class.php');
    $object = new Object("X");
    $string = "X";
    echo "<br>Objeto antes de ser mandado como parametro na função: ".$object->value;
    echo "<br>String antes de ser mandado como parametro na função: ".$string;
    mudaObj($object);
    mudaString($string);
    echo "<br><br>";
    echo "<br>Objeto depois de ser mandado como parametro na função: ".$object->value;
    echo "<br>String depois de ser mandado como parametro na função: ".$string;

    function mudaObj($obj){
        $obj->value =  "Y";
    }

    function mudaString($string){
        $string = "Y";
    }
?>  