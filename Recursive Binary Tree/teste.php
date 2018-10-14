<?php
require('listaEmArvore.php');
 
$copa = new Elemento(3);
$arvore = new ListaArvore($copa);
$elemento = new Elemento(8);
$arvore->adicionaNaArvore($elemento);
$elementoDois = new Elemento(1);
$arvore->adicionaNaArvore($elementoDois);
$elementoTres = new Elemento(10);
$arvore->adicionaNaArvore($elementoTres);
$elementoTres = new Elemento(7);
$arvore->adicionaNaArvore($elementoTres);
var_dump(ListaArvore::$copa);
echo ListaArvore::$copa->elementoMaior->elementoMenor->valor;

?>
