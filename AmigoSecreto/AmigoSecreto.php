<?php

$amigos = []
$numAmigos = count($array);
shuffle($amigos);
shuffle($amigos);
shuffle($amigos);
for ($i = 0; $i < $numAmigos; $i++) {
    if($i +1  === $numAmigos){
        echo $amigos[$i] . " pegou " . $amigos[0]  . "<br>";
        break;
    }else{
        echo $amigos[$i] . " pegou " . $amigos[$i+1] . "<br>";
    }
}
