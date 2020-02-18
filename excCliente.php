<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Excluir - Cliente ::..</title>
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
		<h1 align="center" class="excluir">Confirma Exclusão do Cliente?</h1>
		<?php
			$idCliente = $_GET['idCliente'];
            $sql = "SELECT * FROM clientes WHERE idCliente=".$idCliente;
            $query = mysqli_query($con, $sql);           			
			while($dados = mysqli_fetch_array($query, MYSQLI_BOTH)) 
            {            
            	
        ?> 
		<form action="excClientebd.php" method="GET" name="excClientebd"> 
			<input name="idCliente" type="hidden" id="idCliente"  value="<?php echo "$dados[0]"; ?>" />
			<label for="nomeCliente">Nome</label>
			<input name="nomeCliente" type="text" readonly id="nomeCliente"  value="<?php echo "$dados[1]"; ?>" />

			<label for="enderecoCliente">Endereço</label>
			<input name="enderecoCliente" type="text" readonly id="enderecoCliente" value="<?php echo "$dados[2]"; ?>" />
			
			<label for="cidadeCliente">Cidade</label>
			<input name="cidadeCliente" type="text" readonly id="cidadeCliente"  value="<?php echo "$dados[3]"; ?>" />

			<label for="cepCliente">CEP</label>
			<input name="cepCliente" type="text" readonly id="cepCliente"  value="<?php echo "$dados[4]"; ?>" />
			
			<label for="emailCliente">Email</label>
			<input name="emailCliente" type="text" readonly id="emailCliente"  value="<?php echo "$dados[5]"; ?>" />
			<div class="linha">
				<p align="center">
					<input type="reset" value="Cancelar" onClick="history.go(-1)">
  		    		<input type="submit" value="  Excluir  "> 
  		    	</p>
  		    </div>
		</form>
		<?php
			}
		?>		
	</div>

	<div class="rodape">
		<?php include("rodape.php");?>
	</div>

</body>
</html>