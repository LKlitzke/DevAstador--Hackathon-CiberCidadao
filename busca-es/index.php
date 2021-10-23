<?php 

//ini_set('display_errors', true);
ini_set('display_errors', false);

include_once('classes/url.class.php');
include_once('classes/database.class.php');

include_once('config/path.php');

// inicia sessão do usuário
session_start();

if ($_SERVER['HTTP_HOST'] == "127.0.0.1"){
    // Ambiente de testes
    $url_amigavel = new URL('busca-es');
}else{
    // Ambiente online
    $url_amigavel = new URL('');
}
$url = $url_amigavel->defineValores();

// $mysqli é a conexão com o banco de dados
$db = new database();
$mysqli = $db->connect();
$mysqli->set_charset("utf8mb4");

//######## VERIFICAR SE A SEÇÃO PASSADA É VÁLIDA #########
$secao = $_GET['secao'];
$id = $_GET['id'];
$titulo = $_GET['titulo'];

if(empty($secao)){
    $secao = 'home';
}else{
    // Verificar se é pagina de detalhes
    if(!empty($_GET['titulo'])){
        $sufixo = "_detalhes";
    }else{
        $sufixo = "";
    }

    // Trocar hifen/espaço por underline
    $secao = str_replace('-', '_', str_replace(' ', '_', $secao));

    $existe_template = file_exists("paginas/" . $secao . "/" . $secao.$sufixo.".php");
    //echo "paginas/" . $secao . "/" . $secao.$sufixo.".php";

    if(!$existe_template) {
        header("Location: " . PATH . "/erro.php");
    }
    if(in_array($secao,array('secretaria','autarquia','informacoes_gerais'))){
        header("Location: " . PATH . "/construcao.php");
    }
}

include("index.tpl.php");

?>