<?php  

function soma(float ...$valores):float{

	return array_sum($valores);

}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(10,12);
echo "<br>";
echo soma(1.5,3.2);

?>