<?php  

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => 25
));


array_push($pessoas, array(
	'nome' => 'marcos',
	'idade' => 18
));

print_r($pessoas[0]['nome']);

?>