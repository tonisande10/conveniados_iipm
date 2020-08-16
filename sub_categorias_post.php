<?php include_once("conexao.php");

	$cod_posto = $_REQUEST['cod_posto'];
	$id_tipo= 2;
	
	$result_sub_cat = "SELECT * FROM tipo_posto1 where id_tipo= $id_tipo  ";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id_tipo'],
			'nome_sub_categoria' => utf8_encode($row_sub_cat['tipo_posto']),
		);
	}
	
	echo(json_encode($sub_categorias_post));
