<?php  

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Marcos Burini");
$cad->setEmail("marcosburini14@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
?>