<head>
<meta charset="utf-8">
</head>
<?php
	/** Arquivo para conectar ao banco de dados */
	require("conexao/conectdb.php");

	//variaveis da URL		
	$vUser = $_GET["user"];
	
    if ($vUser!=""){
		$consulta = "SELECT * FROM clientes WHERE userCliente = '$vUser'";			

		//alterado
		$resultado = $mysqli->query($consulta) or die(include("erro.php"));
		
		if($resultado->num_rows>0)
		{
			echo "Usuário já cadastrado!";
		}
		else
		{
			echo "";
		}
	}
	else
	{
		echo "Sem nome definido!";
	}
?>