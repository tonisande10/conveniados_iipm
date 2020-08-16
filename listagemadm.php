<?php
session_start();
include_once ("conexao1.php");
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

<meta http-equiv="refresh" content="30;URL=listagemadm.php">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

		<title>CRUD - Listar</title>		
	</head>
	<body>
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
                <li><a href="">RELATÓRIO</a></li>
                            
 
            </ul>
            <!-- Links Fim -->
 
           
 
            </div>
            <!-- Caixa de Pesquisa Fim -->
 
        </div>
    </div><br><br>
	<table class="table table-striped">
  <thead>
 <tr>
 <th WIDTH=120>CIDADE</th>
 <th WIDTH=100 >COD_POSTO</th>
 <th WIDTH=150 >CONVENIO</th>
  <th WIDTH=100 >SITUAÇÃO</th>
 <th WIDTH=10>COTA</th>
 <th WIDTH=200>NOME CHEFE</th>
  <th WIDTH=120 >TEL CHEFE</th>
  <th WIDTH=120>TEL POSTO</th>
  <th WIDTH=120>RET. CARTEIRAS</th>
   <th WIDTH=120>ID</th>
 </tr>
  </thead>
 
<?php






	
	$result_usuario="SELECT p.nome_cidade, p.chefe, p.telefonec, l.local, s.situacao, p.telefone_posto, t.tipo_posto, p.idposto, p.cota_mensal, p.codigos1_cod_posto from  postos1 p inner join tipo_posto1 t on (p.id_tipo=t.id_tipo) inner join local_rec1 l on (p.local_recebimento_carteiras = l.idlocal_rec) inner join sit_posto s on (s.idsit=p.situacao)  order by p.codigos1_cod_posto ASC " ;
$resultado_usuario=mysqli_query($conn,$result_usuario);
while ($row_usuario= mysqli_fetch_assoc ($resultado_usuario)){
			
			
		
			
		
	
			
			echo "<tr>";
			echo "<td>".$row_usuario['nome_cidade']."</td>";
			echo "<td>".$row_usuario['codigos1_cod_posto']."</td>";
			echo "<td>".$row_usuario['tipo_posto']."</td>";
				echo "<td>".$row_usuario['situacao']."</td>";
					echo "<td>".$row_usuario['cota_mensal']."</td>";
			echo "<td>".$row_usuario['chefe']."</td>";
					echo "<td>".$row_usuario['telefonec']."</td>";
			echo "<td>".$row_usuario['telefone_posto']."</td>";
				echo "<td>".$row_usuario['local']."</td>";
				echo "<td>".$row_usuario['idposto']."</td>";
			echo "<td><a href='form_alteracaoadm.php?idposto=".$row_usuario['idposto']."' target='_blank'>Editar</a></td>";
		}
		
			
	
	
	
?>
	
</body>
</html>