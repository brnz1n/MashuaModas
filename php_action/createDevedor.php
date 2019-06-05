<?php 
//Conexão
ob_start();
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrarDevedor']));
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$valorVenda = mysqli_escape_string($connect, $_POST['valorVenda']);
	$data = mysqli_escape_string($connect, $_POST['data']);


	$sql = "INSERT INTO devedores (nome, quantidade, valorVenda, data) 
	VALUES ('$nome', '$quantidade', '$valorVenda', '$data')";

	if (mysqli_query($connect, $sql)){
		echo "Sucesso ao cadastrar";
	}
	else{
		echo "Erro ao cadastrar";
	}
	?>
<meta http-equiv="refresh" content="0; ../devedores.php"/>


	

	
