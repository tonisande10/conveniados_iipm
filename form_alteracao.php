<?php 
session_start();
include_once ("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario="select * from cadastrorg where id='$id' ";
$resultado_usuario=mysqli_query($conn,$result_usuario);
$row_usuario= mysqli_fetch_assoc ($resultado_usuario)
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISRG</title>
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
			<button type="button" value="logout" id="deslogar" onclick="pergunta()" href='logout.php'>Logout</button>
		<h6>SISRG</h6>
		</div>
		
		<div id="btns">
			<a href="cadastrorg.html">Cadastrar <i class="fas fa-plus-square"></i></a>
			<a href="listar.html">Listar <i class="fas fa-clipboard-list"></i></a>
			<a href="formpesquisa1.html">Pesquisa <i class="fas fa-search"></i></a>
			<a href="#">Relatório <i class="fas fa-chart-pie"></i></a>

		</div>
			

	</header>
	<h2 id="info">EDIÇÃO DE SOLICITAÇÃO DE RG</h2>
     <form method="post" action="editadao.php">
	<input type="hidden" name="id" value="<?php echo $row_usuario['id'] ?>">	
	
	
	
         		<div class="form-row">
    <div class="form-group col-md-4">
		 <label for="nome">NOME</label>
		 <input id="nome" readonly=“true” type="text" class="form-control" size="60" name="nome" placeholder="Nome completo" value="<?php echo $row_usuario ['nome'] ?>">
		 
		   </div>
		    
		    <div class="form-group col-md-4">
		   <label for="solicitante">SOLICITANTE</label>
		    <select disabled id="solicitante" name="solicitante" class="form-control" value="<?php echo $row_usuario ['solicitante'] ?>" >
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
		  <select disabled name="motivo" class="form-control" value="<?php echo $row_usuario ['motivo'] ?>">
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
          <input type="text" readonly=“true”  class="form-control" size="15" maxlength="15 "name="rg" id="rg" value="<?php echo $row_usuario ['rg'] ?>">
		 </div>
		<div class="form-group col-md-4">
		 <label for="dtnascimento"> DATA DE NASCIMENTO </label>
		<input type="date" readonly=“true” class="form-control" size="10" maxlength="10" id="dtnascimento" name="dtnascimento" placeholder="dt_nascimento" value="<?php echo $row_usuario ['dtnascimento'] ?>">
		  </div>
		 
		<div class="form-group col-md-4">
		
		 <label for="cpf"> CPF </label>
		<input type="text"  readonly=“true” class="form-control" name="cpf" id="cpf"size="12" maxlength="14"name="cpf" onkeydown="javascript: fMasc( this, mCPF );" value="<?php echo $row_usuario ['cpf'] ?>">   
		 </div>
		 </div>
	
<div class="form-row">
 <div class="form-group col-md-4">	 
	 <label for="pai"> PAI </label>
       <input type="text" readonly=“true” id="pai" class="form-control" size="60" name="pai" placeholder="Nome do Pai" value="<?php echo $row_usuario ['pai'] ?>">
		 </div>
		<div class="form-group col-md-4">
		 <label for="mae"> MAE </label>
		<input type="text" readonly=“true” class="form-control" id="mae" size="60" name="mae" placeholder="Nome da mãe" value="<?php echo $row_usuario ['mae'] ?>">
		  </div>
		<div class="form-group col-md-2">
		<label for="dtsol"> DATA DE SOLICITAÇÃO </label>
		<input type="date" readonly=“true” size="20" maxlength="15" name="dtsol" id="dtsol"  class="form-control" value="<?php echo $row_usuario ['dtsol'] ?>" >
		  </div>
		<div class="form-group col-md-2">
				<label for="usuario">USUÁRIO</label>
		  <input type="text" readonly=“true” size="20" maxlength="15" id="usuario" readonly=“true” class="form-control" name="usuario"  value="<?php echo $row_usuario ['usuario'] ?>" >
				</div>
		 
		 </div>
		 
		 
	      
<div class="form-row">

 <div class="form-group col-md-2">	 
	 <label for="estadon"> NATURAL ESTADO</label>
       <input type="text" readonly=“true” size="25" maxlength="15" id="estadon"  class="form-control" name="estadon" placeholder="Estado" value="<?php echo $row_usuario ['estadon'] ?>">
		 </div>
		<div class="form-group col-md-2">
		 <label for="cidaden"> NATURAL CIDADE </label>
		<input type="text" readonly=“true” size="25" maxlength="25" class="form-control" id="cidaden" name="cidaden" placeholder="Cidade" value="<?php echo $row_usuario ['cidaden'] ?>" >
		  </div>
		  
		<div class="form-group col-md-2">
		 <label for="telefone1"> TELEFONE1 </label>
		<input type="text" readonly=“true” class="form-control" id="telefone1" size="12" maxlength="14" name="telefone1" onkeydown="javascript: fMasc( this, mTel );" value="<?php echo $row_usuario ['telefone1'] ?>">
	 </div>
		<div class="form-group col-md-2">
		 <label for="telefone2"> TELEFONE2</label>
		<input type="text" readonly=“true” class="form-control" id="telefone2" size="12" maxlength="14" name="telefone2" onkeydown="javascript: fMasc( this, mTel );" value="<?php echo $row_usuario ['telefone2'] ?>">		

		</div>
		 <div class="form-group col-md-2">
		 <label for="telefone3"> TELEFONE3 </label>
		<input type="text" readonly=“true” class="form-control" id="telefone3" size="12" maxlength="14" name="telefone3" onkeydown="javascript: fMasc( this, mTel );" value="<?php echo $row_usuario ['telefone3'] ?>">		

		</div>
		 </div>
		 <div class="form-group col-md-2">
		 <label for="whatsaap"> TELEFONE4 </label>
		<input type="text" readonly=“true” class="form-control" id="whatsaap" size="12" maxlength="14" name="whatsaap" onkeydown="javascript: fMasc( this, mTel );" value="<?php echo $row_usuario ['whatsaap'] ?>">		

		</div>
		 
</div>	 <br><br>     
 
		<div class="form-row">
    <div class="form-group col-md-6">
		 <label for="end">ENDEREÇO RESIDENCIAL</label>
		 <input id="end" readonly=“true” name="end" type="text" class="form-control" size="60" name="end" placeholder="Endereço" value="<?php echo $row_usuario ['end'] ?>">
		 
		   </div>
		    <div class="form-group col-md-2">
		 <label for="cidader"> Cidade de Residencia </label>
		 <input type="text" readonly=“true” class="form-control" id="cidader" size="30" maxlength="30" name="cidader" value="<?php echo $row_usuario ['cidader'] ?>">
		 </div>
				
<div class="form-group col-md-2">
		 <label for="estador"> Estado de Residencia </label>
		<input type="text" readonly=“true” class="form-control" id="estador" size="12" maxlength="14" name="estador" value="<?php echo $row_usuario ['estador'] ?>" >		
		</div>
		<div class="form-group col-md-2">
		   <label for="cep"> CEP </label> 
		<input type="text" readonly=“true” class="form-control" id="cep" size="12" maxlength="14" name="cep" value="<?php echo $row_usuario ['cep'] ?>">		
		</div>
		
			   
	</div><br><br>  
	
	<div class="form-row">
    <div class="form-group col-md-4">
		 
		    		    
		   <label for="status">Status</label>
		    <select disabled  id="status"  name="status"  value="<?php echo $row_usuario ['status'] ?>" class="form-control">
			<?php
			$sim_nao = $row_usuario ['status'];
			echo "<option value='".$sim_nao."'>".$sim_nao."</option>";
			?>
		    <option value="REIMP. RET. SSA">POSSIB. REIMPRESSÃO COM RETIRADA SEC. JUSTIÇA</option>
		    <option value="REIMP ENVIO CORREIO">POSSIB. REIMPRESSÃO E ENVIO PARA CONVENIADO INTERIOR</option>
		    <option value="AGENDAM P/ AT. PRESENCIAL.">AGENDADO. P/ ATEND. PRESENCIAL SALVADOR</option>
			 <option value="PENDENTE P/ AT. PRESENCIAL">AGUARDANDO. P/ ATEND. PRESENCIAL INTERIOR</option>
			 <option value="LIGAR SAC P/ RETIRAR DOC.">FEZ CARTEIRA RECENTE / LIGAR PARA SAC </option>
			 <option value="CARTEIRA ENTREGUE A SEC.JUSTIÇA.">CARTEIRA ENTREGUE A SEC. DE JUSTIÇA</option>
			 <option value="CARTEIRA ENTREUGE AO CIDADÃO">CARTEIRA ENTREGUE AO CIDADÃO</option>
			<option value="AG. ANÁLISE POSTERIOR">AGUARDANDO ANÁLISE POSTERIOR</option>
		  	</select>
			</div>
           
		   			
    <div class="form-group col-md-2">
		<label for="lagenda"> LOCAL AGENDAMENTO </label>
		 <select disabled id="lagenda"  name="lagenda"    class="form-control">
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
		<input type="date" readonly=“true” size="20" maxlength="15" name="dagenda" id="dagenda"  class="form-control" value="<?php echo $row_usuario ['dagenda'] ?>">
		   </div>
            <div class="form-group col-md-2">
		   	<label for="Hagenda"> HORA AGENDAMENTO </label>
		<input type="time" readonly=“true” size="20" maxlength="15" name="Hagenda" id="Hagenda"  class="form-control"  value="<?php echo $row_usuario ['Hagenda'] ?>">
				</div>
				<div class="form-group col-md-2">
				 <label for="resolvido">Resolvido</label>
		    <select disabled id="resolvido"  name="resolvido"   class="form-control">
			<?php
			$sim_nao = $row_usuario ['resolvido'];
			echo "<option value='".$sim_nao."'>".$sim_nao."</option>";
			?>
		    <option value="SIM">SIM</option>
		    <option value="NAO">NAO</option>
			</select>
				</div>
				
				</div>
				
				
				
				
	<div class="form-row">
    <div class="form-group col-md-12">
		 <label for="observa">OBSERVAÇÕES</label>
		 <input id="observa" type="text" class="form-control" size="60" name="observa" placeholder=""value="<?php echo $row_usuario ['observa'] ?>">		
		</div>	
		
		
		
			</div>
<div class="form-row">
    <div class="form-group col-md-2">
		
            
	<button type="submit" value="Cadastrar" class="back">SALVAR</button>	
	</div>	
	 <div class="form-group col-md-2">
	<input type="button" value="FECHAR" class="back" onClick="fecha()" value="Fechar">
	</div>	     
</div>		
            
	
   

    </form>
	
	
	

	



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

function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}
			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
				cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}
			function mPis(v) {
    v = v.replace(/\D/g, "")                                      //Remove tudo o que não é dígito
    v = v.replace(/^(\d{3})(\d)/, "$1.$2")                        //Coloca ponto entre o terceiro e o quarto dígitos
    v = v.replace(/^(\d{3})\.(\d{5})(\d)/, "$1.$2.$3")            //Coloca ponto entre o quinto e o sexto dígitos
    v = v.replace(/(\d{3})\.(\d{5})\.(\d{2})(\d)/, "$1.$2.$3.$4") //Coloca ponto entre o décimo e o décimo primeiro dígitos
    return v
}


$(document).ready(function () {
		
			$.getJSON('estados_cidades.json', function (data) {
				var items = [];
				var options = '<option value="">escolha um estado</option>';	
				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});
					$("#cidades").html(options_cidades);
					
				}).change();		
			
			});
		
		});
		
		</script>
		
		<script>
function fecha(){
window.opener = window
window.close("#")}
</script>
		
		<script>
		
		//trava o campo select pois não permite que seu valor seja alterado
function travarCampoSelect(obj){
var index = obj.selectedIndex;
obj.onkeypress=function() {
obj.options[index].selected = true;
return false;
};
obj.onclick=function() {
obj.options[index].selected = true;
return false;
};
obj.onchange=function() {
obj.options[index].selected = true;
return false;
};
}



</script>
	



</body>
</html>