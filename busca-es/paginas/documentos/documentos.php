<?php

if( !empty($_SESSION['usuario_id']) ):
	if(!empty($_POST) && $_GET['send'] == '1'){
		$nome = addslashes($_POST['nome']);
		$conteudo = addslashes($_POST['conteudo']);
		$info1 = addslashes($_POST['info1']);
		$info2 = addslashes($_POST['info2']);
		$link = addslashes($_POST['link']);

		// Upload do logo / imagem
		$destino_pasta = "public/img/".$secao."/";
		$nome_arquivo = date('dmYHis') . "_" . basename($_FILES["logo"]["name"]);
		$destino_arquivo = $destino_pasta . $nome_arquivo;
		$extensao = strtolower(pathinfo($destino_arquivo,PATHINFO_EXTENSION));

		$verificar = getimagesize($_FILES["logo"]["tmp_name"]);
		if($verificar !== false && in_array($extensao, array('jpg','jpeg','png','gif'))) {
			if( move_uploaded_file($_FILES["logo"]["tmp_name"], $destino_arquivo) ){
				$logo_salvar_campo = "logo, ";
				$logo_salvar_valor = "'{$nome_arquivo}', ";

				$continuar = true;
			}else{
				$resultados[0] = [
					'status' => 'error',
					'mensagem' => 'Não moveu o arquivo!'
				];
			}
		} else {
			$resultados[0] = [
				'status' => 'error',
				'mensagem' => 'Serão aceitos somente imagens nos formatos: jpg, jpeg, png e gif! Verifique os dados e tente novamente!'
			];
		}

		if($continuar){
			$sql_insert = "
				INSERT INTO documentos_requisitos (
					id, nome, data_cadastro, conteudo, {$logo_salvar_campo} info1, info2, link
				) VALUES (
					NULL, '{$nome}', NOW(), '{$conteudo}', {$logo_salvar_valor} '{$info1}', '{$info2}', '{$link}'
				);
			";

			if ($result = $mysqli->query($sql_insert)) {
				$resultados[0] = [
					'status' => 'success',
					'mensagem' => 'Documento cadastrado com sucesso!'
				];
			}else{
				$resultados[0] = [
					'status' => 'error',
					'mensagem' => 'Ocorreu um erro inesperado. Tente novamente!'
				];
			}
		}else{
			$resultados[0] = [
				'status' => 'error',
				'mensagem' => 'Ocorreu um erro durante o processo para salvar o logo!'
			];
		}
	}
endif;

$sql = "
	SELECT 
		id,
		nome,
		conteudo,
		DATE_FORMAT(data_cadastro, '%d/%m/%Y') AS data_cadastro,
		DATE_FORMAT(data_atualizacao, '%d/%m/%Y') AS data_atualizacao
	FROM 
		documentos_requisitos
	WHERE 
		nome <> ''
	ORDER BY
		nome ASC
";

$registros = array();
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_assoc()){
    	$registros[] = $row;
    }
}

include_once("documentos.tpl.php");

?>