<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MY TO DE LIST</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
	<link href="css/estilo.css" rel="stylesheet" />
</head>

<body>
	<div id="wrapper">
			 <div class="navbar navbar-inverse navbar-fixed-top">
				<div class="adjust-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="img/logo.png" />
						</a>
						
					</div>
				  
					<span class="logout-spn" >
					  <a href="index.html" style="color:#fff;">SAIR</a>  

					</span>
				</div>
			</div>
<div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="#">
                        <img src="img/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="index.html" style="color:#fff;">SAIR</a>  

                </span>
            </div>
        </div>
		
		 <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Tarefas</a>
                    </li>
                   

                    <li>
                        <a href="cadastro.php"><i class="fa fa-table "></i>Cadastro</a>  
                    </li>
                    <li>
                        <a href="calendario.php"><i class="fa fa-edit "></i>Calendario </a> 
                    </li>
                    
                </ul>
            </div>
		</nav>
		
		</div><!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>GERENCIADOR DE TAREFAS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
				
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <?php echo  "<strong>Seja bem vindo </strong> ".$_SESSION['login'] ?>
                        </div>
                       
                    </div>
					
                    </div>
                  
            <!-- /. ROW  --> 
                 <div class="row text-center pad-top">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
					<?php
						$hostname = "localhost";
						$username = "root";
						$password = "";
						$database = "todelist";
					//conecta no banco, seleciona o banco, etc
						$conexao = mysqli_connect($hostname, $username, $password, $database) or die ("Erro na conexão do banco de dados.");
					//Seleciona o banco de dados
						mysqli_select_db($conexao,'todelist') or die('Erro ao conectar ao banco de dados');
						//$sql = "SELECT tarefa, descricao, data FROM tarefas";
						$login = $_SESSION['login'];
						$sql = "SELECT * FROM tarefas WHERE (`nome` = '".$login ."')";
						
						$query = mysqli_query($conexao,$sql);
						if(mysqli_num_rows($query) > 0) 
						{
							$i=1;
						echo "<table>";
						echo "    <tr>";
						echo "        <td>";
						echo "            Concluido";
						echo "        </td>";
						echo "        <td>";
						echo "            Tarefa";
						echo "        </td>";
						echo "        <td>";
						echo "            Descrição";
						echo "        </td>";
						echo "        <td>";
						echo "            Data";
						echo "        </td>";
						echo "    </tr>";
						// Associative array
						
						while($dados=mysqli_fetch_array($query,MYSQLI_ASSOC))
						{	$vetor[] = array();
							$vetor[$i] = $dados['idtarefa'];					
							echo "<tr>";
							echo "   <td>";
							echo 		$dados['idtarefa'];
							echo "   </td>";
							echo "   <td>";
							echo        $dados['tarefa'];
							echo "   </td>";
							echo "   <td>";
							echo        $dados['descricao'];
							echo "   </td>";
							echo "   <td>";
							echo        $dados['data_evento'];
							echo "   </td>";
							echo "<td>";
							?>
									<form action="deleta.php" method="post">
										<input type= "hidden" name="id" id="id" value="<?php $i;?>">
										<button>DELETA</button>
										
									</form>							
							<?PHP
							echo "   </td>";
							echo "</tr>";
							$i++;
						}
						echo "</table>";
						
						/*?><br />
								<form action="deleta.php" method="post">
								<input type= hidden name=id value="id;">
								<button>DELETA</button>
								</form>
						<?php*/
						}							
						else{
						echo "Nenhuma tarefa encontrada";
						}
						// Free result set
						mysqli_free_result($query);
						
						mysqli_close($conexao);
					?>
						                    
                     </div> 
				 </div>
	</div>
</body>
</html>