<!DOCTYPE html>
<?php
    include_once ("conexao1.php");
 ?>	
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
       <body>
        <?php
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
				
				
			
            
            $inserir = "INSERT INTO postos1 (idposto, id_tipo, nome_cidade ,idcidade, pop, distancia_ssa, local_recebimento_carteiras, modo_pconta, cota_mensal, codigos1_cod_posto, situacao, sem_comparecimento, dia_comparecimento_IIPM, dtcad, usuario, telefone_posto, telefonep2, telefonep3, whatsaapp, email_posto,endereco_posto, estadop, cep, 	dticonvenio, 	dtfconvenio, horario_ini_funcionamento, horario_fim_funcionamento, prefeito, telprefeitoa, telprefeitob, obs, chefe, telefonec, telefoned, whatsaapc, rg, emailc, idchefe, idprefeito) VALUES 
									(NULL, '$id_tipo','$nome_cidade', '$cod_cidade', '$pop', '$km', '$local_receb', '$modo_pcontas','$cota', '$cod_posto', '$situacao','$semana', '$dia', '$dtcad', '$usuario', '$telefonep1', '$telefonep2', '$telefonep3', '$whatsaapp','$emailp', '$endp', '$estadop', '$cep', '$dticonvenio', '$dtfconvenio',  '$hinicio', '$hfim', '$prefeito', '$telprefeitoa', '$telprefeitob', '$obs', '$chefe', '$telefonec', '$telefoned', '$whatsaapc', '$rg', '$emailc', '$idchefe', '$idprefeito');";
            mysqli_query($conn, $inserir) or die (mysqli_error($conn));
			mysqli_close($conn);
		
			echo "<br><br><a href='cadastropostoadm.php'>Registro Relizado com Sucesso. Clique para Novo Cadastro</a>";
			echo "<br><br><a href='aberturaadm.php'>Clique Aqui para voltar a tela inicial</a>";
            
        ?>
    </body>
</html>