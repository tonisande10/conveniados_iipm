<?php
     //define o estilo da página pdf
     $style='<html><head>
     
     
        <style type="text/css">
       @page {
            margin: 120px 10px 80px 80px;
        }
        #head{
            background-image: url("fad.jpg");
            background-repeat: no-repeat;
            font-size: 25px;
            text-align: center;
            height: 110px;
            width: 100%;
            position: fixed;
            top: -100px;
            left: 0;
            right: 0;
            margin: auto;
        }
        #corpo{
            width: 1000px;
            position:center;
            
            
        }
       
        table{
            border-collapse: collapse;
            width: 100%;
            position:center;
            
            
            
        }
        td{
            padding: 3px;
           word-wrap:break-word;

        }
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: right;
            border-top: 1px solid gray;
        }
        #footer .page:after{ 
            content: counter(page); 
        }
        </style></head><body>';
	include_once("conexao1.php");
    //define o cabeçalho da página
    $head='<div id="head">Relação de Conveniados IIPM</div>
           <div id="corpo">';

    //recebendo os dados do Formulário
    $quant      = 22;
    $tipo       = 'Unidade';
    $produto    = 'Garrafa PET';
    $obs        = 'Sem Obs';

    //define o corpo do documento
    $body='
        <table border="1px" >
        
        
            <thead>
            <tr bgcolor="#ccc">
                <td   WIDTH=3 >Nº</td>
                <td  WIDTH=5>Código</td>
                <td  WIDTH=10>Municipio</td>
                <td  WIDTH=10>Unidade</td>
                <td  WIDTH=10>Tipo</td>
                 <td  WIDTH=10>Status</td>
                 <td  WIDTH=10>Logradouro</td>
                <td  WIDTH=10>CEP</td>
                  <td  WIDTH=10>Coordenador</td>
     
                <td  WIDTH=10>Telefone_1</td>
                <td  WIDTH=10>Telefone_2</td>
                <td  WIDTH=20>Email</td>
              
               
               
                
                 
                
            </tr></thead><tbody>';
$result_usuario="SELECT (@rownum:=@rownum+1) AS ORD, p.nome_cidade, p.chefe, p.telefonec, p.emailc, p.dtfconvenio, p.endereco_posto,p.cep, l.local, s.situacao, p.telefone_posto, t.tipo_posto, p.idposto, p.cota_mensal, p.codigos1_cod_posto from  (SELECT @rownum:=0) r, postos1 p inner join tipo_posto1 t on (p.id_tipo=t.id_tipo) inner join local_rec1 l on (p.local_recebimento_carteiras = l.idlocal_rec) inner join sit_posto s on (s.idsit=p.situacao)  order by p.codigos1_cod_posto ASC limit 500" ;
$resultado_usuario=mysqli_query($conn,$result_usuario);
$contador = 0;

while ($row_transacoes= mysqli_fetch_assoc ($resultado_usuario)){
 
 $contador++;
    
        $tmp='<tr >
            <td  WIDTH=3 >'.$contador.'</td>
            <td   WIDTH=5>'.$row_transacoes['codigos1_cod_posto'].'</td>
            <td  WIDTH=10>'.$row_transacoes['nome_cidade'].'</td>
                 <td  WIDTH=10>teste</td>
           <td  WIDTH=10>'.$row_transacoes['tipo_posto'].'</td> 
                 <td  WIDTH=10> '.$row_transacoes['situacao'].'</td>
                    <td  WIDTH=20> '.$row_transacoes['endereco_posto'].'</td>
                    <td  WIDTH=10> '.$row_transacoes['cep'].'</td>
                  <td  WIDTH=20>'.$row_transacoes['chefe'].'</td>
  
                  <td  WIDTH=10>'.$row_transacoes['telefone_posto'].'</td>
                  <td  WIDTH=10>'.$row_transacoes['telefonec'].'</td>
                   <td  WIDTH=20>'.$row_transacoes['emailc'].'</td>
            
                  ';
                  
         
                   
            
        $body = $body.$tmp;
    
}

    //define o rodapé da página
    $footer='</tbody>
        </table>
        </div>
        <div id="footer">
            <p class="page">Página </p>
        </div></body></html>  ';
        
        
        
        

    //concatenando as variáveis
    $html=$head.$style.$body.$footer;

    //gerando o pdf
   
   //referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

    //inclui a biblioteca do dompdf
   require_once("dompdf2/autoload.inc.php");//Criando a Instancia

	
	
	$dompdf = new DOMPDF();
	$dompdf->setPaper('A4', 'landscape');
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream("compras.pdf");

?>