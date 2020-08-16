<?php 
			session_start();
			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
			{
			  unset($_SESSION['usuario']);
			  unset($_SESSION['senha']);
			  header('location:index.html');
			  }
			 			$logado = $_SESSION['usuario'];
			echo "$logado"
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <head>
	<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			

	    
        <title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<style type="text/css"> 
		.form-itens:focus {
   box-shadow:none;}</style>

		
</head>
    <body>
<h4><center>CADASTRO DE POSTO</center></h4>
    <form method="post" action="processarcadm.php">
         		<div class="form-row">
    <div class="form-group col-md-4">
		 <label for="nome">NOME</label>
		 <input id="nome" type="text" class="form-control" size="60" name="nome" placeholder="Nome completo" >
		 
		   </div>
		    
		    <div class="form-group col-md-4">
		   <label for="solicitante">SOLICITANTE</label>
		    <select id="solicitante" name="solicitante" class="form-control" >
		    <option value=""></option>
			<option value="DEFENSORIA">DEFENSORIA</option>
		    <option value="MP-BA">MP-BA</option>
		    <option value="SJDHDS">SJDHDS</option>
		    <option value="OUTROS">OUTROS</option>
		  	</select>
			</div>
			 <div class="form-group col-md-4">
		   <label for="motivo"> MOTIVO </label> 
		  <select name="motivo" class="form-control">
		   <option value=""></option>
		    <option value="AUXILIOE">AUXILIO EMERGENCIAL</option>
		    <option value="OUTROS">OUTROS</option>
			</select>
          </div>
		    </div>
<div class="form-row">
<div class="form-group col-md-4">	 
	 <label for="rg"> RG </label>
          <input type="text"  class="form-control" size="15" maxlength="15 "name="rg" id="rg">
		 </div>
		<div class="form-group col-md-4">
		 <label for="dtnascimento"> DATA DE NASCIMENTO </label>
		<input type="date" class="form-control" size="10" maxlength="10" id="dtnascimento" name="dtnascimento" placeholder="dt_registro">
		  </div>
		 
		<div class="form-group col-md-4">
		
		 <label for="cpf"> CPF </label>
		<input type="text"  class="form-control" name="cpf" id="cpf"size="12" maxlength="14"name="cpf" onkeydown="javascript: fMasc( this, mCPF );">   
		 </div>
		 </div>
	
<div class="form-row">
 <div class="form-group col-md-4">	 
	 <label for="pai"> PAI </label>
       <input type="text" id="pai" class="form-control" size="60" name="pai" placeholder="Nome do Pai">
		 </div>
		<div class="form-group col-md-4">
		 <label for="mae1"> MAE </label>
		<input type="text" class="form-control" id="mae" size="60" name="mae" placeholder="Nome da mãe">
		  </div>
		<div class="form-group col-md-2">
		<label for="dtsol"> DATA DE SOLICITAÇÃO </label>
		<input type="date" size="20" maxlength="15" name="dtsol" id="dtsol"  class="form-control"  >
		  </div>
		 <div class="form-group col-md-2">
				<label for="usuario">USUÁRIO</label>
		  <input type="text" size="20" maxlength="15" id="usuario" readonly=“true” class="form-control" name="usuario" value= "<?php echo $logado; ?>" >
				</div>
		 
		 </div>
		 
		 
	      
<div class="form-row">

 <div class="form-group col-md-2">	 
	 <label for="estadon"> NATURAL ESTADO</label>
       <input type="text" size="25" maxlength="25" id="estadon"  class="form-control" name="estadon" placeholder="Estado" >
		 </div>
		<div class="form-group col-md-2">
		 <label for="cidaden"> NATURAL CIDADE </label>
		<input type="text" size="20" maxlength="20" class="form-control" id="cidaden" name="cidaden" placeholder="Cidade" >
		  </div>
		  
		<div class="form-group col-md-2">
		 <label for="telefone1"> Telefone1 </label>
		<input type="text" class="form-control" id="telefone1" size="12" maxlength="14" name="telefone1" placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );">
	 </div>
		<div class="form-group col-md-2">
		 <label for="telefone2"> Telefone2 </label>
		<input type="text" class="form-control" id="telefone2" size="12" maxlength="14" name="telefone2" placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 <div class="form-group col-md-2">
		 <label for="telefone3"> Telefone3 </label>
		<input type="text" class="form-control" id="telefone3" size="12" maxlength="14" name="telefone3" placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 </div>
		 <div class="form-group col-md-2">
		 <label for="whatsaap"> Whatsaap </label>
		<input type="text" class="form-control" id="whatsaap" size="12" maxlength="14" name="whatsaap" placeholder="insira o zap" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 
</div>	 <br><br>     
 
		<div class="form-row">
    <div class="form-group col-md-6">
		 <label for="end">ENDEREÇO RESIDENCIAL</label>
		 <input id="end" name="end" type="text" class="form-control" size="60" name="end" placeholder="Endereço" >
		 
		   </div>
		    <div class="form-group col-md-2">
		 <label for="cidader"> Cidade de Residencia </label>
		 <input type="text" class="form-control" id="cidader" size="30" maxlength="30" name="cidader" >
		 </div>
				
<div class="form-group col-md-2">
		 <label for="estador"> Estado de Residencia </label>
		<input type="text" class="form-control" id="estador" size="12" maxlength="14" name="estador" >		
		</div>
		<div class="form-group col-md-2">
		   <label for="cep"> CEP </label>
		<input type="text" class="form-control" id="cep" size="12" maxlength="14" name="cep" >		
		</div>
		
			   
	</div><br><br>  
	
	<div class="form-row">
    <div class="form-group col-md-4">
		 
		    		    
		   <label for="status">Status</label>
		    <select id="status" readonly=“true” name="status" onkeyup="javascript:travarCampoSelect(obj);" readonly="readonly" option value="" class="form-control">
		     <option value=""></option>
			 <option value="REIMP. RET. SSA">POSSIB. REIMPRESSÃO COM RETIRADA SEC. JUSTIÇA</option>
		    <option value="REIMP ENVIO CORREIO">POSSIB. REIMPRESSÃO E ENVIO PARA CONVENIADO INTERIOR</option>
		    <option value="AGENDAM P/ AT. PRESENCIAL.">AGENDADO. P/ ATEND. PRESENCIAL SALVADOR</option>
			 <option value="PENDENTE P/ AT. PRESENCIAL">AGUARDANDO. P/ ATEND. PRESENCIAL INTERIOR</option>
			 <option value="LIGAR SAC P/ RETIRAR DOC.">FEZ CARTEIRA RECENTE / LIGAR PARA SAC </option>
			<option value="AG. ANÁLISE POSTERIOR">AGUARDANDO ANÁLISE POSTERIOR</option>
		  	</select>
			</div>
           
		   			
    <div class="form-group col-md-2">
		<label for="cidaden"> LOCAL AGENDAMENTO </label>
		  	    <select id="lagenda"  name="lagenda"    class="form-control">
		     <option value=""></option>
			 			<option value=""></option>
			<option value="SAC CAJAZEIRAS">SAC CAJAZEIRAS</option>
			<option value="SAC CAJAZEIRAS">SAC CAJAZEIRAS</option>
			<option value="SAC PAU DA LIMA">SAC PAU DA LIMA</option>
			<option value="SAC OUTROS">OUTROS</option>
		  	</select>
		   
		   		   
		   
		   </div>
		    <div class="form-group col-md-2">
		   <label for="dtsol"> DATA DO AGENDAMENTO </label>
		<input type="date" size="20" maxlength="15" name="dagenda" id="dagenda"  class="form-control";" >
		   </div>
            <div class="form-group col-md-2">
		   	<label for="Hagenda"> HORA AGENDAMENTO </label>
		<input type="time" size="20" maxlength="15" name="Hagenda" id="Hagenda"  class="form-control";" >
				</div>
				
				<div class="form-group col-md-2">
				 
		    <label for="resolvido"> RESOLVIDO </label>
		     <select id="resolvido"  name="resolvido"    class="form-control">
		     <option value=""></option>
			<option value="NAO">NAO</option>
			<option value="SIM">SIM</option>
			
		  	</select>
				</div>
				
				</div>
				
				
				
				
	<div class="form-row">
    <div class="form-group col-md-12">
		 <label for="observa">OBSERVAÇÕES</label>
		 <input id="obsserva" type="text" class="form-control" size="60" name="observa" placeholder="" >		
		</div>	
		
		
		
			</div>

				
            	<div class="form-row">
    <div class="form-group col-md-2">
		 <button type="submit" value="Cadastrar" class="btn btn-primary mb-2">Cadastrar</button>
		  </div>
		
    <div class="form-group col-md-2">
		<button type="button" value="logout" class="btn btn-primary mb-2" onclick="pergunta()". href='logout.php'>Logout</button>
              </div>
			   <div class="form-group col-md-2">
          </div>
	<div class="form-group col-md-2">
			 <input type="button" value="voltar" class="btn btn-primary mb-2"onclick="voltar()". href='aberturaadm.php'
              </div>
			
    <div class="form-group col-md-2">
	</div>

           
           
            
	
   

    </form>
<script type="text/javascript">

function voltar() {

    if (confirm("Deseja realmente sair do programa?")) {
        location.href="aberturaadm.php";
    } else {
        return false;
    }
}
</script>
<script type="text/javascript">

function pergunta() {

    if (confirm("Deseja realmente sair do programa?")) {
        location.href="index.html";
    } else {
        return false;
    }
}
</script>


		<script type="text/javascript">
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
</script>

	<script type="text/javascript">	
		
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