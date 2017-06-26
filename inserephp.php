<?php session_start(); 
include("mysqlconecta.php");

$tarefa = $_POST['tarefa'];
$descricao = $_POST['descricao'];
$prioridade = $_POST['prioridade'];
$data = $_POST['data'];

$usuario = $_SESSION['login'];


$sql = "INSERT INTO `tarefas` ( `tarefa`, `descricao`, `prioridade`, `data_evento`, `nome`) VALUES";
$sql .= "('". $tarefa ."', '". $descricao ."', '". $prioridade ."', '". $data ."', '". $usuario ."')";

	mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
	mysqli_close($conexao);
	header('location:cadastro.php');
	
?>