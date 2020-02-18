<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<?php
		require("./conexao/conectdb.php");
		
		$num_registro = 5; // número de registro que quero que apareça por página
		$valor  = isset($_GET['valor']) ? $_GET['valor'] : 0; // aqui eu pego da url o nome digitado.
		$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 0; // aqui eu pego da url o número da página que estou.
		if(empty($pagina))
		{
			$pagina = 1;
		}

		$inicio = ($pagina*$num_registro)-$num_registro;

 		
 		$SQLc = "SELECT * FROM clientes  WHERE nomeCliente LIKE '%$valor%' LIMIT $inicio, $num_registro";
 		$SQLt = "SELECT * FROM clientes  WHERE nomeCliente LIKE '%$_GET[valor]%'";
 		$sqlCont = mysqli_query($con, $SQLc);// Crio uma query com limitação de registros
		$numCont = mysqli_num_rows($sqlCont);
		$sqlTotal = mysqli_query($con, $SQLt); //faço uma query para o número total de registros no banco
		$numTotal = mysqli_num_rows($sqlTotal);

		echo "<br><p align=center>";

		echo "</br></br><a class=botaoNova href=relCliente.php> <b>Nova Consulta</b> </a>";

		echo "</p><br><br>" ;

		if($numTotal>0)
		{
			?>
			<table class="tabelaRelatorio">
				<thead>
					<tr>
						<th width="50" align="center">ID</th>
						<th width="400">Nome do Cliente</th>
						<th width="400">Email</th>
						<th width="45" align="center">Alt</th>
						<th width="45" align="center">Exc</th>
					</tr>
				</thead>
		<?php

		if($numCont > 0)
		{ 
			for($x=0; $x<$numCont; $x++) // faço um for até o número máximo de registros que quero que apareça na página
			{
				$dados = mysqli_fetch_assoc($sqlCont);			
		?>
				<tr>
					<td><p align="center"><?php echo "$dados[idCliente]"; ?></p></td>
					<td><?php echo "$dados[nomeCliente]"; ?></td>
					<td><?php echo "$dados[emailCliente]"; ?></td>
					<td><p align="center"><a href="altCliente.php?idCliente=<?php echo "$dados[idCliente]"; ?>"><img src="img/editar.png" id="editar" width="50%"></a></p></td>
					<td><p align="center"><a href="excCliente.php?idCliente=<?php echo "$dados[idCliente]"; ?>"><img src="img/excluir.png" id="excluir" width="50%"></a></p></td>
				</tr>
		<?php
			}
		}
		?>
			</table>
<?php
	if($numCont > 0)
	{
		echo "<br><p align=center>";
		if($numTotal>$num_registro)
		{
			$seu_site = "/relCliente.php";
			$totalPag = Ceil($numTotal / $num_registro);
			
			for($i=1; $i <= $totalPag; $i++)
			{
				if($pagina == $i)
				{
					echo "<span class=botaoAtual>&nbsp; <b>$i</b> &nbsp;</span>";
				}
				else
				{
					$indice = "pagina=".$i."&valor=".$valor."&novaPesq=n";
					echo "<a class=botao href=relCliente.php?$indice>&nbsp; $i &nbsp;</a>";	
				}
			}
		}
		echo "</p><br><br>" ;
	} 
}
?>