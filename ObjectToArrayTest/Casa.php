<?php

require_once("Banheiro.php");
require_once("Vaso.php");
require_once("Pia.php");
require_once("Televisao.php");

class Casa{
	public $proprietario;
	public $tamanho;
	public $banheiro;
	public $televisao;

	public function Casa(){
		$this->proprietario = "Lucas";
		$this->tamanho = "50X50";
		$this->banheiro = new Banheiro(); 
		$this->banheiro->tamanho = "5X5";
		$this->banheiro->vaso = new Vaso();
		$this->banheiro->vaso->marca = "Siadelvi"; 
		$this->banheiro->vaso->cor = "Branco";
		$this->banheiro->pia = new Pia();
		$this->banheiro->pia->marca = "Meber";
		$this->banheiro->pia->formato = "Oval";
		$this->televisao = new Televisao();
		$this->televisao->polegadas = 55;
		$this->televisao->marca = "Samsung";
	}

	public function ToArray(){

	}
}