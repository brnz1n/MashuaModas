<?php 
//Se~são
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editarEntregas']));
	$id = mysqli_escape_string($connect, $_POST['id']);
	$titulo = mysqli_escape_string($connect, $_POST['titulo']);
	$conteudo = mysqli_escape_string($connect, $_POST['conteudo']);


	$sql = "UPDATE entregas SET titulo = '$titulo', conteudo = '$conteudo' WHERE id = '$id' ";

	if (mysqli_query($connect, $sql)) {
 		echo'Atualizado com Sucesso!';
 	}else{
 		echo'Erro ao Atualiza!';
 	}
 	?>
<meta http-equiv="refresh" content="0; ../entregas.php"/>
