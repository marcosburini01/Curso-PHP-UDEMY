<?php  

$a = 10;
// & passagem de valor por referencia, ou seja, o que acontece na funcao MUDA no que foi apontado
function trocaValor(&$b){

	$b += 50;

	return $b;
}

echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;

?>