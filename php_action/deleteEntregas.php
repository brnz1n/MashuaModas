<?php 
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-deletar']));
 $id = mysqli_escape_string($connect, $_POST['id']);

 $sql = "DELETE FROM entregas WHERE id = '$id'";

 if (mysqli_query($connect, $sql)) {
 	echo'Deletado com Sucesso!';
 }else{
 	echo'Erro ao Deleta!';
 }
 ?>
<meta http-equiv="refresh" content="0; ../entregas.php"/>
