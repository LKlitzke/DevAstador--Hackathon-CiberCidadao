<?php 

// ini_set('display_errors', true);
ini_set('display_errors', false);

include_once('classes/url.class.php');
include_once('classes/database.class.php');

if ($_SERVER['HTTP_HOST'] == "127.0.0.1"){
    // Ambiente de testes
    // $url_amigavel = new URL('busca-es');
    $url_amigavel = new URL('busca-es');
}else{
    // Ambiente online
    $url_amigavel = new URL('');
}
$url = $url_amigavel->defineValores();

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

    $existe_template = file_exists("paginas/" . $secao . "/" . $secao.$sufixo.".php");
    if(!$existe_template) {
        header("Location: erro.php");
    }
}

include("index.tpl.php");

?>