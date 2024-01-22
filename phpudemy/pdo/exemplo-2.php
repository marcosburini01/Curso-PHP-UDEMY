<?php  

$conn = new PDO("sqlsrv:Server=localhost\EXPRESS;ConnectionPooling=0;Database=dbphp7;", "sa", "root");


$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(?,?)");

$login = "jabulane";
$senha = "arroba@";

$stmt->bindParam(1, $login);
$stmt->bindParam(2, $senha);

$stmt->execute();

// $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

// $stmt->execute();

// $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

// foreach ($results as $row) {
// 	foreach ($row as $key => $value) {
// 		echo "<strong>".$key.": </strong>".$value."<br>";
// 	}
// 	echo "===================================<br>";
// }

//var_dump($results);

//sqlsrv:Server=localhost;Database=teste;
?>