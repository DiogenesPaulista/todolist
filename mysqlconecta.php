<?php

// Variaveis para conexao no banco
$hostname = "localhost";
$username = "root";
$password = "";
$database = "todelist";

//String Conexão mysql
$conexao = mysqli_connect($hostname, $username, $password, $database) or die ("Erro na conexão do banco de dados.");

//Seleciona o banco de dados
mysqli_select_db($conexao,$database) or die('Erro ao conectar ao banco de dados');

?>