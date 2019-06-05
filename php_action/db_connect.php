<?php 
$servidor = 'localhost';
$usuario = 'brn';
$senha = 'b1n2d3o6';
$dbname = 'produto';

//Criando a conexão
$connect = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) {
	echo "Erro na Conexão";
}


/*
$servidor = 'sql10.freemysqlhosting.net';
$usuario = 'sql10294401';
$senha = 'DnH5uhL8SZ';
$dbname = 'sql10294401';*/


