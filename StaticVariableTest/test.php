<?php
// Não dá pra dar unset numa variável static, pq unset é destruir, e uma variável static não pode ser detruída
// O que pode se fazer, é limpar ela
//Generic::$value = null
    require('Generic.class.php');
    //$teste = new Generic(4);
    Generic::$value = 5;
    echo Generic::$value;
    echo '<br>';
    unset($GLOBALS['value']);
    if(is_null(Generic::$value)){
        echo 'deletou com unset Globals';
    }
    echo '<br>';
    //unset(Generic::$value);
    if(is_null(Generic::$value)){
        echo 'deletou com unset e a referencia da variável';
    }
    Generic::unsetValue();

?>