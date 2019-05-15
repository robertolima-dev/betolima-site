<?php

echo '<pre>';
print_r($_POST);
echo '<pre/>';

echo '<pre>';
print_r($_FILES);
echo '<pre/>';

$_POST['titulo'];
$_POST['titulo_url'];
$_POST['tipo'];
$_POST['medida'];
$_POST['valor'];
$_POST['status_venda'];
$_POST['status'];


if(md5($_POST['password']) != 'db8d82002a2e1c4739db6e80490ee7ac') {
	header('location: index?upload=error');
} else {

	include '../../../betolimaOff/conexao.php';

	$_FILES['upload_file']['name'];
	$_FILES['upload_file']['type'];
	$_FILES['upload_file']['tmp_name'];
	$_FILES['upload_file']['error'];
	$_FILES['upload_file']['size'];

	$maxSize = $_POST['MAX_FILE_SIZE'];

	$imgObra = $_FILES['upload_file'];

	$extension = strrchr($imgObra['name'], '.');

	$nameImg = 'OBRA-'.$_POST['titulo_url'].$extension;
	print_r($nameImg);

	$tmpFile = $imgObra['tmp_name'];

	$file = basename($imgObra['name']);

	$dir = '../../upload';

	$moved = move_uploaded_file($tmpFile, $dir."/".$nameImg);


	if($moved == 1) {

		$nome_img = $nameImg;

		$query="
		INSERT INTO 
		tb_obra
		(nome_img, titulo, titulo_url, tipo, medida, valor, status_venda, status)
		VALUES 
		(:nome_img, :titulo, :titulo_url, :tipo, :medida, :valor, :status_venda, :status)
		";

		$stmt = $conexao->prepare($query);

		$stmt->bindValue(':nome_img', $nome_img, PDO::PARAM_STR);
		$stmt->bindValue(':titulo', $_POST['titulo'], PDO::PARAM_STR);
		$stmt->bindValue(':titulo_url', $_POST['titulo_url'], PDO::PARAM_STR);
		$stmt->bindValue(':tipo', $_POST['tipo'], PDO::PARAM_STR);
		$stmt->bindValue(':medida', $_POST['medida'], PDO::PARAM_STR);
		$stmt->bindValue(':valor', $_POST['valor'], PDO::PARAM_STR);
		$stmt->bindValue(':status_venda', $_POST['status_venda'], PDO::PARAM_INT);
		$stmt->bindValue(':status', $_POST['status'], PDO::PARAM_INT);

		$stmt->execute();

		$error = $stmt->errorInfo();

		print_r($error);
	}

}
