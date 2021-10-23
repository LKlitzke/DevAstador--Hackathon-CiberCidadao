<?php

class database{
	public $db = "mysql";
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "busca_es";
    public $port = 3308;
    public $connect;
    
    public function connect() {
        try{
			$conn = new mysqli("".$this->host."","".$this->user."","".$this->pass."","".$this->dbname."");

			if($conn){
				return $conn;
			}else{
				die('Erro: Banco de Dados não conectou!');
			}

        } catch (Exception $ex) {
            die('Erro: Banco de Dados fora do ar!');
        }
    }
}

?>
