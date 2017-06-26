<?php session_start(); 
include("mysqlconecta.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `usuario` ( `nome`, `senha`) VALUES";
$sql .= "('". $login ."', '". $senha ."')";

	mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
	mysqli_close($conexao);
	header('location:index.html');
?>