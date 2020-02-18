<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Banco - Imagens ::..</title>
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
			<h1 align="center" class="cadastrar">Banco de Imagens</h1>
			<form action="uploadImagembd.php" method="POST" name="uploadImagembd" enctype="multipart/form-data"> 
				<div class="linha">
					<input name="descricaoImagem" type="hidden" id="descricaoImagem"  value="" />
				</div>

				<div class="linha">
					<div class="linha">
						<p align="center">
							<nav id="relImagens">
									<?php
									$pasta = './uploads/';
									$arquivos = glob("$pasta{*.jpg,*.png,*.gif,*.bmp}", GLOB_BRACE);
									foreach($arquivos as $img){?>
										<div style="float: left; margin: 5px;">
											<div style='position:relative; top:0px; left:0px;'>
												<a href="<?php echo $img; ?>" id="imagens"><img src="<?php echo $img; ?>" alt="" width="132" height="140"/>
												</a>
												<div style='position:absolute; top:3px; left:118px;'>
													<a href="uploadExcConfirma.php?img=<?php echo $img; ?>" id="imagens">
														<img src="img/excluir.png" width="10" height="15">
													</a>
												</div>
												
											</div>
										</div>									
									<?php } ?>
							</nav>
						</p>
					</div>
					<br>

				</div>

				</br></br>
			</form>
		</div>

	</div>
	<div class="clear"></div>
	<div class="rodape">
		<?php include("rodape.php");?>
	</div>
</body>
</html>