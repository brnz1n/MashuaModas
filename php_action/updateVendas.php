<?php 
//Se~são
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editarVendas']));
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$valorVenda = mysqli_escape_string($connect, $_POST['valorVenda']);
	$id = mysqli_escape_string($connect, $_POST['id']);


	$sql = "UPDATE vendas SET nome = '$nome', quantidade = '$quantidade', valorVenda = '$valorVenda' WHERE id = '$id' ";

	if (mysqli_query($connect, $sql)) {
 		echo'Atualizado com Sucesso!';
 	}else{
 		echo'Erro ao Atualiza!';
 	}
 	?>
<meta http-equiv="refresh" content="0; ../vendas.php"/>
