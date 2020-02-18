<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Exclusão - Imagem ::..</title>
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

		<?php
			$campo1 = htmlentities($_GET['img']);
		?>

		<div class="conteudo">
			<h1 align="center" class="excluir">Excluir Imagem</h1>
			<form action="uploadExcluir.php" method="POST" name="uploadExcluir"> 	

				<input name="img" type="hidden" id="img" value="<?php echo $campo1; ?>" />


				<div class="linha">
					<p align="center">
						<img src="<?php echo $campo1; ?>"><br><br>
						<input type="reset" value="Cancelar" onClick="history.go(-1)">
	  		    		<input type="submit" value="  Excluir  "> 
	  		    	</p>
	  		    </div>

			</form>
		</div>

	</div>
	<div class="clear"></div>
	<div class="rodape">
		<?php include("rodape.php");?>
	</div>
</body>
</html>


