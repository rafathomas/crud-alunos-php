<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Relatório - Cliente ::..</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="./js/script.js"></script>	
	<link rel="icon" href="img/favicon.png" />	
</head>
<body>
	<div class="cabecalho">
		<div class="menu">
			<?php 
				include("menuPrincipal.php");
				$primeiravez = 0;
			?>		
		</div>
	</div>	
	<div class="geral">
		<div class="conteudo">
			<h1 align="center" class="relatorio">Relatório de Clientes</h1>
			<p align="center">	
				<input type="text" name="nomePesquisa" id="nomePesquisa" placeholder="Nome do Cliente" onkeyup="pesquisa(this.value)">
			</p>
			<?php


				if(isset($_GET['novaPesq']))
					if($_GET['novaPesq']=="s")
						$novaPesq = "s";
					else
						$novaPesq = "n";

				$valor = isset($_GET['valor']) ? $_GET['valor'] : 0; // aqui eu pego da url o nome digitado.
				$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 0; // aqui eu pego da url o número da página que estou.
				
				if(isset($_GET['novaPesq']))			
				{
					if($novaPesq=="n")
					{
						include("relBuscaNome.php");
					}
				}
				else
				{
					?>
						<div id="pagina">
							<?php
							if($primeiravez == 0)
							{
								include("relMostraClientes.php");
								$primeiravez++;
							}	
							?>						
						</div>
					<?php
				}
			?>
		</div>
	</div> <!-- Final GERAL   -->
    <!--Posicionar o cursor no nomeCliente -->
    <script language="javascript">
		document.getElementById('nomePesquisa').focus();
		document.getElementById('nomePesquisa').title="Digite as iniciais do nome do cliente para pesquisar.";
	</script>

	<div class="rodape">
		<?php include("rodape.php");?>
	</div>
</body>
</html>