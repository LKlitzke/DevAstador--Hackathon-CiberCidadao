<?php

class url{
	
	private $Projeto_dir = '';
	private $Request_uri = '';
	public $posicao_secao = ''; 
	public $posicao_id = ''; 
	public $posicao_titulo = ''; 
	public $posicao_valor = ''; 
	
	public function __construct($pasta){
		$this->Projeto_dir = $pasta;
		$this->Request_uri = $_SERVER['REQUEST_URI'];
	}
	
	public function defineValores(){
		$this->Request_uri = str_replace('/'.$this->Projeto_dir.'/','',$this->Request_uri);
		define('_URI',$this->Request_uri);
		$explode = explode('/',$this->Request_uri);
		
		$this->posicao_secao = 0;
		$this->posicao_id = 1;
		$this->posicao_titulo = 2;
		$this->posicao_valor1 = 3;
		
		// ### GET SECAO
		if(strpos($explode[$this->posicao_secao],'?') !== false){
			if(strpos($explode[$this->posicao_secao],'?') > 0){
				$_GET['secao'] = $explode[$this->posicao_secao];
			}else{
				$_GET['secao'] = '';
			}
		}else{
			$_GET['secao'] = $explode[$this->posicao_secao];
		}
		
		// ### GET SECAO
		if(strpos($explode[$this->posicao_id],'?') !== false){
			if(strpos($explode[$this->posicao_id],'?') > 0){
				$_GET['id'] = $_GET['ref'] = $_GET['paginax'] = $explode[$this->posicao_id];
			}else{
				$_GET['id'] = $_GET['ref'] = $_GET['paginax'] = '';
			}
		}else{
			$_GET['id'] = $_GET['ref'] = $_GET['paginax'] = $explode[$this->posicao_id];
		}
		
		// ### GET TITULO
		if(strpos($explode[$this->posicao_titulo],'?') !== false){
			if(strpos($explode[$this->posicao_titulo],'?') > 0){
				$_GET['titulo'] = $explode[$this->posicao_titulo];
			}else{
				$_GET['titulo'] = '';
			}
		}else{
			$_GET['titulo'] = $explode[$this->posicao_titulo];
		}
		
		// ### GET VALOR
		if(strpos($explode[$this->posicao_valor1],'?') !== false){
			if(strpos($explode[$this->posicao_valor1],'?') > 0){
				$_GET['valor1'] = $explode[$this->posicao_valor1];
			}else{
				$_GET['valor1'] = '';
			}
		}else{
			$_GET['valor1'] = $explode[$this->posicao_valor1];
		}

		return $explode;
	}
}

?>