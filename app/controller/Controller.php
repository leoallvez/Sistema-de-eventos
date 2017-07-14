<?php 
	Class Controller{

		public function indexAction(){
			$eventoDAO = new EventoDAO();
			$eventos = $eventoDAO->getEventosNaoOcorreram();
			include "app/view/layout-index.php";
		}

		public function painelAction(){
			if(count($_POST) > 2 && isset($_POST)){
				#Pegando a PK do usuario logado.
				$user = $_SESSION['acesso'];
				$userDAO = new UsuarioDAO();
				$idUser = $userDAO->getPk($user);
				#Pegando os valores do POST.
				$nome = $_POST['nome'];
				$ende = $_POST['endereco'];
				$resp = $_POST['responsavel'];
				$logo = "x.peg";
				$stat = $_POST['status_evento'];
				$data = $_POST['data_evento'];
				#Criando um objeto evento.
				$evento = new Evento($nome,$ende,$resp,$logo,$stat,$data);
				#Gravando no banco.
				$eventoDAO = new EventoDAO();
				$eventoDAO->inserirEvento($evento,$idUser);
				header("Location: painel.php");
			}
			$eventoDAO = new EventoDAO();
			#Criando array de objetos para a tabelas de eventos.
			$eventos = $eventoDAO->getEventos();
			include "app/view/layout-painel.php";
		}

		public function excluirAction(){
			if(isset($_GET['id'])){
				$eventoDAO = new EventoDAO();
				$eventoDAO->deletarEvento($_GET['id']);	
			}
			header("Location: painel.php");
		}

		public function atualizarAction(){
			if(isset($_GET['id'])){
				if(count($_POST) > 2 && isset($_POST)){
					#Pegando a PK do usuario logado.
					$user = $_SESSION['acesso'];
					$userDAO = new UsuarioDAO();
					$idUser = $userDAO->getPk($user);
					#Pegando os valores do POST.
					$nome = $_POST['nome'];
					$ende = $_POST['endereco'];
					$resp = $_POST['responsavel'];
					$logo = "x.peg";
					$stat = $_POST['status_evento'];
					$data = $_POST['data_evento'];
					#Criando um objeto evento.
					$evento = new Evento($nome,$ende,$resp,$logo,$stat,$data);
					#Gravando no banco.
					$eventoDAO = new EventoDAO();
					$eventoDAO->atualizarEvento($evento,$_POST['id'], $idUser);
					header("Location: painel.php");
					#echo $_POST['id'];
				}
				$eventoDAO = new EventoDAO();
				$e = $eventoDAO->getEvento($_GET['id']);
				include "app/view/layout-atualizar.php";	
			}else{
				header("Location: painel.php");	
			}
		}
	}

?>