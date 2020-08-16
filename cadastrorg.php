<?php 
session_start();


			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
			{
			  unset($_SESSION['usuario']);
			  unset($_SESSION['senha']);
			  header('location:index.html');
			  }
			 			$logado = $_SESSION['usuario'];
include_once ("conexao.php");						
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de RG</title>
	<link rel="stylesheet" type="text/css" href="estilos/global.css">
	<link rel="stylesheet" type="text/css" href="estilos/cadastrorg.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/3116ec392f.js" crossorigin="anonymous"></script>
	<!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Tema opcional -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
</head>
<body>


	


<div id="container">	
	<header>
		<div id="logo">
			<button type="button" value="logout" id="deslogar" onclick="voltar()" href='abertura.php'>Voltar</button>
		<h6>SISRG</h6>
		</div>
		
		<div id="btns">
			<a href="cadastrorg.html">Cadastrar <i class="fas fa-plus-square"></i></a>
			<a href="listar.html">Listar <i class="fas fa-clipboard-list"></i></a>
			<a href="formpesquisa1.html">Pesquisa <i class="fas fa-search"></i></a>
			<a href="#">Relatório <i class="fas fa-chart-pie"></i></a>

		</div>
			

	</header>
	<h2 id="info">Cadastro de RG</h2>
     <form method="post" action="processarc.php">
	<input type="hidden" name="id" value="<?php echo $row_usuario['id'] ?>">	
	
	
	
         		<div class="form-row">
    <div class="form-group col-md-4">
		 <label for="nome">NOME</label>
		 <input id="nome"  type="text" class="form-control" size="60" name="nome" placeholder="Nome completo" >
		 
		   </div>
		    
		    <div class="form-group col-md-4">
		   <label for="solicitante">SOLICITANTE</label>
		    <select ="solicitante" name="solicitante" class="form-control"  >
		    <?php
			$sim_nao = $row_usuario ['solicitante'];
			echo "<option value='".$sim_nao."'>".$sim_nao."</option>";
			?>


<option value="DEFENSORIA">DEFENSORIA</option>
		    <option value="MP-BA">MP-BA</option>
		    <option value="SJDHDS">SJDHDS</option>
		    <option value="OUTROS">OUTROS</option>

</select>

			
		  
			</div>
			 <div class="form-group col-md-4">
		   <label for="motivo"> MOTIVO </label> 
		  <select  name="motivo" class="form-control" >
 <?php
			$sim_nao = $row_usuario ['motivo'];
			echo "<option value='".$sim_nao."'>".$sim_nao."</option>";
			?>
		   <option value="AUXILIOE">AUXILIO EMERGENCIAL</option>
		    <option value="OUTROS">OUTROS</option>
			</select>
          </div>
		    </div>
			
	<div class="form-row">
<div class="form-group col-md-4">	 
	 <label for="rg"> RG </label>
          <input type="text"   class="form-control" size="15" maxlength="15 "name="rg" id="rg" >
		 </div>
		<div class="form-group col-md-4">
		 <label for="dtnascimento"> DATA DE NASCIMENTO </label>
		<input type="date"  class="form-control" size="10" maxlength="10" id="dtnascimento" name="dtnascimento" placeholder="dt_nascimento" >
		  </div>
		 
		<div class="form-group col-md-4">
		
		 <label for="cpf"> CPF </label>
		<input type="text"   class="form-control" name="cpf" id="cpf"size="12" maxlength="14"name="cpf" onkeydown="javascript: fMasc( this, mCPF );" >   
		 </div>
		 </div>
	
<div class="form-row">
 <div class="form-group col-md-4">	 
	 <label for="pai"> PAI </label>
       <input type="text"  id="pai" class="form-control" size="60" name="pai" placeholder="Nome do Pai" >
		 </div>
		<div class="form-group col-md-4">
		 <label for="mae"> MAE </label>
		<input type="text"  class="form-control" id="mae" size="60" name="mae" placeholder="Nome da mãe" >
		  </div>
		<div class="form-group col-md-2">
		<label for="dtsol"> DATA DE SOLICITAÇÃO </label>
		<input type="date"  size="20" maxlength="15" name="dtsol" id="dtsol"  class="form-control"  >
		  </div>
		<div class="form-group col-md-2">
				<label for="usuario">USUÁRIO</label>
		  <input type="text"  size="20" maxlength="15" id="usuario" readonly=“true” class="form-control" name="usuario"value="<?php echo $logado ?>"   >
				</div>
		 
		 </div>
		 
		 
	      
<div class="form-row">

 <div class="form-group col-md-2">	 
	 <label for="estadon"> NATURAL ESTADO</label>
       <input type="text"  size="25" maxlength="15" id="estadon"  class="form-control" name="estadon" placeholder="Estado" >
		 </div>
		<div class="form-group col-md-2">
		 <label for="cidaden"> NATURAL CIDADE </label>
		<input type="text"  size="25" maxlength="25" class="form-control" id="cidaden" name="cidaden" placeholder="Cidade"  >
		  </div>
		  
		<div class="form-group col-md-2">
		 <label for="telefone1"> TELEFONE1 </label>
		<input type="text"  class="form-control" id="telefone1" size="12" maxlength="14" name="telefone1" onkeydown="javascript: fMasc( this, mTel );" >
	 </div>
		<div class="form-group col-md-2">
		 <label for="telefone2"> TELEFONE2 </label>
		<input type="text"  class="form-control" id="telefone2" size="12" maxlength="14" name="telefone2" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 <div class="form-group col-md-2">
		 <label for="telefone3"> TELEFONE3 </label>
		<input type="text"  class="form-control" id="telefone3" size="12" maxlength="14" name="telefone3" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 </div>
		 <div class="form-group col-md-2">
		 <label for="whatsaap"> WHATSAAP </label>
		<input type="text"  class="form-control" id="whatsaap" size="12" maxlength="14" name="whatsaap" onkeydown="javascript: fMasc( this, mTel );" >		

		</div>
		 
</div>	 <br><br>     
 
		<div class="form-row">
    <div class="form-group col-md-6">
		 <label for="end">ENDEREÇO RESIDENCIAL</label>
		 <input id="end"  name="end" type="text" class="form-control" size="60" name="end" placeholder="Endereço" >
		 
		   </div>
		    <div class="form-group col-md-2">
		 <label for="cidader"> CIDADE DE RESIDENCIA </label>
		 <input type="text"  class="form-control" id="cidader" size="30" maxlength="30" name="cidader" >
		 </div>
				
<div class="form-group col-md-2">
		 <label for="estador"> ESTADO DE RESIDENCIA </label>
		<input type="text"  class="form-control" id="estador" size="12" maxlength="14" name="estador"  >		
		</div>
		<div class="form-group col-md-2">
		   <label for="cep"> CEP </label> 
		<input type="text"  class="form-control" id="cep" size="12" maxlength="14" name="cep" >		
		</div>
		
			   
	</div><br><br>  
	
	<div class="form-row">
    <div class="form-group col-md-4">
		 
		    		    
		   <label for="status">STATUS</label>
		    <select  id="status"  name="status"   class="form-control">
			<?php
			$sim_nao = $row_usuario ['status'];
			echo "<option value='".$sim_nao."'>".$sim_nao."</option>";
			?>
		    <option value="REIMP. RET. SSA">POSSIB. REIMPRESSÃO COM RETIRADA SEC. JUSTIÇA</option>
		    <option value="REIMP ENVIO CORREIO">POSSIB. REIMPRESSÃO E ENVIO PARA CONVENIADO INTERIOR</option>
		    <option value="AGENDAM P/ AT. PRESENCIAL.">AGENDADO. P/ ATEND. PRESENCIAL SALVADOR</option>
			 <option value="PENDENTE P/ AT. PRESENCIAL">AGUARDANDO. P/ ATEND. PRESENCIAL INTERIOR</option>
			 <option value="LIGAR SAC P/ RETIRAR DOC.">FEZ CARTEIRA RECENTE / LIGAR PARA SAC </option>
			<option value="AG. ANÁLISE POSTERIOR">AGUARDANDO ANÁLISE POSTERIOR</option>
			
		  	</select>
			</div>
           
		   			
    <div class="form-group col-md-2">
		<label for="lagenda"> LOCAL AGENDAMENTO </label>
		 <select  id="lagenda"  name="lagenda"    class="form-control">
		     <?php
			$sim_nao = $row_usuario ['lagenda'];
			echo "<option value='".$sim_nao."'>".$sim_nao."</option>";
			?>
			
			 			<option value=""></option>
			<option value="SAC CAJAZEIRAS">SAC CAJAZEIRAS</option>
			<option value="SAC PAU DA LIMA">SAC PAU DA LIMA</option>
			<option value="SAC OUTROS">OUTROS</option>
		  	</select>
		   </div>
		    <div class="form-group col-md-2">
		   <label for="dagenda"> DATA DO AGENDAMENTO </label>
		<input type="date"  size="20" maxlength="15" name="dagenda" id="dagenda"  class="form-control" >
		   </div>
            <div class="form-group col-md-2">
		   	<label for="Hagenda"> HORA AGENDAMENTO </label>
		<input type="time"  size="20" maxlength="15" name="Hagenda" id="Hagenda"  class="form-control"  >
				</div>
				<div class="form-group col-md-2">
				<label for=resolvido"> TRIADO PELO TELEGRAM? </label>	 
		    <select  id="resolvido"  name="resolvido" value="NAO"   class="form-control">
			   <option value=""></option>
			   <option value="SIM">SIM</option>
			   <option value="NAO">NAO</option>
			</select>
				</div>
				
				</div>
				
				
				
				
	<div class="form-row">
    <div class="form-group col-md-12">
		 <label for="observa">OBSERVAÇÕES</label>
		 <input id="observa" type="text" class="form-control" size="60" name="observa" >		
		</div>	
		
		
		
			</div>
<div class="form-row">
    <div class="form-group col-md-2">
		
            
	<button type="submit" value="Cadastrar"  class="back">Cadastrar</button>	
	</div>	
	 <div class="form-group col-md-2">
	<input type="button" value="voltar" class="back" onclick="voltar()" href='abertura.php'>
	</div>	     
</div>		
            
	
   

    </form>
	
	
	

	



<script type="text/javascript">
	


function voltar() {

    if (confirm("Deseja realmente sair?")) {
        location.href="logout.php";
    } else {
        return false;
    }
}


function pergunta() {

    if (confirm("Deseja realmente cadastar?")) {
        location.href="index.html";
    } else {
        return false;
    }
}





</script>
	



</body>
</html>