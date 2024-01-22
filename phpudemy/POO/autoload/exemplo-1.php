<?php  

spl_autoload_register(function ($nomeClasse) {
    
	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
});

$carro = new DelRey();
 
echo "<br>";

$carro->acelerar(80);

?>