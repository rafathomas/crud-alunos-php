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

			$idCliente  = mysqli_real_escape_string($con,$_GET["idCliente"]);
			$sql = "DELETE FROM clientes WHERE idCliente=".$idCliente;
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