<?php
session_start();
include_once ("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<link rel="stylesheet" type="text/css" href="estilos/global.css">
	<link rel="stylesheet" type="text/css" href="estilos/listar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="10;URL=listagem.php">
	<script src="https://kit.fontawesome.com/3116ec392f.js" crossorigin="anonymous"></script>
</head>
<body>

<button id="deslogar">Deslogar</button>

<div id="container">	
	<header>
		<div id="logo">
			<button type="button" value="logout" id="deslogar" onclick="pergunta()" href='abertura.php'>Voltar</button>
		<img src="estilos/logo.png" width="50px" style="padding-left: 5px">
		</div>
		
		<div id="btns">
			<a href="cadastrorg.php">Cadastrar <i class="fas fa-plus-square"></i></a>
			<a href="listagem.php">Listar <i class="fas fa-clipboard-list"></i></a>
			<a href="formpesquisa1.php">Pesquisa <i class="fas fa-search"></i></a>
			<a href="formpesquisapdf.php" >Relatório<i class="fas fa-chart-pie"></i></a>

		</div>
			

	</header>

	<h2 id="info">STATUS DE SOLICITAÇÃO DE RG</h2>

	<div id="main">
		
		<table class="tabela">
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






	
	$result_usuario="SELECT id, rg, nome,dtsol, solicitante, usuario, telefone1,telefone2,telefone3, whatsaap, status, lagenda, dagenda, Hagenda, resolvido from  cadastrorg   order by dtsol DESC, nome ASC " ;
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
			echo "<td><a href='form_alteracao.php?id=" . $row_usuario['id'] . "' target='_blank'>ver</a></td>";
		}
		
			
	
	
	
?>
<script type="text/javascript">

function voltar() {

    if (confirm("Deseja realmente voltar a pagina inicial?")) {
        location.href="abertura.php";
    } else {
        return false;
    }
}
</script>
<script type="text/javascript">

function pergunta() {

    if (confirm("Deseja realmente voltar a pagina inicial?")) {
        location.href="index.html";
    } else {
        return false;
    }
}
</script>
	
</body>
</html>