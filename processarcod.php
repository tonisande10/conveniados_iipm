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
            $cod_posto = $_POST["cod_posto"];
			
				
				
			
            
            $inserir = "INSERT INTO codigos1 (cod_posto, id_tipo ,idcidade, nome_cidade) VALUES 
									('$cod_posto','$id_tipo', '$cod_cidade','$nome_cidade');";
            mysqli_query($conn, $inserir) or die (mysqli_error($conn));
			mysqli_close($conn);
		
			echo "<br><br><a href='cadastrocodigoadm.php'>Registro Relizado com Sucesso. Clique para Novo Cadastro</a>";
			echo "<br><br><a href='aberturaadm.php'>Clique Aqui para voltar a tela inicial</a>";
            
        ?>
    </body>
</html>