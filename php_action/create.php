<?php 
//Conexão
ob_start();
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar']));
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$valorCompra = mysqli_escape_string($connect, $_POST['valorCompra']);
	$valorVenda = mysqli_escape_string($connect, $_POST['valorVenda']);


	$sql = "INSERT INTO produtos (nome, quantidade, valorCompra, valorVenda) VALUES ('$nome', '$quantidade', '$valorCompra', '$valorVenda')";

	if (mysqli_query($connect, $sql)){
		echo "Sucesso ao cadastrar";
	}
	else{
		echo "Erro ao cadastrar";
	}
	?>
<meta http-equiv="refresh" content="0; ../adicionar.php"/>


	

	
