<?php 
	#include "DAO.php";
	include "Usuario.php";
	class UsuarioDAO extends DAO{

		public function __construct(){
			parent::__construct();
		}
		#return boolean.
		public function login(Usuario $u){
			$sql = "SELECT * FROM usuario WHERE email = '{$u->getEmail()}' AND senha = '{$u->getSenha()}'";
			$this->mysqli->query($sql);
			return $this->mysqli->affected_rows > 0;
		}
		#return int
		public function getPk(Usuario $u){
			$sql = "SELECT id_usuario FROM usuario WHERE email = '{$u->getEmail()}' AND senha = '{$u->getSenha()}'";
			$result = $this->mysqli->query($sql);
			$n = $result->fetch_object();
			if(isset($n)){
				return $n->id_usuario;	
			}
			return 0;
		}
	}
?>