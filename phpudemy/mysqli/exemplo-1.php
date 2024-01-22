<?php  

$conn = new mysqli("localhost","root", "", "dbphp7");

if ($conn->connect_error) {
	echo "Error: ". $conn->connect_error;
}

//$query = "INSERT INTO tb_usuarios (delogin, dessenha) VALUES (?, ?)";

//public mysqli_stmt::prepare(string $query): bool;

$stmt = $conn->stmt_init();

$stmt->prepare("INSERT INTO tb_usuarios (delogin, dessenha) VALUES (?, ?)");

$login = "user";
$pass = "12345";
$stmt->bind_param("ss",$login,$pass);

$stmt->execute();

?>