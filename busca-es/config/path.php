<?php

if ($_SERVER['HTTP_HOST'] == "127.0.0.1"){
	// Ambiente de testes
	define("PATH", '/busca-es');
	define("PATH_CLASSES", '/busca-es/classes');
	define("PATH_CSS", '/busca-es/css');
	define("PATH_INCLUDES", '/busca-es/includes');
	define("PATH_JS", '/busca-es/js');
	define("PATH_PAGINAS", '/busca-es/paginas');
}else{
	// Ambiente online
	define("PATH", '/');
	define("PATH_CLASSES", '/classes');
	define("PATH_CSS", '/css');
	define("PATH_INCLUDES", '/includes');
	define("PATH_JS", '/js');
	define("PATH_PAGINAS", '/paginas');
}

?>