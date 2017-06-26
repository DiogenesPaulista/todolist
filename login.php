<?PHP

// Variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];


include "mysqlconecta.php";

//Query e comando SQL de verificação de autenticação
$sql = "SELECT `nome`, `senha` FROM `usuario` WHERE (`nome` = '".$login ."') AND (`senha` = '". $senha ."')";
$query = mysqli_query($conexao,$sql);

//Caso consiga logar cria a sessão
if(mysqli_num_rows($query) > 0) {
	// session_start inicia a sessão
	session_start();
	
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	
	//Redireciona para a página de autenticação
	header('location:principal.php');
	}
	
//Caso contrário redireciona para a página de autenticação
else {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);

	//Redireciona para a página de autenticação
	header('location:index.html');
}
?>
