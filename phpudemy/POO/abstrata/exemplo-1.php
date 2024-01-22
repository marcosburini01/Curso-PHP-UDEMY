 <?php  

interface Veiculo{

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);

}

// ela qnd implementada obriga que a classe tenha determinados metodos e encapsulamentos.


abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		
		echo "O veiculo chegou a ". $velocidade ." km/h!";
	}

	public function frear($velocidade){

	}

	public function trocarMarcha($marcha){

	}
}

class DelRey extends Automovel{

	public function empurrar(){

	}

}

$carro = new DelRey();

$carro->acelerar(200);


?>