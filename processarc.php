<!DOCTYPE html>
<?php
    include_once ("conexao.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
       <body>
        <?php
            $nome = $_POST["nome"];
			$solicitante = $_POST["solicitante"];	
            $motivo = $_POST["motivo"];
            $rg = $_POST["rg"];
			$dtnascimento = $_POST["dtnascimento"];
			$cpf = $_POST["cpf"];
			$pai = $_POST["pai"];
			$mae = $_POST["mae"];
			$dtsol = $_POST["dtsol"];
			$estadon = $_POST["estadon"];
			$cidaden = $_POST["cidaden"];
			$telefone1 = $_POST["telefone1"];
			$telefone2 = $_POST["telefone2"];
			$telefone3 = $_POST["telefone3"];
			$whatsaap = $_POST["whatsaap"];
			$end = $_POST["end"];
			$cidader = $_POST["cidader"];
			$estador = $_POST["estador"];
			$cep = $_POST["cep"];
			$status = $_POST["status"];
			$usuario = $_POST["usuario"];
			$observa = $_POST["observa"];
			$lagenda = $_POST["lagenda"];
			$Hagenda = $_POST["Hagenda"];
			$dagenda = $_POST["dagenda"];
			$resolvido = $_POST["resolvido"];
			
			
            
            $inserir = "INSERT INTO cadastrorg (id, nome,solicitante, motivo, rg, dtnascimento, cpf, pai,mae, dtsol, estadon,cidaden, telefone1, telefone2, telefone3, whatsaap, end, cidader, estador,cep, status, usuario, observa, lagenda, Hagenda, dagenda, resolvido) VALUES 
									(NULL, '$nome','$solicitante', '$motivo', '$rg', '$dtnascimento', '$cpf', '$pai','$mae', '$dtsol', '$estadon','$cidaden', '$telefone1', '$telefone2', '$telefone3', '$whatsaap', '$end', '$cidader', '$estador','$cep', '$status', '$usuario', '$observa', '$lagenda', '$Hagenda', '$dagenda', '$resolvido');";
            mysqli_query($conn, $inserir) or die (mysqli_error($conexao));
			mysqli_close($conn);
			echo "<br><br><a href='abertura.php'>Registro Relizado com Sucesso. Clique para Voltar à página inicial</a>";
            echo "<br><br><a href='cadastrorg.php'>Novo Cadastro. Clique para Cadastrar</a>";
        ?>
    </body>
</html>