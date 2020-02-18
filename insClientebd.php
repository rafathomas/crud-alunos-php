<?php
	include("login.php");
?>
<head>
<meta charset="utf-8">
</head>
<?php  
	 /** Arquivo para conectar ao banco de dados */
	 require("conexao/conectdb.php");   

	 $nomeCliente = htmlentities($_GET['nomeCliente']);
	 $enderecoCliente = htmlentities($_GET['enderecoCliente']);	 
	 $cidadeCliente = htmlentities($_GET['cidadeCliente']);	 
	 $cepCliente = htmlentities($_GET['cepCliente']);
	 $emailCliente = htmlentities($_GET['emailCliente']);

	 $userCliente = htmlentities($_GET['userCliente']);
	 $passCliente = htmlentities($_GET['passCliente']);
	 
	 /** Inserindo na tabela CLIENTES os campos com os valores das variaveis*/
	 $sql = "INSERT INTO clientes (nomeCliente, enderecoCliente, cidadeCliente, cepCliente, emailCliente, userCliente, passCliente) 
	         VALUES ('$nomeCliente', '$enderecoCliente', '$cidadeCliente', '$cepCliente', '$emailCliente', '$userCliente', '$passCliente')";
	
 	if(mysqli_query($con, $sql))
	{
		include("insSucesso.php");
		//echo "Registros gravados com sucesso.";
		//header('location: index.php');
	}
	else
	{
		include("insErro.php");
		//echo "Erro: ".$sql."<br". mysqli_error($con);
	}
 ?>
