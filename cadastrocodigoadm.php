<?php
include_once ("conexao1.php");

?>


<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    
        <title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<style type="text/css"> 
		.form-itens:focus {
   box-shadow:none;}</style>
	<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	    
        <title>CADASTRO DE POSTO</title>
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<style type="text/css"> 
		.form-itens:focus {
   box-shadow:none;}</style>
		
</head>
        <body>
       
        
<?php 
			session_start();
			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
			{
			  unset($_SESSION['usuario']);
			  unset($_SESSION['senha']);
			  header('location:index.html');
			  }
			 			$logado = $_SESSION['usuario'];
date_default_timezone_set('America/Sao_Paulo');			
?>


    <body>
<h3><center>CADASTRAMENTO DE POSTO</center></h3>
    <form method="post" action="processarcod.php" name="inserir"  >
         		<div class="form-row">
				
				<div class="form-group col-md-2">
				
		 <label for="id_tipo">TIPO CONVÊNIO</label>
		      <select id="id_tipo" name="id_tipo" class="form-control" >
		    <option value=""></option>
			
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
				<input type="text" class="form-control" name="nome_cidade" id="nome_cidade" placeholder="Pesquisar pelo assunto">
				</div>
				
				<div class="form-group col-md-2">
				<label for="cod_cidade">COD. IBGE</label>
				<input type="text" class="form-control" readonly=“true” name="cod_cidade" id="cod_cidade" >
				</div>
			
			
		
		   
		   	
				
		   
		  
		  	 <div class="form-group col-md-2">
		 <label for="cod_posto">CÓDIGO DO POSTO</label>
				<input type="text" class="form-control" name="cod_posto"  id="cod_posto" placeholder="Insira o código">
          </div>
	
		  
		    </div>
			
			
		 	<div class="form-row">
    <div class="form-group col-md-4">
		 <button type="submit" value="Cadastrar" class="btn btn-primary mb-2">CADASTRAR</button>
		  </div>
		
  
		
	<div class="form-group col-md-4">
			 <input type="button" value="VOLTAR" class="btn btn-primary mb-2" onclick="voltar()". href='abertura.php'
              </div>
			  
			  
			  <div class="form-group col-md-4">
			<button id="btn" class="btn btn-primary mb-2" type="button">TESTE</button>
			</div>
	</div>

           
           
            
	
   

    </form>
	<form>
	
	
	 
	</form>
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

$(document).ready(function () {
   $('form').keypress(function (e) {
        var code = null;
        code = (e.keyCode ? e.keyCode : e.which);                
        return (code == 13) ? false : true;
   });
});

var today = new Date();
var dy = today.getDate();
var mt = today.getMonth()+1;
var yr = today.getFullYear();
document.getElementById('dtsol').value= yr+"-"+mt+"-"+dy;


</script>

</script>		
	
    </body>
</html>        
		




		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script>
            $(function () {
                $("#assunto").autocomplete({
                    source: 'proc_pesq_msg.php'
                });
            });
        </script>
   
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
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script type="text/javascript" src="personalizado.js"></script>
		<script type="text/javascript" src="personalizado2.js"></script>
		<script type="text/javascript" src="personalizado5.js"></script>
	
		
		
		
		
        <script>
            $(function () {
                $("#nome_cidade").autocomplete({
                    source: 'proc_pesq_msg.php'
                });
            });
        </script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		
		
	<script>
$(document).ready(function () {
   
   $("input[name='cod_posto']").(function () {
        var $chefe = $("input[name='chefe']");
		     var $telefonec = $("input[name='telefonec']");
			      var $telefoned = $("input[name='telefoned']");
				       var $rg = $("input[name='rg']");
					   var $emailc= $("input[name='emailc']"); 
		var cod_posto = $(this).val();
        
        $.getJSON('proc_pesq_user3.php', {cod_posto},
            function(retorno){
				  $chefe.val(retorno.chefe);
                $telefonec.val(retorno.telefonec);
				 $telefoned.val(retorno.telefoned);
				  $rg.val(retorno.rg);
				 $emailc.val(retorno.emailc);
                
            }
			
        );        
    });
});

var btn = document.getElementById("btn");
 
        btn.addEventListener("click", function(){
    pay();
    
	});
	
	</script>	
	
         
       


		
	
	
    </body>
</html>