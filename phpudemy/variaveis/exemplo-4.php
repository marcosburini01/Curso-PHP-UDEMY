<?php  

$nome = "marcos";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "joao";
	echo "<br>".$nome;

}

teste();

teste2();
?>