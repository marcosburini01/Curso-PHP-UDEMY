<?php  
//transforma array em json
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => 25
));


array_push($pessoas, array(
	'nome' => 'marcos',
	'idade' => 18
));

echo json_encode($pessoas);

?>