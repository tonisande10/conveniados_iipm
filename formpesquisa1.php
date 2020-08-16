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
 
                <li><a href="abertura.php">INICIO</a> 
                <li><a href="listagem.php">LISTAR</a></li>
				<li><a href="formpesquisa1.php">PESQUISAR</a></li>
                <li><a href="formpesquisapdf.php">RELATÓRIO</a></li>
                            
 
            </ul>
            <!-- Links Fim -->
 
           
 
            </div>
            <!-- Caixa de Pesquisa Fim -->
 
        </div>
    </div>
 
</div><br><br><br>
<h1>EXIBIR RELATÓRIO NA TELA DO EQUIPAMENTO</h1>
<form method="POST" action="listar1.php">

	
	<div class="form-row">
    <div class="form-group col-md-4">
		<label for="nome"> NOME </label>
		    <input type="text" id="nome" name="nome" class="form-control" placeholder="NOME DO SOLICITANTE">
		  </div>
		  <div class="form-group col-md-4">
		<label for="mae"> Mãe </label>
		    <input type="text" id="mae" name="mae" class="form-control" placeholder="NOME DA MÃE">
		  </div>
		  <div class="form-group col-md-2">
		<label for="usuario"> LOGIN SOLICITANTE </label>
		    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="LOGIN">
		  </div>
		  <div class="form-group col-md-2">
		   <label for="resolvido"> Resolvido </label>
		   <select id="resolvido"  name="resolvido"   class="form-control">
			<option value="">	</option>
		    <option value="SIM">SIM</option>
		    <option value="NAO">NAO</option>
			</select>
				</div>
		  
		  </div>
		<div class="form-row">
   		 <div class="form-group col-md-2">
		<label for="dtinicio"> DATA SOLICITAÇÃO INICIAL </label>
		<input type="date" size="20" maxlength="15" name="dtinicio" id="dtinicio"  class="form-control"  >
		  </div>
		   <div class="form-group col-md-2">
		<label for="dtfim"> DATA SOLICITAÇÃO FINAL </label>
		<input type="date" size="20" maxlength="15" name="dtfim" id="dtfim"  class="form-control"  >
		  </div>
		    
			<div class="form-group col-md-4">		    
		   <label for="status">Status</label>
		    <select id="status" readonly=“true” name="status" onkeyup="javascript:travarCampoSelect(obj);" readonly="readonly" option value="" class="form-control">
		    <option value="">TODOS</option>
			<option value="reimpressao ret. Salvador">POSSIB. REIMPRESSÃO COM RETIRADA SEC. JUSTIÇA</option>
		 		    <option value="agendamento atendimento presencial">AGENDADO. P/ ATEND. PRESENCIAL SALVADOR</option>
			 <option value="pendete para agendamento ">AGUARDANDO. P/ ATEND. PRESENCIAL INTERIOR</option>
			 <option value="Ligar para o SAC para retirar carteira">FEZ CARTEIRA RECENTE / LIGAR PARA SAC </option>
				<option value="AG. ANÁLISE">AGUARDANDO ANÁLISE POSTERIOR</option>
		  	</select>
			</div>
           
		   			
    <div class="form-group col-md-2">
		<label for="lagenda"> LOCAL AGENDAMENTO </label>
		<input type="text" size="20" maxlength="20" class="form-control" id="lagenda" name="lagenda" placeholder="Local Agendamento" >	    
		   </div>
		    <div class="form-group col-md-2">
		   <label for="dagenda"> DATA DO AGENDAMENTO </label>
		<input type="date" size="20" maxlength="15" name="dagenda" id="dagenda"  class="form-control" >
		   </div>
		   </div>
    <input type="submit" value="ENVIAR">
</form>
</body>
</html>