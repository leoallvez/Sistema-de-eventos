<?php 
	session_start();
	unset($_SESSION['acesso']);
	session_destroy();
	header("Location: painel.php");
?>