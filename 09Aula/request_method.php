<?php

$method = $_SERVER["REQUEST_METHOD"];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Refazendo Atividade 1 </title>
</head>
<body>
	<?php if($method == "GET"){?>;
	<h1>"Bem Vindo"</h1>
	<h3>"Esta é nossa pagina incial"</h3>
	<?php } else {?>;
	<h1>Request feito com Sucesso</h1>
	<h3>Dados enviados com Sucesso</h3>
	<?php }?>;
		
</body>
</html>