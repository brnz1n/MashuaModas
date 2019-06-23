<?php 
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar']));
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$valorCompra = mysqli_escape_string($connect, $_POST['valorCompra']);
	$valorVenda = mysqli_escape_string($connect, $_POST['valorVenda']);
	$id = mysqli_escape_string($connect, $_POST['id']);


	$sql = "UPDATE produtos SET nome = '$nome', quantidade = '$quantidade', valorCompra = '$valorCompra', valorVenda = '$valorVenda' WHERE id = '$id' ";

	if (mysqli_query($connect, $sql)) {
 		echo'Atualizado com Sucesso!';
 	}else{
 		echo'Erro ao Atualiza!';
 	}
 	?>
<meta http-equiv="refresh" content="0; ../index.php"/>
