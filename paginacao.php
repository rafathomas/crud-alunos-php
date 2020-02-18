<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		/** Arquivo para conectar ao banco de dados */
		require("conexao/conectdb.php"); 
		// Verifica se ocorreu algum erro
		if (mysqli_connect_error()) 
		{
			die("Não foi possível conectar-se ao banco de dados: ".mysqli_connect_error());
			exit();
		}

		$num_registro = 3; // número de registro que quero que apareça por página
		$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 0; // aqui eu pego da url o número da página que estou.
		if(empty($pagina))
		{
			$pagina = 1;
		}

		$inicio = ($pagina*$num_registro)-$num_registro;
		
		$sqlCont = mysqli_query($con, "SELECT * FROM clientes LIMIT $inicio, $num_registro");// Crio uma query com limitação de registros
		$numCont = mysqli_num_rows($sqlCont);
		$sqlTotal = mysqli_query($con, "SELECT * FROM clientes"); //faço uma query para o número total de registros no banco
		$numTotal = mysqli_num_rows($sqlTotal);
	?>
		<div>
		<table>
	<?php
		if($numCont > 0)
		{ 
			for($x=0; $x<$numCont; $x++) // faço um for até o número máximo de registros que quero que apareça na página
			{
				$dados = mysqli_fetch_assoc($sqlCont);			
	?>
				<tr>
					<p>
						<td><span><?php echo $dados['nomeCliente'];?></span></td>
						<td> | </td>
						<td><span><?php echo $dados['nomeCliente'];?></span></td>
						<td> | </td>
						<td><span><?php echo $dados['nomeCliente'];?></span></td>
					</p>
				</tr>
	<?php
			}
		}
		else
		{
			echo "<h3>Nenhum Contato registrado.</h3>";
		}
	?> 
		</table> 
		</div>
	<?php
	//A partir daqui para baixo eu faço os links da paginação, anterior, próximo, último, etc, que serve para você navegar pela paginação e acessar os registros.
	if($numCont > 0)
	{

		if($numTotal>$num_registro)
		{
			$seu_site = "/paginacao.php";
			$totalPag = Ceil($numTotal / $num_registro);
			echo "<a href=paginacao.php?pagina=1> Primeiro </a>"; 
			for($i=1; $i <= $totalPag; $i++)
			{
				if($pagina == $i)
				{
					echo "<span>&nbsp; ".$i." &nbsp;<span>";
				}
				else
				{
					$indice = "pagina=".$i;
					echo '<a href=paginacao.php?'.$indice.'>&nbsp; '.$i.' &nbsp;</a>';
				}
			}
			echo '<a href="paginacao.php?pagina='.$totalPag.'">&nbsp; último &nbsp;</a>';
		} 
	} 
	?>
</body>
</html>