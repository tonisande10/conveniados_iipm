<?php

include_once './conexao.php';

$cod_posto = filter_input(INPUT_GET, 'cod_posto');
$tipo_posto = filter_input(INPUT_GET, 'id_tipo', FILTER_SANITIZE_NUMBER_INT);
if(!empty($cod_posto)){
    
	$ativo=1;
    $limit = 1;
    $result_aluno = "SELECT * FROM coordenador_posto1 WHERE cod_posto =:cod_posto and ativo =:ativo order by idchefe desc  LIMIT :limit";
    
    $resultado_aluno = $conn->prepare($result_aluno);
    $resultado_aluno->bindParam(':cod_posto', $cod_posto, PDO::PARAM_STR);
	 $resultado_aluno->bindParam(':ativo', $ativo, PDO::PARAM_INT);
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();
    
    $array_valores = array();
    
    if($resultado_aluno->rowCount() != 0){
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
     
	
		$array_valores['chefe'] = $row_aluno['nome']; 
        	$array_valores['telefonec'] = $row_aluno['telefone1']; 
		$array_valores['telefoned'] = $row_aluno['telefone2']; 
		$array_valores['rg'] = $row_aluno['RG']; 
		$array_valores['emailc'] = $row_aluno['e-mail']; 
			$array_valores['idchefe'] = $row_aluno['idchefe']; 
    }else{
		$array_valores['chefe'] = 'não encontrado';
     $array_valores['telefonec'] = 'não encontrado';
    }
    echo json_encode($array_valores);
}