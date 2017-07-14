<?php
	Class Evento{
		private $nome;
		private $endereco;
		private $responsavel;
		private $logo;
		private $status;
		private $data;

		public function __construct($nome = "", $endereco = "",$responsavel = "",$logo = "",$status = 0, $data = ""){
			$this->nome =  $nome;
			$this->endereco = $endereco;
			$this->responsavel = $responsavel;
			$this->logo = $logo;
			$this->status = $status;
			$this->setDateForDataBase($data);
		}

		public function getNome(){
			return $this->nome;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function getResponsavel(){
			return $this->responsavel;
		}

		public function getLogo(){
			return $this->logo;
		}


		public function getStatus(){
			return $this->status;
		}

		public function getData(){
			return $this->data;
		}

		public function setDateForDataBase($data = ""){
		#Esse metodo converte data para o banco de dados
			if($data == ""){
				$this->data = "0000-00-00";
			}else{
				#Separa uma string em um array apos encontrar certos elementos.
				$dados = explode("/",$data); 
				if(count($dados) != 3){
					$this->data = $data;
				}else{
					$this->data = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
				}
			}
		}
	}

	/**$evento = new Evento("Inaguracao","Rua da Luz","Leonardo","estencao",true,"20/07/2007");

	echo "Nome: ".$evento->getNome()."<br>";
	echo "Endereco: ".$evento->getEndereco()."<br>";
	echo "Responsavel: ".$evento->getResponsavel()."<br>";
	echo "Logo: ".$evento->getLogo()."<br>";
	if($evento->getStatus()){
		echo "Evento true";
	}else{
		echo "Evento false";
	}
	echo "<br>";
	echo "Data: ".$evento->getData()."<br>";*/
?>