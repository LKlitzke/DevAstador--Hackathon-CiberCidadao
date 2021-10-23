<?php

$sql = "
	SELECT 
		id,
		nome,
		logo,
		conteudo,
		DATE_FORMAT(data_cadastro, '%d/%m/%Y') AS data_cadastro,
		DATE_FORMAT(data_atualizacao, '%d/%m/%Y') AS data_atualizacao
	FROM 
		orgaos
	WHERE 
		id = '{$id}'
	LIMIT 1
";

$registros = array();
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_assoc()){
    	$info = $row;
    }
}

include_once("orgaos_detalhes.tpl.php");

?>