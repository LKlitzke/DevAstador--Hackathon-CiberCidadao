<?php

function retorna_pagina($tabela){
	if(empty($tabela)){
		return '';
	}

	switch ($tabela) {
		case 'documentos_requisitos': 
			return 'documentos'; break;
		case 'empresas_publicas': 
			return 'empresas_publicas'; break;
		case 'orgaos': 
			return 'orgaos'; break;
		case 'setores': 
			return 'setores'; break;
		
		default:
			return ''; break;
	}
}

$palavra_chave = addslashes($_POST['palavra_chave']);
$resultados = [];

$tabelas = [
	'documentos_requisitos',
	// 'empresas_publicas',
	// 'orgaos',
	'setores'
];

if(!empty($palavra_chave)){
	$palavras_uteis = [];
	
	// Fazer separação de palavras e verificar se tem alguma palavra solta
	$palavras = explode(' ', $palavra_chave);
	if(!empty($palavras)){
		foreach ($palavras as $palavra) {
			if(!empty($palavra)){
				$palavras_uteis[] = $palavra;
			}
		}
	}

	if(!empty($palavras_uteis)){
		foreach ($palavras_uteis as $palavra) {
			// Verificar o conteúdo dentro das tabelas
			foreach ($tabelas as $tabela) {
				if( strpos( $palavra, $tabela ) !== false ){
					$resultados[] = [
						'tipo' => 'tabela',
						'nome' => '' . $tabela . '',
						'pagina' => retorna_pagina($tabela),
						'link' => PATH . '/' . retorna_pagina($tabela),
						'conteudo' => 'Talvez essa página possa te ajudar!!'
					];
				}

				$filtro = "";
				$sql1 = "DESCRIBE {$tabela}";
				if ($result = $mysqli->query($sql1)) {
				    while($row = $result->fetch_assoc()){
				    	$filtro .= " || " . $row['Field'] . " LIKE '%{$palavra}%' ";
				    }
				}

				$sql2 = "SELECT * FROM {$tabela} WHERE 0 {$filtro} ";
				if ($result2 = $mysqli->query($sql2)) {
					// Algum resultado encontrado
					$nome = "";
					if($result2->num_rows > 0){
						$sql3 = "SELECT nome_setor FROM setores WHERE nome_label = '".retorna_pagina($tabela)."' ";
						if ($result3 = $mysqli->query($sql3)) {
							while($row3 = $result3->fetch_assoc()){
								$nome = $row3['nome_setor'];
							}
						}

						while($row2 = $result2->fetch_assoc()){
							$resultados[] = [
								'tipo' => 'detalhes',
								'nome' => '' . $tabela . '',
								'pagina' => '' . $nome . '',
								'id' => '' . $row2['id'] . '',
								'link' => PATH . '/' . retorna_pagina($tabela) . '/' . $row2['id'] . '/' . urlencode($row2['nome']),
								'conteudo' => 'Talvez o conteúdo dessa página possa te ajudar!!'
							];
						}
					}
				}
			}
		}

	}else{
		$resultados[0] = [
			'status' => 'error',
			'mensagem' => "Não foi digitada nenhuma palavra"
		];
	}
}else{
	$resultados[0] = [
		'status' => 'error',
		'mensagem' => "Não foi digitada nenhuma palavra"
	];
}

if(empty($resultados)){
	$resultados[0] = [
		'status' => 'error',
		'mensagem' => 'Nenhum resultado foi encontrado para sua busca!'
	];
}

include_once("busca.tpl.php");

?>