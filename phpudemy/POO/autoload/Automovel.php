<?php  

interface Veiculo{

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		
		echo "O veiculo chegou a ". $velocidade ." km/h!";
	}

	public function frear($velocidade){

	}

	public function trocarMarcha($marcha){

	}
}

?>