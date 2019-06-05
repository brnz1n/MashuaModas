<?php 
//Se~são
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editarDevedor']));
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$valorVenda = mysqli_escape_string($connect, $_POST['valorVenda']);
	$data = mysqli_escape_string($connect, $_POST['data']);
	$id = mysqli_escape_string($connect, $_POST['id']);


	$sql = "UPDATE devedores SET nome = '$nome', quantidade = '$quantidade', valorVenda = '$valorVenda', data = '$data' WHERE id = '$id' ";

	if (mysqli_query($connect, $sql)) {
 		echo'Atualizado com Sucesso!';
 	}else{
 		echo'Erro ao Atualiza!';
 	}
 	?>
<meta http-equiv="refresh" content="0; ../devedores.php"/>
