<?php

$method	= $_SERVER["REQUEST_METHOD"];

if($method == "POST"){

	$ehpost = $method == "POST";

	$valor = $_POST ["valor"];

	if (is_numeric ($valor)){

		$tipo = "Numerico";

	}else{
		$tipo ="Não numerico";

	}

}else{

}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Refazendo a Atividade 2</title>
</head>
<body>

<?php if($method == "GET") {?>
	<form method="POST">
		<label>Digite o valor</label> <input name="valor" /> <input
			type="submit">
	</form>

	<?php } else {?>

	<h1>
		Valor
		<?php echo $tipo ?>
	</h1>

	<?php }?>

</body>
</html>
