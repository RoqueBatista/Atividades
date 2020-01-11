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
<title>lancador_de_dados_v2</title>
</head>
<body>
	<a href="index.html">Voltar</a><p>
	<h1>Lançador de dados Versão 2</h1>
	
	<form method="POST">
		<label>Digite os valores</label>
		
		<p>
			<input name="minimo" type="number"/>
		</p>
		<p>
			<input name="maximo" type="number"/>
		</p>			
		<p>
			<input type="submit">
		</p>
	
	</form>

<?php if($method == "GET") {?>

	<?php } else {?>
	
	Resultado: <?php echo $valor ?>

	<?php }?>

</body>
</html>


