<?php  

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

// localiza um alvo dentro da string
$q = strpos($frase, $palavra);
//fala o inicio em casas

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

?>