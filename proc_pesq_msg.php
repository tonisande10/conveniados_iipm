<?php
include_once './conexao.php';

$nome_cidade = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);


//SQL para selecionar os registros
$result_msg_cont = "SELECT * FROM cidade1   WHERE nome_cidade LIKE '%".$nome_cidade."%' ORDER BY nome_cidade";

//Seleciona os registros
$resultado_msg_cont = $conn->prepare($result_msg_cont);
$resultado_msg_cont->execute();

while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row_msg_cont['nome_cidade'];
	
}

echo json_encode($data);