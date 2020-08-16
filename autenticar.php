<?php
include_once ("conexao1.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='aberturaadm.php'", 4000);
            }
			 function sucesso1(){
                setTimeout("window.location='abertura.php'", 4000);
            }
            function failed(){
                setTimeout("window.location='index.html'", 4000);
            }
        </script>
    </head>
    <body>
        <?php
        session_start();
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            
            $consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);
			$linha = mysqli_fetch_assoc($consulta);
            
            if($linhas == 0){
                echo"O login falhou. Você será redirecionado para a página de login em 4 segundos.";
                echo"<script language='javascript'>failed()</script>";
               } 
			   else if ($linha['nivel'] == 2) {
				    $_SESSION["usuario"]=$_POST["user"];
                $_SESSION["senha"]=$_POST["pass"];
                echo"Você foi logado com sucesso. Redirecionando em 4 segundos.";
                echo"<script language='javascript'>sucesso()</script";
         } 
		  else {
								   
				    $_SESSION["usuario"]=$_POST["user"];
                $_SESSION["senha"]=$_POST["pass"];
                echo"Você foi logado com sucesso. Redirecionando em 4 segundos.";
                echo"<script language='javascript'>sucesso1()</script";
            }
		  
		
        ?>
    </body>
</html>