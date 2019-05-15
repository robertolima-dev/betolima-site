<?php

date_default_timezone_set('America/Sao_Paulo');

$_POST['nome'];
$_POST['email'];
$_POST['telefone'];
$_POST['assunto'];
$_POST['mensagem'];
$_POST['status'];
$data = date('Y-m-d');

include '../../../betolimaOff/conexao.php';

$query="
INSERT INTO 
tb_contato
(nome, email, telefone, assunto, mensagem, status, data)
VALUES 
(:nome, :email, :telefone, :assunto, :mensagem, :status, :data)
";

$stmt = $conexao->prepare($query);

$stmt->bindValue(':nome', $_POST['nome'], PDO::PARAM_STR);
$stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindValue(':telefone', $_POST['telefone'], PDO::PARAM_STR);
$stmt->bindValue(':assunto', $_POST['assunto'], PDO::PARAM_STR);
$stmt->bindValue(':mensagem', $_POST['mensagem'], PDO::PARAM_STR);
$stmt->bindValue(':status', $_POST['status'], PDO::PARAM_INT);
$stmt->bindValue(':data', $data, PDO::PARAM_STR);

$stmt->execute();

$error = $stmt->errorInfo();

if($error[0] == 0) {
	header('location: ../../contato?contato=sucesso');
} else {
	header('location: ../../contato?contato=erro');
}