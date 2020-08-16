
<?php

include_once './conexao.php';

$cod_cidade = filter_input(INPUT_GET, 'cod_cidade',FILTER_SANITIZE_NUMBER_INT);

if(!empty($cod_posto)){
    
	$ativo=1;
    $limit = 1;
    $result_aluno = "SELECT * FROM prefeito1 WHERE idcidade =:cod_cidade order by idprefeito desc  LIMIT :limit";
    
    $resultado_aluno = $conn->prepare($result_aluno);
    $resultado_aluno->bindParam(':cod_cidade', $cod_cidade, PDO::PARAM_INT);
	
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();
    
    $array_valores = array();
    
    if($resultado_aluno->rowCount() != 0){
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
     
	
		$array_valores['prefeito'] = $row_aluno['nomeprefeito']; 
        	$array_valores['telprefeitoa'] = $row_aluno['telefone1']; 
		 	$array_valores['telprefeitob'] = $row_aluno['telefone2']; 
	
    }else{
		$array_valores['prefeito'] = 'não encontrado';
     
    }
    echo json_encode($array_valores);
}