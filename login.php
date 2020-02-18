<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	 
	//Caso o usuário não esteja autenticado, limpa os dados e redireciona
	if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
	    //Destrói sessão
	    session_destroy();
	 
	    //Limpa variáveis da sessão
		unset($_SESSION['login']); 
		unset($_SESSION['senha']); 
	     
	    //Redireciona para a página de autenticação
	    header('location:index.php');
	}
?>