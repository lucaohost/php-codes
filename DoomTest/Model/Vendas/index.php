<?php
// pega do banco qual file tenho que dar include
$file = 'vendas.empresa1.class.php';
// $file = 'vendas.empresa2.class.php';
// $file = 'vendas.empresa3.class.php';

//inclui o file
include_once($file);

//dá new no objeto específico da empresa
$vendaObjeto = new VendasEmpresa();
$vendaObjeto->faturarVenda();
?>