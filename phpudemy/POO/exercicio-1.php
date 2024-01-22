<?php  

class Pessoa {

	public $nome; //atributo
	public $v1;
	public $v2;

	public function somar(){

		return $this->v1 + $this->v2;
	}

	public function falar(){//método

		return "O meu nome é ". $this->nome;

	}
}

$marcos = new Pessoa();

$marcos->nome = "Marcos Burini";

echo $marcos->falar();
echo "<br>";

$marcos->v1 = 5;
$marcos->v2 = 7;

echo $marcos->somar();

?>