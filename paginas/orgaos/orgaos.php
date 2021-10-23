<?php

$sql = "
	SELECT 
		id,
		nome,
		conteudo,
		DATE_FORMAT(data_cadastro, '%d/%m/%Y') AS data_cadastro,
		DATE_FORMAT(data_atualizacao, '%d/%m/%Y') AS data_atualizacao
	FROM 
		orgaos 
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

include_once("orgaos.tpl.php");

?>