<?php

$sql = "
	SELECT 
		id,
		nome_setor,
		nome_label,
		conteudo,
		DATE_FORMAT(data_cadastro, '%d/%m/%Y') AS data_cadastro,
		DATE_FORMAT(data_atualizacao, '%d/%m/%Y') AS data_atualizacao
	FROM 
		setores 
	WHERE 
		nome_setor <> ''
	ORDER BY
		nome_setor ASC
";

$registros = array();
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_assoc()){
    	$registros[] = $row;
    }
}

include_once("home.tpl.php");

?>