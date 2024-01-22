<?php  

class Cadastro{

	private $nome;
	private $email;
	private $senha;

	public function getNome():string{

		return $this->nome;
	}

	public function setNome($value){
		$this->nome = $value;
	}

	public function getEmail():string{

		return $this->email;
	}

	public function setEmail($value){
		$this->email = $value;
	}

	public function getSenha():string{

		return $this->senha;
	}

	public function setSenha($value){
		$this->senha = $value;
	}

	public function _toString(){

		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()

		));		
	}


}

?>