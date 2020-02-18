<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Upload - Imagem ::..</title>
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
			<h1 align="center" class="cadastrar">Uplod de Arquivos</h1>
			<form action="uploadImagembd.php" method="POST" name="uploadImagembd" enctype="multipart/form-data"> 

				<div class="linha">
					<div class="linha">
						<p align="center">
						<input type="button" value="Remover" onClick="menos();">
						<input type="button" value="Adicionar" onClick="mais();">
						</p>
					</div>
					<br>

					<div class="linha">
						<p align="center">
							<label for="arquivo">Arquivo 1</label>
							<input type="file" name="arquivo[]" id="arquivo" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
							<br>
							<div id="aqui"></div>
						</p>
					</div>

				</div>

				<div class="linha">
						<p align="center">
						<input type="submit" value="   Enviar  ">
						</p>
					</div>
			</form>
		</div>
			
	    <!--Posicionar o cursor no nomeCliente -->
	    <script language="javascript">
			var input = 2;
			var iCamposTotal = 5;

			function mais() {
				if (input <= iCamposTotal)
				{
					var nova = document.getElementById("aqui");
					var novadiv = document.createElement("div");
					var nomediv = "div";
					var htmlInsert = "<div class='linha'><p align='center'><label for='arquivo'>Arquivo "+input+" </label>";
					htmlInsert += "<input type='file' name='arquivo[]' id='arquivo' accept='.gif,.jpg,.jpeg,.png,.doc,.docx'>";

					novadiv.innerHTML = htmlInsert+"</p></div>";
					
					nova.appendChild(novadiv);
					input++;
				}
			}

			function menos() {
			   aqui.removeChild(aqui.lastChild);
			   input--;
			}

		</script>

	</div>
	<div class="clear"></div>
	<div class="rodape">
		<?php include("rodape.php");?>
	</div>
</body>
</html>