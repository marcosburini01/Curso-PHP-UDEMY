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

class Programador extends Pessoa{

	public function verDados(){

		echo get_class($this). "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

$ver = new Programador();

//echo $ver->nome . "<br>";

$ver->verDados();

?>