<?php 
//Conexão
ob_start();
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar']));
	$titulo = mysqli_escape_string($connect, $_POST['titulo']);
	$conteudo = mysqli_escape_string($connect, $_POST['conteudo']);
	


	$sql = "INSERT INTO entregas (titulo, conteudo) VALUES ('$titulo', '$conteudo')";

	if (mysqli_query($connect, $sql)){
		echo "Sucesso ao cadastrar";
	}
	else{
		echo "Erro ao cadastrar";
	}
	?>
<meta http-equiv="refresh" content="0; ../adicionarEntregas.php"/>
