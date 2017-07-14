<?php 
	class DAO{
		protected $host;
		protected $user;
		protected $password;
		protected $dataBase;
		protected $mysqli;

		public function __construct(){
			#$this->host = "mysql.hostinger.com.br";
			$this->host = "localhost";
			#$this->user = "u667820252_leona";
			$this->user = "root";
			#$this->password = "B0oks!=pcs@xpt0";
			$this->password = "";
			#$this->dataBase = "u667820252_event";
			$this->dataBase = "eventos";
			$this->mysqli = new mysqli($this->host,$this->user,$this->password, $this->dataBase);
			if(mysqli_connect_errno()){
				die('Nao foi possivel conecter ao banco!');
				exit();
			}
		}
	}
?>