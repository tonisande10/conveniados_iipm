<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
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
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE cadastrorg SET nome='$nome', solicitante = '$solicitante',   motivo = '$motivo',   rg ='$rg', 	dtnascimento = '$dtnascimento'  , cpf = '$cpf', pai = '$pai' , 	mae = '$mae', 	dtsol = '$dtsol', estadon = '$estadon',  cidaden = '$cidaden',  telefone1 ='$telefone1', 	telefone2 = '$telefone2', telefone3 = '$telefone3', whatsaap = '$whatsaap', 	end ='$end', 	cidader = '$cidader',
estador = '$estador', 	cep = '$cep', 	status = '$status',  usuario = '$usuario',  observa = '$observa', 	lagenda = '$lagenda',  	Hagenda = '$Hagenda', dagenda='$dagenda',resolvido='$resolvido'  WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: form_alteracao.php?id=$id");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: form_alteracao.php?id=$id");
}
?>