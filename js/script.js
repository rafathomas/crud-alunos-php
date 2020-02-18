	    //esta função é usada para passar o nome para a buscaNome.php
function pesquisa(valor)
{
	url="relBuscaNome.php?valor="+valor+"&pagina=1&novaPesq=s";
	ajax(url);
}

function ajax(url)
{
	req = null;
	// Procura por um objeto nativo (Mozilla/Safari)
	if (window.XMLHttpRequest)
	{
		req = new XMLHttpRequest();
		req.onreadystatechange = processReqChange;
		req.open("GET",url,true);
		req.send(null);
		// Procura por uma versão ActiveX (IE)
	} 
	else if (window.ActiveXObject) 
	{
		req = new ActiveXObject("Microsoft.XMLHTTP");
		if (req) 
		{ 
			req.onreadystatechange = processReqChange;
			req.open("GET",url,true);		 
			req.send();
		}
	}
}
 
function processReqChange()
{
	// apenas quando o estado for "completado"
	if (req.readyState == 4) 
	{	 
		// apenas se o servidor retornar "OK"
		if (req.status ==200) 
		{ 
			// procura pela div id="pagina" e insere o conteudo
			// retornado nela, como texto HTML			 
			document.getElementById('pagina').innerHTML = req.responseText;			 
		} 
		else 
		{
			alert("Houve um problema ao obter os dados:n" + req.statusText);
		}
	}
} 

function validacaoEmail(field) 
{ 
	usuario = field.value.substring(0, field.value.indexOf("@")); 
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length); 
	if ((usuario.length >=1) && (dominio.length >=3) && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1) && (dominio.lastIndexOf(".") < dominio.length - 1)) 
	{ 
		document.getElementById("msgemail").innerHTML="<p><span style='color:green'>E-mail válido!</span></p>"; 
	} 
	else
	{ 
		document.getElementById("msgemail").innerHTML="<p><span style='color:red'>Email inválido, verifique!</span></p>"; 
		document.getElementById(field.name).focus();
	} 
}

function validacaoUser(field) 
{ 
	usuario = field.value;

	if ((usuario.length >=5)) 
	{ 
		document.getElementById("msgUser").innerHTML="<p><span style='color:green'>Usuário disponível!</span></p>"; 
	} 
	else
	{ 
		document.getElementById("msgUser").innerHTML="<p><span style='color:red'>Usuário NÃO disponível!</span></p>"; 
		document.getElementById(field.name).focus();
	} 
}

function validacaoPass(field) 
{ 	
	senha = field.value;
	if (senha.length >=5) 
	{ 
		document.getElementById("msgPass").innerHTML="<p><span style='color:green'>Senha ok!</span></p>"; 
	} 
	else
	{ 
		document.getElementById("msgPass").innerHTML="<p><span style='color:red'>Senha pequena!</span></p>"; 
		document.getElementById(field.name).focus();
	} 
}


  /**
  * Função para verificar se o usuário já existe no banco cadastrado
 **/
 function verifica_user() {  
  	 var result = document.getElementById("msgUser");	 //essa var é o local de atualizacao
     var xmlreq = ajax();  //cria a request
	 // Exibi a imagem de progresso
	 result.innerHTML = '<img src="./img/progress.gif"/>';
	 // Iniciar uma requisição
	 xmlreq.open("GET", "verUserbd.php?user="+document.getElementById("userCliente").value, true);
	  
	 // Atribui uma função para ser executada sempre que houver uma mudança de ado
	 xmlreq.onreadystatechange = function(){
		  
		 // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
		 if (xmlreq.readyState == 4) {
			  
			 // Verifica se o arquivo foi encontrado com sucesso
			 if (xmlreq.status == 200) {
				 result.innerHTML = xmlreq.responseText;
			 		 if (result.innerHTML.length == 0)
				 {
					 document.getElementById("msgUser").value="sim";	
				 }
			 }
			 else
			 {
				 result.innerHTML = "Erro: " + xmlreq.statusText;
			 }
		 }
	 };
	 xmlreq.send(null);
 }


//usado para esconder a div onde o usuário digita uma pesquisa 
function MudarEstado(el) 
{
    var display = document.getElementById(el).style.display;
    alert("teste");
    if(display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
}