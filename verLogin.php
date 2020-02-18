<head>
<meta charset="utf-8">
</head>
<?php  
	/** Arquivo para conectar ao banco de dados */
	require("conexao/conectdb.php");   

	//variáveis passadas por POST
	//o stripslashes e real_escape protegem do mySQL injection 
	$nomeLogin = stripslashes($_POST['nomeLogin']);
	$passLogin = stripslashes($_POST['passLogin']);	 
	 
	/** Inserindo na tabela CLIENTES os campos com os valores das variaveis*/
	$sql = "SELECT * FROM clientes WHERE userCliente = '$nomeLogin' AND passCliente = '$passLogin'";
	$sqlResult = mysqli_query($con, $sql);

 	if(mysqli_num_rows($sqlResult)>0)
	{
		//iniciando uma sessão
		session_start();

		//criando variáveis para a sessão
		$_SESSION['login'] = $nomeLogin;
		$_SESSION['senha'] = "admin";

		include("principal.php");
	}
	else
	{
		header("Location: errLogin.php");
		//echo "Erro: ".$sql."<br". mysqli_error($con);
	}
 ?>
