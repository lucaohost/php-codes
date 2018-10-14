<?php
include_once('vendas.empresa.class.php');
 class VendasEmpresa extends VendasEmpresaPai{
	function faturarVenda(){
		parent::faturarVenda();
		echo "<br>";
		$vendaLancarEstoque = true;
		echo("Faturou padrão empresa 1!");
	}
}
?>