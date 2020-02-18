<?php
	include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Principal - Cliente ::..</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">	
	<link rel="icon" href="img/favicon.png" />	
</head>
<body>
	<div class="cabecalho">
	<img src="">
		<div class="menu">
			<?php include("menuPrincipal.php");?>		
		</div>
	</div>

	<div class="conteudo">
		<h1 align="center" class="home">Escolha uma das opções do Menu!</h1>
	</div>
    <!--Posicionar o cursor no nomeCliente -->
    <script language="javascript">
		document.getElementById('nomeCliente').focus();
	</script>

	<div class="rodape">
		<?php include("rodape.php");?>
	</div>

</body>
</html>