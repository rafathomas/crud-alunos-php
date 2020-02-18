<?php
	session_start();
	 
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Erro - Cliente ::..</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">	
	<link rel="icon" href="img/favicon.png" />	
</head>
<body>
	<div class="cabecalho">
	<img src="">
		<div class="menu">
		
		</div>
	</div>

	<div class="conteudo">
		<h1 align="center" class="erro">Erro no Login!</h1>
	</div>

	<div class="rodape">
		<?php include("rodape.php");?>
	</div>

</body>
</html>