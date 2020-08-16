<?php	

	include_once("conexao.php");

$arquivo = 'planilha.xls';

	$html = ini_set( 'default_charset', 'iso-8859-1');
	$html = '';
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
$html .= '<th WIDTH=40>ID</th>';
 $html .= '<th WIDTH=80 >DATA</th>';
 $html .= '<th WIDTH=50 >ÓRGÃO</th>';
 $html .= '<th WIDTH=200>NOME</th>';
 $html .= '<th WIDTH=90>RG</th>';
  $html .= '<th WIDTH=90 >TELEFONE1</th>';
      $html .= '<th WIDTH=50>DT. ENTREGRA</th>';
	  $html .= '<th WIDTH=240>ASSINATURA</th>';
 $html .= '<th WIDTH=70>RESP. ENTREGRA</th>';
	$html .= '</thead>';
	$html .= '<tbody>';
 
$nome = $_POST['nome'];
$mae = $_POST['mae'];
$resolvido = $_POST['resolvido'];
$dtinicio1 = $_POST['dtinicio1'];
$dtfim1 = $_POST['dtfim1'];
$status = $_POST['status'];
$lagenda = $_POST['lagenda'];
$dagenda = $_POST['dagenda'];
$usuario = $_POST['usuario'];
	
	$result_transacoes = "SELECT * from  cadastrorg  
	WHERE  status='$status' and dtsol between '$dtinicio1' and '$dtfim1' order by dtsol, nome asc  " ;
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr>';
		$html .= '<td>'.$row_transacoes['id'] . '</td>';
		$html .= '<td>'.$row_transacoes['dtsol'] . '</td>';
		$html .= '<td>'.$row_transacoes['solicitante'] . '</td>';
		$html .= '<td>'.$row_transacoes['nome'] . '</td>';
		$html .= '<td>'.$row_transacoes['rg'] . '</td>';
		$html .= '<td>'.$row_transacoes['telefone1'] . '</td>';	
		$html .= '<td>'."". '</td>';
		$html .= '<td>'."". '</td>';
		$html .= '<td>'."". '</td>';	
		$html .= '</tr>';
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );

// Envia o conteúdo do arquivo
echo $html;
exit;

?>