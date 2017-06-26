<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8">
<title>MY TO DE LIST</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
</head>

<body>
	<div id="wrapper"> 
			 <div class="navbar navbar-inverse navbar-fixed-top">
				<div class="adjust-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"></button>		
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
                        <a href="lista.php" ><i class="fa fa-desktop "></i>Tarefas</a>
                    </li>
                    <li>
                        <a href="cadastro.php"><i class="fa fa-table "></i>Cadastro</a>  
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Calendario</a> 
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
					<div class="row">
						<div class="col-lg-12 ">
							<div class="alert alert-info">
                             <?php echo  "<strong>Seja bem vindo </strong> ".$_SESSION['login'] ?>
							</div>
                       
						</div>
					
					</div>
                     
                     
            </div>
		</div>
	</div>

</body>
</html>