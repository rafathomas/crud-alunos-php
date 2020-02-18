<?php 
 	/** Local que está rodando o php*/
	$hostName ='127.0.0.1';
	/** Nome de usuario que tem acesso */
	$userName = 'root';
	/** Senha do usuario , no exemplo está em branco */
	$userPass = '';
	/** Banco de dados desejado */
	$banco = 'bdempresa';
	/** mysql_connect -- Abre uma conexão com o servidor MySQL*/	
	
	$con = new mysqli($hostName, $userName, $userPass, $banco);

	// Caso algo tenha dado errado, exibe uma mensagem de erro
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>
