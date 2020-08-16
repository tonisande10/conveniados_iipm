<?php
session_start();
include_once ("conexao1.php");
$idposto = filter_input(INPUT_GET, 'idposto', FILTER_SANITIZE_NUMBER_INT);
$result_usuario= "select * from postos1 where idposto='$idposto' ";
$resultado_usuario=mysqli_query($conn,$result_usuario);
$row_usuario= mysqli_fetch_assoc ($resultado_usuario);
?>

<?php 
		
			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
			{
			  unset($_SESSION['usuario']);
			  unset($_SESSION['senha']);
			  header('location:index.html');
			  }
			 			$logado = $_SESSION['usuario'];
date_default_timezone_set('America/Sao_Paulo');			
?>

<?php
$idposto1 = filter_input(INPUT_GET, 'idposto', FILTER_SANITIZE_NUMBER_INT);
$result_lrec= "SELECT p.nome_cidade, p.telefone_posto, p.telefonep2, p.telefonep3, p.whatsaapp, p.whatsaapc, p.cep, p.email_posto, p.cota_mensal,
p.estadop, p.dticonvenio, p.dtfconvenio, p.horario_ini_funcionamento, p.horario_fim_funcionamento,
p.obs, p.endereco_posto, dc.iddia, dc.dia, s.idsit, s.situacao, sc.idsemana, sc.sem_comparecimento, t.tipo_posto, m.idmodo, 
m.modo_pconta, cid.distancia_ssa, cid.pop,  cid.idcidade, cid.nome_cidade, l.local, p.local_recebimento_carteiras,  
p.idprefeito, p.prefeito, p.telprefeitoa, p.telprefeitob, p.obs, p.chefe, p.idchefe, p.telefonec, p.telefoned, p.whatsaapc, p.rg, 
p.emailc, p.idchefe, p.idprefeito, p.whatsaapc, p.emailc, p.idchefe, p.idprefeito,
t.id_tipo, p.cota_mensal, p.idposto, p.codigos1_cod_posto from  postos1 p  inner join 
tipo_posto1 t on (p.id_tipo=t.id_tipo) inner join local_rec1 l on (p.local_recebimento_carteiras = l.idlocal_rec) inner join cidade1 cid on(p.idcidade = cid.idcidade) inner join modo_pconta m on(p.modo_pconta=m.idmodo) inner join sit_posto s on(p.situacao=s.idsit) inner join semana_comp sc on(p.sem_comparecimento=sc.idsemana) inner join dia_comp dc on(p.dia_comparecimento_IIPM =dc.iddia) 
inner join prefeito1 pref on (p.idprefeito=pref.idprefeito) where Idposto='$idposto1'  order by p.nome_cidade ASC "  ;
$resultado_lrec= mysqli_query($conn,$result_lrec);
$row_lrec= mysqli_fetch_assoc ($resultado_lrec);
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
			
	    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
        <title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<style type="text/css"> 
		.form-itens:focus {
   box-shadow:none;}</style>
<script>
function fecha(){
window.opener = window
window.close("#")}
</script>
<script type="text/javascript">

function voltar() {

    if (confirm("Deseja realmente sair do programa?")) {
        location.href="abertura.php";
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
    </head>
	<body>
   <h4><center>PESQUISA DE SITUAÇÃO DO RG</center></h4>
    <form method="post" action="editadaoadm.php">
	<input type="hidden" name="idposto" id="idposto" value="<?php echo $row_lrec['idposto'] ?>";	
	<div class="form-row">
				
				<div class="form-group col-md-2">
				
		 <label for="id_tipo">TIPO CONVÊNIO</label>
		      <select id="id_tipo" name="id_tipo" class="form-control" >
		     <?php
			$sim_nao = $row_lrec ['tipo_posto'];
			$valor = $row_lrec ['id_tipo'];
			echo "<option value='".$valor."'>".$sim_nao."</option>";
			?>
			<?php
					$result_cat_post =  "SELECT * FROM tipo_posto1 ";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['id_tipo'].'">'.$row_cat_post['tipo_posto'].'</option>';
					}
				?>
		    
		  	</select>
		 
		   </div>
			
			<div class="form-group col-md-4">
				<label for="nome_cidade">CIDADE</label>
				<input type="text" class="form-control" name="nome_cidade" id="nome_cidade" value="<?php  echo $row_lrec['nome_cidade'] ?>">
				
				
				
				</div>
				
				<div class="form-group col-md-2">
				<label for="cod_cidade">CÓDIGO IBGE</label>
				<input type="text" class="form-control" readonly=“true” name="cod_cidade" id="cod_cidade" value="<?php  echo $row_lrec['idcidade'] ?>">
				</div>
			
			
		
		   
		   	<div class="form-group col-md-2">
				<label for="pop">POPULAÇÃO CIDADE</label>
				<input type="text" class="form-control"  readonly=“true” name="pop" id="pop" value="<?php  echo $row_lrec['pop'] ?>" >
				</div>
				
					<div class="form-group col-md-2">
				<label for="km">DISTANCIA CAPITAL (KM)</label>
				<input type="km" class="form-control" name="km" readonly=“true” id="km" value="<?php  echo $row_lrec['distancia_ssa'] ?>">
				</div>
		   
		   </div>
		   
		   <div class="form-row">
		    <div class="form-group col-md-4">
		   <label for="local_receb">LOCAL DE RECEBIMENTO CARTEIRAS/FICHAS</label>
		    <select id="local_receb" name="local_receb" class="form-control" >
		    			
			  <?php
			$sim_nao = $row_lrec ['local'];
			$valor = $row_lrec ['local_recebimento_carteiras'];
			echo "<option value='".$valor."'>".$sim_nao."</option>";
			?>
					  	<?php
					$result_cat_post =  "SELECT * FROM local_rec1 ";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idlocal_rec'].'">'.$row_cat_post['local'].'</option>';
					}
				?>
		  	</select>
			</div>
				 <div class="form-group col-md-4">
		   <label for="modo_pcontas">MODO PRESTAÇÃO DE CONTAS</label>
		    <select id="modo_pcontas" name="modo_pcontas" class="form-control" >
		   
			<?php
			$sim_nao = $row_lrec ['modo_pconta'];
			$valor = $row_lrec ['idmodo'];
			echo "<option value='".$valor."'>".$sim_nao."</option>";
			?>
					  	 	<?php
					$result_cat_post =  "SELECT * FROM modo_pconta ";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idmodo'].'">'.$row_cat_post['modo_pconta'].'</option>';
					}
				?>
		  	</select>
			</div>
			 <div class="form-group col-md-2">
		 <label for="cota">COTA DE FICHAS</label>
				<input type="text" class="form-control" name="cota" id="cota" value="<?php  echo $row_lrec['cota_mensal'] ?>" placeholder="Insira a Cota">
          </div>
		  
		  	 <div class="form-group col-md-2">
		 <label for="cod_posto">CÓDIGO DO POSTO</label>
				<input type="text" class="form-control" name="cod_posto" readonly=“true” id="cod_posto" value="<?php echo $row_lrec['codigos1_cod_posto'] ?>" placeholder="Insira a Cota">
          </div>
	
		  
		    </div>
			
			
		 <div class="form-row">
<div class="form-group col-md-2">
		 <label for="situacao"> SITUAÇÃO POSTO </label>
		 <select id="situacao"  name="situacao"  option value="" class="form-control">
		     <?php
			$sim_nao = $row_lrec ['situacao'];
			$valor = $row_lrec ['idsit'];
			echo "<option value='".$valor."'>".$sim_nao."</option>";
			?>
			
			<?php
					$result_cat_post =  "SELECT * FROM sit_posto ";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idsit'].'">'.$row_cat_post['situacao'].'</option>';
					}
				?>
		 	</select>
</div>
	
		<div class="form-group col-md-4">
		<label for="semanap">SEMANA PRESTAÇÃO DE CONTAS</label>
		    <select id="semana"  name="semana"  option value="" class="form-control">
				     <?php
			$sim_nao = $row_lrec ['sem_comparecimento'];
			$valor = $row_lrec ['idsemana'];
			echo "<option value='".$valor."'>".$sim_nao."</option>";
			?>
			<?php
					$result_cat_post =  "SELECT * FROM semana_comp ";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idsemana'].'">'.$row_cat_post['sem_comparecimento'].'</option>';
					}
				?>
					  	</select>
				  </div>
				  
				   <div class="form-group col-md-2">	 
	 <label for="diap"> DIA PRESTAÇÃO</label>
      <select id="diap"  name="diap"  option value="" class="form-control">
	  	     <?php
			$sim_nao = $row_lrec ['dia'];
			$valor = $row_lrec ['iddia'];
			echo "<option value='".$valor."'>".$sim_nao."</option>";
			?>
		    <?php
					$result_cat_post =  "SELECT * FROM dia_comp ";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['iddia'].'">'.$row_cat_post['dia'].'</option>';
					}
				?>
			
		  	</select>
		 </div>
				  
				  
		<div class="form-group col-md-2">
		<label for="dtsol"> DATA DE CADASTRO </label>
		<input type="text" size="20" maxlength="15" readonly=“true” name="dtcad" id="dtcad"  class="form-control" value=" <?php echo date('Y-m-d');?> "    >
		  </div>
		 <div class="form-group col-md-2">
				<label for="usuario">USUÁRIO</label>
		  <input type="text" size="20" maxlength="15" id="usuario" readonly=“true” class="form-control" name="usuario" value= "<?php echo $logado; ?>" >
				</div>
				
		 </div>
		 
		 
	      
<div class="form-row">


		
		  
		<div class="form-group col-md-2">
		 <label for="telefone1"> TELEFONE FIXO DO POSTO </label>
		<input type="text" class="form-control" id="telefonep1" size="13" maxlength="14" name="telefonep1" value="<?php  echo $row_lrec['telefone_posto'] ?>" placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );">
	 </div>
		<div class="form-group col-md-2">
		 <label for="telefone2"> TELEFONE POSTO 2 </label>
		<input type="text" class="form-control" id="telefonep2" size="13" maxlength="14" name="telefonep2" value="<?php  echo $row_lrec['telefonep2'] ?>"placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 <div class="form-group col-md-2">
		 <label for="telefone3"> TELEFONE POSTO 3 </label>
		<input type="text" class="form-control" id="telefonep3" size="12" maxlength="14" name="telefonep3" value="<?php  echo $row_lrec['telefonep3'] ?>" placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		 </div>
		 <div class="form-group col-md-2">
		 <label for="whatsaap"> TELEFONE POSTO 4 </label>
		<input type="text" class="form-control" id="whatsaapp" size="12" maxlength="14" name="whatsaapp" value="<?php  echo $row_lrec['whatsaapp'] ?>"placeholder="insira o zap" onkeydown="javascript: fMasc( this, mTel );">		

		</div>
		
		 <div class="form-group col-md-4">
		 <label for="email">E-MAIL DO POSTO</label>
		 <input id="emailp" name="emailp" type="text" class="form-control" size="60"  value="<?php  echo $row_lrec['email_posto'] ?>"placeholder="E-mail" >
		 
		   </div>
		
		
		 
</div>	 <br><br>     
 
		<div class="form-row">
    <div class="form-group col-md-8">
		 <label for="end">ENDEREÇO FUNCIONAMENTO</label>
		 <input id="endp" name="endp" type="text" class="form-control" size="60"  value="<?php  echo $row_lrec['endereco_posto'] ?>" placeholder="Endereço" >
		 
		   </div>
		    
				
<div class="form-group col-md-2">
		 <label for="estador"> ESTADO </label>
		<input type="text" class="form-control" id="estadop" size="12" maxlength="14" readonly=“true” value="<?php  echo $row_lrec['estadop'] ?>" name="estadop" >		
		</div>
		<div class="form-group col-md-2">
		   <label for="cep"> CEP </label>
		<input type="text" class="form-control" id="cep" size="12" maxlength="14" name="cep" value="<?php  echo $row_lrec['cep'] ?>"  >		
		</div>
		
			   
	</div><br><br>  
	
	<div class="form-row">
    
		    <div class="form-group col-md-2">
		   <label for="dticonvenio"> INICIO CONVÊNIO </label>
		<input type="date" size="20" maxlength="15" name="dticonvenio" id="dticonvenio"  class="form-control" value="<?php  echo $row_lrec['dticonvenio'] ?>">
		   </div>
		   
		    <div class="form-group col-md-2">
		   <label for="dtfconvenio"> FIM CONVÊNIO </label>
		<input type="date" size="20" maxlength="15" name="dtfconvenio" id="dtfconvenio"  class="form-control" value="<?php  echo $row_lrec['dtfconvenio'] ?>" >
		   </div>
            <div class="form-group col-md-1">
		   	<label for="hinicio">H ABRE</label>
		<input type="time" size="20" maxlength="15" name="hinicio" id="hinicio"  class="form-control" value="<?php  echo $row_lrec['horario_ini_funcionamento'] ?>" >
				</div>
				
				<div class="form-group col-md-1">
				 
		  	<label for="hfim">H FECHA</label>
		<input type="time" size="20" maxlength="15" name="hfim" id="hfim"  class="form-control" value="<?php  echo $row_lrec['horario_fim_funcionamento'] ?>" >
			</div>
				
		 <div class="form-group col-md-2">
		 <label for="chefe">NOME PREFEITO</label>
		 <input id="prefeito" type="text" class="form-control" size="60" readonly=“true” name="prefeito" placeholder="" value="<?php  echo $row_lrec['prefeito'] ?>" >		
		</div>
		
			 <div class="form-group col-md-2">
		 <label for="chefe">TEL PREFEITURA 1 </label>
		 <input id="telprefeitoa" type="text" class="form-control" size="60" readonly=“true” name="telprefeitoa" placeholder="" value="<?php  echo $row_lrec['telprefeitoa'] ?>" >		
		</div>	
		
				 <div class="form-group col-md-2">
		 <label for="chefe">TEL PREFEITURA 2 </label>
		 <input id="telprefeitob" type="text" class="form-control" size="60" name="telprefeitob" placeholder="" value="<?php  echo $row_lrec['telprefeitob'] ?>" >		
		</div>	
		
		
		</div>
				
				
				
				
	<div class="form-row">
    <div class="form-group col-md-12">
		 <label for="observa">OBSERVAÇÕES</label>
		 <input id="obs" type="text" class="form-control" size="60" name="obs" placeholder="" value="<?php  echo $row_lrec['obs'] ?>">		
		</div>	
		
		
		
			</div>
			
			
				<div class="form-row">
    <div class="form-group col-md-4">
		 <label for="chefe">CHEFE DE POSTO</label>
		 <input id="chefe" type="text" class="form-control" size="60" name="chefe" placeholder="" value="<?php  echo $row_lrec['chefe'] ?>">		
		</div>	
		<div class="form-group col-md-2">
		 <label for="telefonec1"> TELEFONE FIXO </label>
		<input type="text" class="form-control" id="telefonec" size="12" maxlength="14" name="telefonec"  onkeydown="javascript: fMasc( this, mTel );" value="<?php  echo $row_lrec['telefonec'] ?>">		

		</div>
		 <div class="form-group col-md-2">
		 <label for="telefonec2"> TELEFONE MÓVEL</label>
		<input type="text" class="form-control" id="telefoned" size="12" maxlength="14" name="telefoned" placeholder="insira o tel" onkeydown="javascript: fMasc( this, mTel );" value="<?php  echo $row_lrec['telefoned'] ?>" >		

		</div>
		 </div>
		 <div class="form-group col-md-2">
		 <label for="whatsaapc"> WHATSAAP </label>
		<input type="text" class="form-control" id="whatsaapc" size="12" maxlength="14" name="whatsaapc" placeholder="insira o zap" onkeydown="javascript: fMasc( this, mTel );" value="<?php  echo $row_lrec['whatsaapc'] ?>">		

		</div>
		
		 <div class="form-group col-md-2">
		 <label for="rg">RG</label>
		 <input id="rg" name="rg" type="text" class="form-control" size="60" value="<?php  echo $row_lrec['rg'] ?>" >
		 
		   </div>

		
		
			</div>
<div class="form-row">
    <div class="form-group col-md-8">
		 <label for="emailc">E-MAIL CHEFE</label>
		 <input id="emailc" type="text" class="form-control" size="60" name="emailc" placeholder="" value="<?php  echo $row_lrec['emailc'] ?>">		
		</div>	
		<div class="form-group col-md-2">
			
		
		
		<label for="idchefe">IDCHEFE</label>
		 <input id="idchefe" type="text" class="form-control" readonly=“true” size="60" name="idchefe" placeholder="" value="<?php  echo $row_lrec['idchefe'] ?>">
			</div>	
			
					<div class="form-group col-md-2">
			<label for="idprefeito">IDPREFEITO</label>
		 <input id="idprefeito" type="text" class="form-control" size="60" readonly=“true” name="idprefeito" placeholder="" value="<?php  echo $row_lrec['idprefeito'] ?>" >
			</div>
			
			
			
			</div>		
				
				
            	<div class="form-row">
    <div class="form-group col-md-4">
		 
		  </div>
		
  
		
	<div class="form-group col-md-4">
			 	<input type="submit" value="Salvar" class="btn btn-primary mb-2" >
              </div>
			  
			  
			  <div class="form-group col-md-4">
			 <input type="BUTTON" class="btn btn-primary mb-2" onClick="fecha()" value="Fechar">
			</div>
	</div>

           
           
            
	
   

    </form>
	
	
         	

				
            	


           
           
            
	
   

    </form>
	
	
    </body>
</html>

    