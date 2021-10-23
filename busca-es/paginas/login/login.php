<?php

if( !empty($_SESSION['usuario_id']) ):
	// Sair do sistema
	if($_GET['logout'] == '1'){
		session_destroy();
	}

	// Redirecionar usuário
	header("Location: " . PATH);
else:
	$resultado = [];

	if(!empty($_POST) && $_GET['send'] == '1'){
		$email_login = addslashes($_POST['email_login']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "
			SELECT 
				id, nome, email, profissao
			FROM 
				usuarios
			WHERE 
				(email = '{$email_login}' OR login = '{$email_login}')
				AND senha = '{$senha}'
			LIMIT 1
		";
		if ($result = $mysqli->query($sql)) {
			if ($result->num_rows == 0) {
			    $resultados[0] = [
					'status' => 'error',
					'mensagem' => 'Verifique seus dados e tente novamente!'
				];
			} elseif ($result->num_rows == 1) {
				$usuario = $result->fetch_assoc();

				$_SESSION['usuario_id'] = $usuario['id'];
				$_SESSION['usuario_nome'] = $usuario['nome'];
				$_SESSION['usuario_email'] = $usuario['email'];
				$_SESSION['usuario_profissao'] = $usuario['profissao'];

				// Redirecionar usuário
				header("Location: " . PATH);
			}
		}else{
			$resultados[0] = [
				'status' => 'error',
				'mensagem' => 'Ocorreu um erro inesperado. Tente novamente!'
			];
		}
	}

	include_once("login.tpl.php");

endif;

?>