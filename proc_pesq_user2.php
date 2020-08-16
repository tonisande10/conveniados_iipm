<?php

include_once './conexao.php';

$nome_cidade = filter_input(INPUT_GET, 'nome_cidade', FILTER_SANITIZE_STRING);

$id_tipo = filter_input(INPUT_GET, 'pqp', FILTER_SANITIZE_NUMBER_INT);

if(!empty($nome_cidade)){
    
	
    $limit = 1;
    $result_aluno = "SELECT * FROM codigos1 WHERE nome_cidade =:nome_cidade and id_tipo =:id_tipo LIMIT :limit";
    
    $resultado_aluno = $conn->prepare($result_aluno);
    $resultado_aluno->bindParam(':nome_cidade', $nome_cidade, PDO::PARAM_STR);
	  $resultado_aluno->bindParam(':id_tipo', $id_tipo, PDO::PARAM_INT);
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();
    
    $array_valores = array();
    
    if($resultado_aluno->rowCount() != 0){
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
     
		$array_valores['cod_posto'] = $row_aluno['cod_posto']; 
        
    }else{
		$array_valores['cod_posto'] = 'não encontrado';
      
		  		
    }
    echo json_encode($array_valores);
}