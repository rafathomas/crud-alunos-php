<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Cadastro - Cliente ::..</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="./js/script.js"></script>
	<link rel="icon" href="img/favicon.png" />		
</head>
<body>
	<div class="geral">
		<div class="cabecalho">
			<div class="menu">
				<?php include("menuPrincipal.php");?>		
			</div>
		</div>

		<div class="conteudo">
			<h1 align="center" class="cadastrar">Cadastro de Clientes</h1>
			<form action="insClientebd.php" method="GET" name="insClientebd"> 
				<div class="linha">
					<label for="nomeCliente">Nome</label>
					<input name="nomeCliente" type="text" id="nomeCliente"  value="" />

					<label for="enderecoCliente">Endereço</label>
					<input name="enderecoCliente" type="text" id="enderecoCliente"  value="" />
				</div>

				<div class="linha">
					<label for="cidadeCliente">Cidade</label>
					<input name="cidadeCliente" type="text" id="cidadeCliente"  value="" />

					<label for="cepCliente">CEP</label>
					<input name="cepCliente" type="text" id="cepCliente"  value="" />
				</div>
				<label for="emailCliente">Email</label>
				<input name="emailCliente" type="text" id="emailCliente" onblur="validacaoEmail(insClientebd.emailCliente)" value="" />
				<div id="msgemail"></div>
				</br></br>

				<fieldset>
					<legend><b>Acesso</b></legend>
					<p align="center">
					<label for="userCliente"><b>User</b></label>
					<input name="userCliente" type="text" id="userCliente" onblur="validacaoUser(insClientebd.userCliente)" value="" />
					<div id="msgUser"></div>
					</p>
					<p align="center">
					<label for="passCliente"><b>Pass</b></label>
					<input name="passCliente" type="password" id="passCliente" onblur="validacaoPass(insClientebd.passCliente)" value="" />
					<div id="msgPass"></div>
					</p>
				</fieldset>
				</br>
				
				<div class="linha">
					<p align="center">
			  		    <input type="reset" value="  Limpar  ">
			  		    <input type="submit" value="Cadastrar">
		  		    </p>
	  		    </div>
			</form>

		</div>
			
	    <!--Posicionar o cursor no nomeCliente -->
	    <script language="javascript">
			document.getElementById('nomeCliente').focus();
		</script>
	</div>
	<div class="clear"></div>
	<div class="rodape">
		<?php include("rodape.php");?>
	</div>
</body>
</html>