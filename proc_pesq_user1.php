<?php

include_once './conexao.php';

$nome_cidade = filter_input(INPUT_GET, 'nome_cidade', FILTER_SANITIZE_STRING);
if(!empty($nome_cidade)){
    
    $limit = 1;
    $result_aluno = "SELECT * FROM cidade
	WHERE nome_cidade =:nome_cidade LIMIT :limit";
    
    $resultado_aluno = $conn->prepare($result_aluno);
    $resultado_aluno->bindParam(':nome_cidade', $nome_cidade, PDO::PARAM_STR);
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();
    
    $array_valores = array();
    
    if($resultado_aluno->rowCount() != 0){
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
        $array_valores['pop'] = $row_aluno['pop']; 
       
    }else{
        $array_valores['pop'] = 'não encontrado';        
    }
    echo json_encode($array_valores);
}