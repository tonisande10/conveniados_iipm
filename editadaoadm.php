<?php
session_start();
include_once("conexao1.php");
$idposto = filter_input(INPUT_POST, 'idposto', FILTER_SANITIZE_NUMBER_INT);
      $id_tipo = $_POST["id_tipo"];
			$nome_cidade = $_POST["nome_cidade"];	
            $cod_cidade = $_POST["cod_cidade"];
            $pop = $_POST["pop"];
			$km = $_POST["km"];
			$local_receb = $_POST["local_receb"];
			$modo_pcontas = $_POST["modo_pcontas"];
			$cota = $_POST["cota"];
			$cod_posto = $_POST["cod_posto"];
			$situacao = $_POST["situacao"];
			$semana = $_POST["semana"];
			$dia = $_POST["diap"];
			$dtcad = $_POST["dtcad"];
			$usuario = $_POST["usuario"];
			$telefonep1 = $_POST["telefonep1"];
			$telefonep2 = $_POST["telefonep2"];
			$telefonep3 = $_POST["telefonep3"];
			$whatsaapp = $_POST["whatsaapp"];
			$emailp = $_POST["emailp"];
			$endp = $_POST["endp"];
			$estadop = $_POST["estadop"];
			$cep = $_POST["cep"];
			$dticonvenio = $_POST["dticonvenio"];
			$dtfconvenio = $_POST["dtfconvenio"];
			$hinicio = $_POST["hinicio"];
			$hfim = $_POST["hfim"];
			$prefeito = $_POST["prefeito"];
			$telprefeitoa = $_POST["telprefeitoa"];
			$telprefeitob = $_POST["telprefeitob"];
			$obs = $_POST["obs"];
			$chefe = $_POST["chefe"];
			$telefonec = $_POST["telefonec"];
			$telefoned = $_POST["telefoned"];
			$whatsaapc = $_POST["whatsaapc"];
				$rg = $_POST["rg"];
				$emailc = $_POST["emailc"];
				$idchefe = $_POST["idchefe"];
				$idprefeito = $_POST["idprefeito"];
				
	
          
           
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE postos1 SET id_tipo='$id_tipo', nome_cidade='$nome_cidade', idcidade='$cod_cidade', pop='$pop', situacao='$situacao'
,sem_comparecimento='$semana', modo_pconta='$modo_pcontas', dia_comparecimento_IIPM='$dia',   distancia_ssa='$km'
 ,dtcad='$dtcad', usuario='$usuario', usuario='$usuario', local_recebimento_carteiras='$local_receb', telefone_posto='$telefonep1', cota_mensal='$cota',
telefonep2='$telefonep2', telefonep3='$telefonep3', whatsaapp='$whatsaapp', email_posto='$emailp', 	endereco_posto='$endp', estadop='$estadop',	cep='$cep', 
dticonvenio='$dticonvenio', dtfconvenio='$dtfconvenio', horario_ini_funcionamento='$hinicio', horario_fim_funcionamento='$hfim',
 prefeito='$prefeito', telprefeitoa='$telprefeitoa', telprefeitob='$telprefeitob', obs='$obs', chefe='$chefe',  	
 telefonec='$telefonec', telefoned='$telefoned', whatsaapc='$whatsaapc', rg='$rg', emailc='$emailc', idchefe='$idchefe', 	
 idprefeito='$idprefeito'  
 WHERE idposto='$idposto'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: form_alteracaoadm.php?idposto=$idposto");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: form_alteracaoadm.php?idposto=$idposto");
}

?>