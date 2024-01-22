<?php  

class Pessoa{

	public $nome = "Marcos Burini";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}


}

$ver = new Pessoa();

//echo $ver->nome . "<br>";

$ver->verDados();

?>