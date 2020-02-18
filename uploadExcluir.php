<?php
	$campo1 = htmlentities($_POST['img']);
	if(unlink($campo1))
	{
		include("relImagem.php");
	}
	else
	{
		include("uploadErro.php");
	}
?>