<?php
/*
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['arquivo']['name']);

	echo '<pre>';
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	    echo "Arquivo válido e enviado com sucesso.\n";
	} else {
	    echo "Possível ataque de upload de arquivo!\n";
	}

	echo 'Aqui está mais informações de debug:';
	print_r($_FILES);

	print "</pre>";
*/
?>

<?php

	$uploaddir = './uploads/';
	$condicao = 0;
	foreach ($_FILES["arquivo"]["error"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        $tmp_name = $_FILES["arquivo"]["tmp_name"][$key];
	        $name = $_FILES["arquivo"]["name"][$key];
	        $uploadfile = $uploaddir . basename($_FILES['arquivo']['name'][$key]);

	        if (move_uploaded_file($tmp_name, $uploadfile)) {
			    $condicao++;
			} 
	    }
	}

    if ($condicao == 1) 
    {
	    include("uploadSucesso.php");
	} 
	else 
	{
	    include("uploadErro.php");
	}


?>