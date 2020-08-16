<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">
	</head>
	</body>
		<form method="POST" action="processa_cad_usuario.php">
			
			Cidade: 
				<select name="select_niveis_acesso">
					<option>Selecione</option>
					<?php
						$result_niveis_acessos = "SELECT * FROM cidade";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome']; ?></option> <?php
						}
					?>
				</select><br><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>