<?php  

$empresa = "Hcode";

//faz troca de valores de uma string por parametros ("qual letra a ser trocada", "por qual sera", "$variavelTexto").

$empresa = str_replace("o", "0", $empresa);

$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>