<?php
	include "DAO.php";
	include 'Evento.php';

	class EventoDAO extends DAO{

		public function __construct(){
			parent::__construct();
		}
		#return array um Objeto
		public function getEvento($id){
			$sql = "SELECT * FROM evento WHERE id_evento = ".$id;
			$result = $this->mysqli->query($sql);
			return $result->fetch_object();
		}
		#return array de Objeto
		public function getEventos(){
			$sql = "SELECT * FROM evento ORDER BY data_evento";
			$result = $this->mysqli->query($sql);
			$eventos = array();#Caso não tenha eventos.
			while($e = $result->fetch_object()){
				$eventos[] = $e;
			}
			return $eventos;
		}
		#return array de Objeto
		public function getEventosNaoOcorreram(){
			$hoje = date("Y-m-d");
			$sql = "SELECT * FROM evento WHERE status_evento = true AND data_evento > \"$hoje\" ORDER BY data_evento";
			$result = $this->mysqli->query($sql);
			$eventos = array();#Caso não tenha eventos.
			while($e = $result->fetch_object()){
				$eventos[] = $e;
			}
			return $eventos;
		}
		#return boolean
		public function inserirEvento(Evento $e, $idUser){
			$nome = $e->getNome();
			$ende = $e->getEndereco();
			$resp = $e->getResponsavel();
			$logo = $e->getLogo();
			$stat = $e->getStatus();
			$data = $e->getData();
			$sql = "INSERT INTO evento VALUES (DEFAULT,{$idUser},'{$nome}','{$ende}','{$resp}','{$logo}',{$stat},'{$data}')";
			$this->mysqli->query($sql);
			return $this->mysqli->affected_rows > 0;
		}
		#return boolean.
		public function atualizarEvento(Evento $e, $id, $user){
			$nome = $e->getNome();
			$ende = $e->getEndereco();
			$resp = $e->getResponsavel();
			$logo = $e->getLogo();
			$stat = $e->getStatus();
			$data = $e->getData();
			$sql = "UPDATE evento 
			SET nome = '{$nome}', endereco = '{$ende}', responsavel = '{$resp}', logo = '{$logo}', status_evento = {$stat}, data_evento = '{$data}', id_usuario = '{$user}' 
			WHERE id_evento = ".$id;
			$this->mysqli->query($sql);
			return $this->mysqli->affected_rows > 0;
		}
		#return boolean.
		public function deletarEvento($id){
			$sql = "DELETE FROM evento WHERE id_evento =".$id;
			$this->mysqli->query($sql);
			return $this->mysqli->affected_rows > 0;
		}
	}

?>