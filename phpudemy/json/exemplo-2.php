<?php  
//transforma json em array.
$json = '[{"nome":"Joao","idade":25},{"nome":"marcos","idade":18}]';

$data = json_decode($json, true);

var_dump($data);

?>