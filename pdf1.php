<?php	

	include_once("conexao1.php");
	$html ='<table style="table-layout:fixed; width:100px">';
	$html ='<table margin= 5';
	$html = '<table border=1';	
	 
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th style="width:1%;">I</th>';
	$html .= '<th style="width:4%;">CÓD</th>';
	$html .= '<th style="width:5%;">CIDADE</th>';

	$html .= '<th style="width:5%;">STATUS</th>';
    $html .= '<th style="width:5%;">CHEFE</th>';
     $html .= '<th style="width:5%;">TELEFONE CHEFE</th>';
      $html .= '<th style="width:5%;">TELEFONE POSTO</th>';
       
       $html .= '<th style="width: 5%;">VALIDADE CONVENIO</th>';
       $html .= '<th style="width: 20%;">ENDEREÇO</th>';
       $html .= '<th style="width: 30%;">CEP</th>';
       $html .= '<th  style="max-width:25%;">E-MAIL CHEFE</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';	

	$result_usuario="SELECT (@rownum:=@rownum+1) AS ORD, p.nome_cidade, p.chefe, p.telefonec, p.emailc, p.dtfconvenio, p.endereco_posto,p.cep, l.local, s.situacao, p.telefone_posto, t.tipo_posto, p.idposto, p.cota_mensal, p.codigos1_cod_posto from  (SELECT @rownum:=0) r, postos1 p inner join tipo_posto1 t on (p.id_tipo=t.id_tipo) inner join local_rec1 l on (p.local_recebimento_carteiras = l.idlocal_rec) inner join sit_posto s on (s.idsit=p.situacao)  order by p.nome_cidade ASC limit 1000" ;
$resultado_usuario=mysqli_query($conn,$result_usuario);
$contador = 0;

while ($row_transacoes= mysqli_fetch_assoc ($resultado_usuario)){
 
 $contador++;
$html .= "<tr><td>$contador</td>";
	$html .= '<td>'.$row_transacoes['codigos1_cod_posto'] . "</td>";
	$html .= '<td>'.$row_transacoes['nome_cidade'] . "</td>";

		$html .= '<td>'.$row_transacoes['situacao'] . "</td>";
		$html .= '<td>'.$row_transacoes['chefe'] . "</td>";
    	$html .= '<td>'.$row_transacoes['telefonec'] . "</td>";
    		$html .= '<td>'.$row_transacoes['telefone_posto'] . "</td>";
    
    	$html .= '<td>'.$row_transacoes['dtfconvenio'] . "</td>";
    	$html .= '<td>'.$row_transacoes['endereco_posto'] . "</td>";
    	$html .= '<td>'.$row_transacoes['cep'] . "</td>";
    		$html .= '<td>'.$row_transacoes['emailc'] . "</td></tr>";
    	$html .= '</tbody>';
    	


	}
	
		$html .= '</table>';
	
	$html2 = '';
	$html2 = '<table border=0>';	
	$html2 .= '<tr border="0">';
	$html2 .= '<td>'.'&nbsp'.'</td>';
	$html2 .= '</tr>';
	$html2 .= '</table>';
	
	
	
	
	
	
	$html1 = '';
	$html1 = '<table border=1>';	
	
	

		$html1 .= '<tr>';
		$html1 .= '<td colspan="4" align=center>'.'RESUMO DAS SOLICITAÇÕES'.'</td>';
$html1 .= '</tr>';
	$html1 .= '<thead>';
	$html1 .= '<tr>';
$html1 .= '<th colspan="3"  WIDTH=40>TIPO DE POSTO</th>';
$html1 .= '<th WIDTH=40>QUANTIDADE</th>';
$html1 .= '</tr>';
$html1 .= '</thead>';
	$html1 .= '<tbody>';
	
	
	$consulta1 = mysqli_query($conn,"SELECT * FROM postos1 where id_tipo=2 ");
	$NumeroLinhas1 = mysqli_num_rows($consulta1);
	//TODOS OS POSTOS MUNICIPAIS

	$consulta2 = mysqli_query($conn,"SELECT * FROM postos1 where id_tipo=2 and situacao=1 ");
	$NumeroLinhas2 = mysqli_num_rows($consulta2);	
	//POSTOS MUNICIPAIS ATIVOS

	$consulta3 = mysqli_query($conn,"SELECT * FROM postos1 where id_tipo=2 and situacao=2 ");
	$NumeroLinhas3 = mysqli_num_rows($consulta3);	
	
	$consulta4 = mysqli_query($conn,"SELECT * FROM postos1 where id_tipo=2 and situacao=3 ");
	$NumeroLinhas4 = mysqli_num_rows($consulta4);
	
	$consulta5 = mysqli_query($conn,"SELECT * FROM postos1 where id_tipo=1 ");
	$NumeroLinhas5 = mysqli_num_rows($consulta5);
	
	$consulta6 = mysqli_query($conn,"SELECT * FROM postos1 where id_tipo=3 ");
	$NumeroLinhas6 = mysqli_num_rows($consulta6);
	
	
	$html1 .= '<tr border="0">';
		$html1 .= '<td colspan="3" align=center>'."POSTOS MUNICIPAIS TOTAL".'</td>';
		$html1 .= '<td align=center >'.$NumeroLinhas1.'</td>';
	$html1 .= '</tr>';
	
		$html1 .= '<tr border="0">';
		$html1 .= '<td colspan="3" align=center>'."POSTOS MUNICIPAIS ATIVO".'</td>';
		$html1 .= '<td align=center >'.$NumeroLinhas2.'</td>';
	$html1 .= '</tr>';
	
		$html1 .= '<tr border="0">';
		$html1 .= '<td colspan="3" align=center>'."POSTOS MUNICIPAIS INATIVO".'</td>';
		$html1 .= '<td align=center >'.$NumeroLinhas3.'</td>';
	$html1 .= '</tr>';
	
	$html1 .= '<tr border="0">';
		$html1 .= '<td colspan="3" align=center>'."POSTOS MUNICIPAIS ATIVO/SEM MOVIMENTO".'</td>';
		$html1 .= '<td align=center >'.$NumeroLinhas4.'</td>';
	$html1 .= '</tr>';
	
	$html1 .= '<tr border="0">';
		$html1 .= '<td colspan="3" align=center>'."POSTOS PONTO SAC".'</td>';
		$html1 .= '<td align=center >'.$NumeroLinhas5.'</td>';
	$html1 .= '</tr>';	
	
		$html1 .= '<tr border="0">';
		$html1 .= '<td colspan="3" align=center>'."POSTOS SETRE".'</td>';
		$html1 .= '<td align=center >'.$NumeroLinhas6.'</td>';
	$html1 .= '</tr>';	
	
	
		$html1 .= '</tbody>';
		
	$html1 .= '</table>';

//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	
	require_once("dompdf2/autoload.inc.php");//Criando a Instancia
	$dompdf = new DOMPDF();
	$dompdf->setPaper('A4', 'landscape');
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">IIPM - Relatório de Convêniados</h1>
			'. $html .''. $html2 .''. $html1 .'
		
		');

	//Renderizar o html
	$dompdf->render();
	

	//Exibibir a página
	$dompdf->stream(
		"conveniadosiipm.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>





			
		
		