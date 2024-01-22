<?php  

$nome = "joao rangel";

//funcao de uppercase, converter para letra maiuscula.
$nome = strtoupper($nome);

echo $nome;

echo "<br>";
//funcao de lower, converter para letra minuscula
$nome = strtolower($nome);

echo $nome;

echo "<br>";

//Converter primeira letra para letra maiuscula
echo ucwords($nome);

?>