<?php
session_start();
include_once ("conexao.php");
date_default_timezone_set("America/Bahia");
echo date_default_timezone_get();
?>

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>	
function data($data){
    return date("d/m/Y", strtotime($data));
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title>CRUD - Listar</title>		
	</head>
	<body>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #e3f2fd;">
	
 
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
            <a class="navbar-brand" href="#" target="_blank">Título</a>
 
        </div>
        <!-- Menu hamburger Fim -->
         
        <div class="collapse navbar-collapse" id="exemplo-navbar-collapse">
 
            <!-- Links Inicio -->
            <ul class="nav navbar-nav navbar-left">
 
                <!-- Menu dropdown Inicio -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tópicos<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                    </ul>
                </li>
                <!-- Menu dropdown Fim -->
 
                <li><a href="abertura.php">INICIO <span class="sr-only">(current)></span></a></li>
                <li><a href="formpesquisa1.php">LISTAR</a></li>
				<li><a href="formpesquisa1.php">PESQUISAR</a></li>
                <li><a href="#">formpesquisapdf.php</a></li>
                <li><a href="#">SAIR</a></li>                
 
            </ul>
            <!-- Links Fim -->
 
            <!-- Caixa de Pesquisa Inicio -->
            <div class="navbar-right">
 
                <!-- Formulario caixa pesquisa Inicio -->
                <form class="navbar-form" role="search" method="get" action="#">
 
                    <div class="input-group">
 
                        <input type="text" class="form-control" placeholder="Digite sua pesquisa..." name="Filtro" id="Filtro">
                         
                        <!-- Display icone Lupa -->
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
 
                    </div>
 
                </form>
                <!-- Formulario caixa pesquisa Fim -->
 
            </div>
            <!-- Caixa de Pesquisa Fim -->
 
        </div>
    </div>
 
</div><br><br><br>
	<table class="table table-striped">
  <thead>
 <tr>
 <th WIDTH=20>ID</th>
 <th WIDTH=100 >DATA</th>
 <th WIDTH=100 >ÓRGÃO</th>
 <th WIDTH=250>NOME</th>
 <th WIDTH=100>RG</th>
  <th WIDTH=100 >TELEFONE1</th>
  <th WIDTH=100>STATUS</th>
  <th WIDTH=50>LOCAL AGEND.</th>
  <th WIDTH=50>DATA AGEND.</th>
  <th WIDTH=50>HORA AGEND.</th>
  <th WIDTH=50>USUÁRIO.</th>
  <th WIDTH=50>RES..</th>
  <th WIDTH=50>EDITAR</th>
 </tr>
  </thead>
<?php

$nome = $_POST['nome'];
$mae = $_POST['mae'];
$resolvido = $_POST['resolvido'];
$dtinicio = $_POST['dtinicio'];
$dtfim = $_POST['dtfim'];
$status = $_POST['status'];
$lagenda = $_POST['lagenda'];
$dagenda = $_POST['dagenda'];
$usuario = $_POST['usuario'];




	
	
	$result_usuario="SELECT id, rg, nome,dtsol, solicitante, telefone1, telefone2, telefone3, whatsaap, status, lagenda, dagenda, Hagenda, resolvido, usuario from  cadastrorg  
	WHERE nome like '%$nome%' and mae like '%$mae%' and usuario like '%$usuario%' and resolvido like '%$resolvido%' and lagenda like '%$lagenda%' order by dtsol " ;
$resultado_usuario=mysqli_query($conn,$result_usuario);
while ($row_usuario= mysqli_fetch_assoc ($resultado_usuario)){





			echo "<tr>";
			echo "<td>".$row_usuario['id']."</td>";
		  	echo "<td>".$row_usuario['dtsol']."</td>";
			echo "<td>".$row_usuario['solicitante']."</td>";
			echo "<td>".$row_usuario['nome']."</td>";
			echo "<td>".$row_usuario['rg']."</td>";
			echo "<td>".$row_usuario['telefone1']."</td>";
			echo "<td>".$row_usuario['status']."</td>";
			echo "<td>".$row_usuario['lagenda']."</td>";
			echo "<td>".$row_usuario['dagenda']."</td>";
			echo "<td>".$row_usuario['Hagenda']."</td>";
			echo "<td>".$row_usuario['usuario']."</td>";
			echo "<td>".$row_usuario['resolvido']."</td>";
			echo "<td><a href='form_alteracao.php?id=" . $row_usuario['id'] . "'>Editar</a></td>";
		}
		
			
	
	
	
?>
	
</body>
</html>