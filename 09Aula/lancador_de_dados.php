<?php

$method	= $_SERVER["REQUEST_METHOD"];

$ehPost = $method == "POST";

if($ehPost){
$minimo = $_POST["minimo"];
$maximo = $_POST["maximo"];



if (is_numeric($minimo)) {
	if (is_numeric($maximo)) {
		if ($minimo !=0){

		$valor = rand($minimo,$maximo);

		}else{
			echo "Insira um valor maior que o Minimo";
		}

	}else{
		echo "Resultado";
	}

}else {
	
}
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Fazendo a Atividade 2</title>
</head>
<body>

<?php if($method == "GET") {?>
	<form method="POST">
		<label>Digite os valores</label>
		<p>
			<input name="minimo" />
		<p>
			<input name="maximo" />				
		<p>
			<input type="submit">
	
	</form>

	<?php } else {?>
	
	Resultado: <?php echo $valor ?>

	<?php }?>

</body>
</html>
