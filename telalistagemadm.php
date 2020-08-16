<?php 
session_start();

			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
			{
			  unset($_SESSION['usuario']);
			  unset($_SESSION['senha']);
			  header('location:index.html');
			  }
			 			$logado = $_SESSION['usuario'];
				
						
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISRG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos/global.css">
	<link rel="stylesheet" type="text/css" href="estilos/abertura.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
	 <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  
</head>
<body>
<br><br>
<div id="header">
	<h1 id="logo">CONVÊNIADOS IIPM</h1>
</div>

	<div class="navbar navbar navbar-dark navbar-fixed-top" style="background-color: #e3f2fd;" >
	
 
    <div class="container-fluid">
 
        <!-- Menu hamburger Inicio -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#exemplo-navbar-collapse" aria-expanded="false">
 
                <span class="sr-only">Navegacao</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
 
            </button>
 
            <!-- Título Direita do menu-->
            <img src="estilos/logo.png" width="50px" style="padding-left: 5px">
 
        </div>
        <!-- Menu hamburger Fim -->
         
        <div class="collapse navbar-collapse" id="exemplo-navbar-collapse">
 
            <!-- Links Inicio -->
            <ul class="nav navbar-nav navbar-left">
 
                <!-- Menu dropdown Inicio -->
                
                <!-- Menu dropdown Fim -->
 
                <li><a href="aberturaadm.php">INICIO</a> 
				<li><a href="telacadastroadm.php">CADASTRO</a> 
                <li><a href="telalistagemadm.php">LISTAR</a></li>
				<li><a href="">PESQUISAR</a></li>
                <li><a href="formpesquisapdfadm.php">RELATÓRIO</a></li>
                            
 
            </ul>
            <!-- Links Fim -->
 
           
 
            </div>
            <!-- Caixa de Pesquisa Fim -->
 
        </div>
    </div>
 
</div><br><br><br>

<div id="main">
	
	<a href="listagemadm.php"><img src="images/listarposto.png"></a>
	<a href=""><img src="images/listarchefes.png"></a>
	<a href=""><img src="images/listarprefeito.png"></a>
	<a href=""><img src="images/listarconvenio.png"></a>
	
	
	</div>



<script type="text/javascript">
	
	const user = 'sande'
const userLogado = document.getElementById('user');
		
	(function logado(){
		


		userLogado.innerHTML = `<h3 id="user">Usuário: ${user}</h3>`
	})();
	
	



</script>
<script type="text/javascript">
	
function voltar() {

    if (confirm("Deseja realmente sair do programa?")) {
        location.href="abertura.php";
    } else {
        return false;
    }
}


function pergunta() {

    if (confirm("Deseja realmente sair do programa?")) {
        location.href="index.html";
    } else {
        return false;
    }
}

</script>


</body>
</html>