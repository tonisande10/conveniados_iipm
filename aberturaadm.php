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
</head>
<body>

<div id="header">
	<button type="button" value="logout" id="deslogar" onclick="pergunta()" href='index.html'>Logout</button>

	<h1 id="logo">CONVÊNIADOS IIPM</h1>
</div>

<h3 id="user">Usuário logado: value= "<?php echo $logado; ?>" </h3>

<div id="main">
	
	<a href="telacadastroadm.php"><img src="images/Group5.png"></a>
	<a href="telalistagemadm.php"><img src="images/Group4.png"></a>
	<a href="formpesquisa1adm.php"><img src="images/Group3.png"></a>
	<a href="formpesquisapdfadm.php"><img src="images/Group2.png"></a>
	
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