<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
    <head>
	<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>			
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #e3f2fd;" >
	
 
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">RG EMERGENCIAL<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                    </ul>
                </li>
                <!-- Menu dropdown Fim -->
 
                   <li><a href="aberturaadm.php">INICIO <span class="sr-only">(current)></span></a></li>
                <li><a href="cadastrorgadm.php">CADASTRAR</a></li>
				<li><a href="listagemadm.php">LISTAR</a></li>
				<li><a href="formpesquisa1adm.php">PESQUISAR</a></li>
                <li><a href="formpesquisapdfadmpdf.php">RELATÓRIO</a></li>              
               
 
            </ul>
            <!-- Links Fim -->
 
           
 
            </div>
            <!-- Caixa de Pesquisa Fim -->
 
        </div>
    </div><br><br><br>
<div>
<h4>RELATÓRIO DE AGENDAMENTO</h4>
<form method="POST" action="pdf1.php">

	
	
				
	   		<div class="form-row">
   		 <div class="form-group col-md-4">
		<label for="dtinicio"> DATA DE AGENDAMENTO INICIAL </label>
		<input type="date" size="20" maxlength="15" name="dtinicio" id="dtinicio"  class="form-control"  >
		  </div>
		   <div class="form-group col-md-4">
		<label for="dtfim"> DATA DE AGENDAMENTO FINAL </label>
		<input type="date" size="20" maxlength="15" name="dtfim" id="dtfim"  class="form-control"  >
		  </div>
		    
		
           
		   			
			<div class="form-group col-md-4">
			 <label for="lagenda">LOCAL AGENDAMENTO</label>
			<select id="lagenda"  name="lagenda"  class="form-control">
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
		  
		   </div>
		   </div>
		   
    <input type="submit" value="GERAR" name="botao1">
</form>
<div>
<h4  align="Left" >RELATÓRIO DE REIMPRESSÃO</h4>
<form method="POST" action="reimpressao.php">

	
	<div class="form-row">
	
	
	<div class="form-group col-md-4">
		 
		    		    
		   <label for="status">Status</label>
		    <select id="status" readonly=“true” name="status" onkeyup="javascript:travarCampoSelect(obj);" readonly="readonly"  class="form-control">
		     <option value=""></option>
			 
			 <option value="REIMP. RET. SSA">POSSIB. REIMPRESSÃO COM RETIRADA SEC. JUSTIÇA</option>
		    <option value="REIMP ENVIO CORREIO">POSSIB. REIMPRESSÃO E ENVIO PARA CONVENIADO INTERIOR</option>
		   
		  	</select>
			</div>
			
    <div class="form-group col-md-4">
		<label for="nome"> NOME </label>
		    <input type="text" id="nome" name="nome" class="form-control" placeholder="NOME DO SOLICITANTE">
		  </div>
		  <div class="form-group col-md-4">
		<label for="mae"> MAE </label>
		    <input type="text" id="mae" name="mae" class="form-control" placeholder="NOME DA MÃE">
		  </div>
	
			</div>	  
		 
		  
		  
		  
		<div class="form-row">
   		 <div class="form-group col-md-6">
		<label for="dtinicio1"> DATA SOLIC. INICIAL </label>
		<input type="date" size="20" maxlength="15" name="dtinicio1" id="dtinicio1"  class="form-control"  >
		  </div>
		   <div class="form-group col-md-6">
		<label for="dtfim1"> DATA SOLIC. FINAL </label>
		<input type="date" size="20" maxlength="15" name="dtfim1" id="dtfim1"  class="form-control"  >
		  </div>
				
		  </div>
			           
		   			
  
		   
		   
		   
		 
		   		   
		   </div>
		   </div>
    <input type="submit" value="GERAR"  name="botao2">
</form>

<br><br>
<div>
<h4 align="Left" >RELATÓRIO DE PRODUTIVIDADE DIÁRIA</h4>
<form method="POST" action="relprodutividade1.php">

	
	<div class="form-row">
	
	
	<div class="form-group col-md-4">
		 
		    		    
		 
		 
		    		    
		   <label for="status">Status</label>
		    <select id="status" readonly=“true” name="status" onkeyup="javascript:travarCampoSelect(obj);" readonly="readonly"  class="form-control">
		     <option value="">TODOS</option>
			 <option value="REIMP. RET. SSA">POSSIB. REIMPRESSÃO COM RETIRADA SEC. JUSTIÇA</option>
		    <option value="REIMP ENVIO CORREIO">POSSIB. REIMPRESSÃO E ENVIO PARA CONVENIADO INTERIOR</option>
		    <option value="AGENDAM P/ AT. PRESENCIAL.">AGENDADO. P/ ATEND. PRESENCIAL SALVADOR</option>
			 <option value="PENDENTE P/ AT. PRESENCIAL">AGUARDANDO. P/ ATEND. PRESENCIAL INTERIOR</option>
			 <option value="LIGAR SAC P/ RETIRAR DOC.">FEZ CARTEIRA RECENTE / LIGAR PARA SAC </option>
			<option value="AG. ANÁLISE POSTERIOR">AGUARDANDO ANÁLISE POSTERIOR</option>
		  	</select>
			</div>
		
			
    <div class="form-group col-md-4">
		<label for="solicitante"> ÓRGÃO SOLICITANTE</label>
		   <select id="solicitante" name="solicitante" class="form-control" >
		    <option value="">TODOS</option>
			<option value="DEFENSORIA">DEFENSORIA</option>
		    <option value="MP-BA">MP-BA</option>
		    <option value="SJDHDS">SJDHDS</option>
		    <option value="OUTROS">OUTROS</option>
		  	</select>
		   
		  </div>
		  <div class="form-group col-md-4">
	
	
		  <label for="usuario">USUÁRIO</label>
		  <input type="text" size="20" maxlength="15" id="usuario" class="form-control" placeholder="OPCIONAL" name="usuario"
		  </div>
	
			</div>	  
		 
		  
		  
		  
		<div class="form-row">
   		 <div class="form-group col-md-6">
		<label for="dtinicio"> DATA SOLIC. INICIAL </label>
		<input type="date" size="20" maxlength="15" name="dtinicio" id="dtinicio"  class="form-control"  >
		  </div>
		   <div class="form-group col-md-6">
		<label for="dtfim"> DATA SOLIC. FINAL </label>
		<input type="date" size="20" maxlength="15" name="dtfim" id="dtfim"  class="form-control"  >
		  </div>
				
		  </div>
		    </div>
		<br><br>
		   <input type="submit" value="GERAR" name="botao3">
			         
</body>
</html>