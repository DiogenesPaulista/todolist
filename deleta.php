<?php session_start();

include "mysqlconecta.php";


$id = $_POST['id'];
echo $id;


$sql = "DELETE * FROM `tarefas` WHERE idtarefa ='$id'";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
header('location:lista.php');
?>