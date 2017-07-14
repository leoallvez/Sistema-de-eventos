<?php
	#include "DAO.php";
	include "app/model/UsuarioDAO.php"; 

	session_start(); 

	if(!isset($_SESSION['acesso'])){ #se sessao não instaciada
		if(count($_POST) == 2 && isset($_POST['login'])){
			$user = new Usuario($_POST['login'], $_POST['senha'] );
			$userDAO = new UsuarioDAO();
			if($userDAO->login($user)){
				$_SESSION['acesso'] = $user;
				unset($_POST);
				header("Location: painel.php");
			}	
		}
		include 'app/view/layout-login.php';
		die();
	}
?>