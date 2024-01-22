<?php  

$qualASuaIdade = 124;

$idadeCrianca = 12;
$idadeMaior = 18;
$idademelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

	echo "Idade de criança.";

} elseif($qualASuaIdade < $idadeMaior){

	echo "Adolescente.";

} elseif ($qualASuaIdade < $idademelhor) {
	echo "Adulto";
} else{

	echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>