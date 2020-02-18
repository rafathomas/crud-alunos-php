<?php 
	//inicia uma sessão e destroi todas as variáveis dela
	session_start();
	if (isset($_SESSION['login']) and isset($_SESSION['senha']) )
	{ 
		unset($_SESSION['login']); 
		unset($_SESSION['senha']); 
	} 
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>..:: Login - Cliente ::..</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" href="img/favicon.png" />	
</head>
<body>
	<div class="cabecalho">
		<div class="menu">
					
		</div>
	</div>

	<div class="conteudo">
		<h1 align="center" class="cadastrar">Login</h1>
		<form action="verLogin.php" method="POST" name="verLogin"> 
			<label for="nomeLogin">Nome</label>
			<input name="nomeLogin" type="text" id="nomeLogin" placeholder="Nome de acesso" value="" />

			<label for="passLogin">Senha</label>
			<input name="passLogin" type="password" id="passLogin" placeholder="Senha de acesso" value="" />
			<div class="linha">
				<p align="center">
		  		    <input type="reset"  value="   Limpar   ">
		  		    <input type="submit" value="   Enviar   ">
		  		</p>
		  	</div>
		</form>
	</div>
    <!--Posicionar o cursor no nomeLogin -->
    <script language="javascript">
		document.getElementById('nomeLogin').focus();
	</script>

	<div class="rodape">
		<?php include("rodape.php");?>
	</div>

</body>
</html>