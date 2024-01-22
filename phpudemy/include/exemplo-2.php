<?php 

//incluir atribuições de um outro arquivo sem ter que ficar fazendo criações novas

//REQUIRE: obriga que o arquivo exista e que nao haja erros

//INCLUDE: tenta funcionar mesmo que ele nao exista e mesmo que esteja com problemas. 


//include_once "exemplo-1.php";
require_once "exemplo-1.php";


$resultado = somar(10, 25);

echo $resultado;

?>