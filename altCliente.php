<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Alteração - Clientes ::..</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" href="img/favicon.png" />		
</head>
<body>
	<?php require("conexao/conectdb.php"); ?>
	<div class="cabecalho">
		<div class="menu">
			<?php include("menuPrincipal.php");?>		
		</div>
	</div>

	<div class="conteudo">
		<h1 align="center" class="alterar">Atualização dos dados do Cliente</h1>
		<?php
			$idCliente = $_GET['idCliente'];
            $sql = "SELECT * FROM clientes WHERE idCliente=".$idCliente;
            $query = mysqli_query($con, $sql);           			
			while($dados = mysqli_fetch_array($query, MYSQLI_BOTH)) 
            { 
        ?> 

		<form action="altClientebd.php" method="GET" name="altClientebd"> 

			<input name="idCliente" type="hidden" id="idCliente"  value="<?php echo "$dados[0]"; ?>" />
			<label for="nomeCliente">Nome</label>
			<input name="nomeCliente" type="text" id="nomeCliente"  value="<?php echo "$dados[1]"; ?>" />

			<label for="enderecoCliente">Endereço</label>
			<input name="enderecoCliente" type="text" id="enderecoCliente"  value="<?php echo "$dados[2]"; ?>" />
			
			<label for="cidadeCliente">Cidade</label>
			<input name="cidadeCliente" type="text" id="cidadeCliente"  value="<?php echo "$dados[3]"; ?>" />

			<label for="cepCliente">CEP</label>
			<input name="cepCliente" type="text" id="cepCliente"  value="<?php echo "$dados[4]"; ?>" />
			
			<label for="emailCliente">Email</label>
			<input name="emailCliente" type="text" id="emailCliente"  value="<?php echo "$dados[5]"; ?>" />
			
			</br></br>
			<label for="userCliente"><b>Usuário</b></label>
			<input name="userCliente" type="text" id="userCliente"  value="<?php echo "$dados[6]"; ?>" />

			<label for="passCliente"><b>Senha</b></label>
			<input name="passCliente" type="password" id="passCliente"  value="<?php echo "$dados[7]"; ?>" />
			</br>
			
			<div class="linha">
				<p align="center">
					<input type="reset" value="Cancelar" onClick="history.go(-1)">
  		    		<input type="submit" value="  Alterar  "> 
  		    	</p>
  		    </div>
		</form>
		<?php
			}
		?>		
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