<?php
	include("login.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modelo CRUD</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">	
		<link rel="stylesheet" type="text/css" href="css/estilo.css">	
	</head>
	<body>
		<?php	
			require("conexao/conectdb.php");	

			$idCliente  	  = mysqli_real_escape_string($con,$_GET["idCliente"]);
			$nomeCliente      = mysqli_real_escape_string($con,$_GET["nomeCliente"]);
			$enderecoCliente  = mysqli_real_escape_string($con,$_GET["enderecoCliente"]);
			$cidadeCliente    = mysqli_real_escape_string($con,$_GET["cidadeCliente"]);
			$cepCliente       = mysqli_real_escape_string($con,$_GET["cepCliente"]);
			$emailCliente     = mysqli_real_escape_string($con,$_GET["emailCliente"]);

			$userCliente      = mysqli_real_escape_string($con,$_GET["userCliente"]);
			$passCliente      = mysqli_real_escape_string($con,$_GET["passCliente"]);

			$sql = "UPDATE clientes SET nomeCliente='$nomeCliente', enderecoCliente='$enderecoCliente',	
			cidadeCliente='$cidadeCliente', cepCliente='$cepCliente', 
			emailCliente='$emailCliente', userCliente='$userCliente', passCliente='$passCliente' WHERE idCliente='".$idCliente."'";
		 	
		 	if(mysqli_query($con, $sql))
			{
				header('location: relCliente.php'); 
			}
			else
			{
				echo "Erro: ".$sql."<br". mysqli_error($con);
			}
		?>
	</body>
</html>