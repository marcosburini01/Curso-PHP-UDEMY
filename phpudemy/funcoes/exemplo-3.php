<?php  

function ola($texto = "Mundo", $periodo = "Bom dia"){

	return "ola $texto! $periodo<br>";
}

echo ola();
echo ola("","");
echo ola("Marcos","");
echo ola("joao","Boa noite");
//os parametros com obrigacao sempre devem ficar a esquerda.
?>