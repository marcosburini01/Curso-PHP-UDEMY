<?php  

class Documento{

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($n){

		$this->numero = $n;
	}
}

class Cpf extends Documento{

	public function validar():bool
	{
		$numCPF = $this->getNumero();
		//validação cpf
		return true;
	}


}

$doc = new Cpf();

$doc->setNumero("13404239917");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();



?>