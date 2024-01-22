<?php  

//$ts = strtotime("2001-09-11");
$ts = strtotime("+ week");

echo date("l, d/m/Y", $ts);

?>