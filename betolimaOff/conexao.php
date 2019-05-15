<?php
/*
$dsn = "mysql:host=localhost;dbname=betolima";
$user = "root";
$pass = "";

try {

	$conexao = new PDO($dsn, $user, $pass);

} catch(PDOException $e) {

	echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
}
*/


$dsn = "mysql:host=aplima.mysql.dbaas.com.br;dbname=aplima";
$user = "aplima";
$pass = "DEVroberto1979";

try {

	$conexao = new PDO($dsn, $user, $pass);

} catch(PDOException $e) {

	echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
}

?>
