<?php

$method	= $_SERVER["REQUEST_METHOD"];

$ehPost = $method == "POST";

if($ehPost){
$inicial = $_POST["inicial"];
$mensal = $_POST["mensal"];
$taxa = $_POST["taxa"];
$meses = $_POST["meses"];
$soma = 0;

}else{



}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Calculadora de investimentos</title>
</head>
<body>
	<a href="index.html">Voltar</a>
	<h1>Investimentos</h1>

	<form method="POST">
		<label>Digite os valores</label>
		<p>
		<h4>Valor Inicial</h4>
			<input name="inicial" />
		<p>
		<h4>Valor Mensal</h4>
			<input name="mensal" />
		<p>
		<h4>Juros Mensal</h4>
			<input name="taxa" />
		</p>		
		<p>
		<h4>Qtd de Meses</h4>
			<input name="meses" />				
		<p>
			<input type="submit">
	
	</form>

<?php if($method == "GET") {?>

<?php }else {?>

<?php for($i = 0; $i < $meses; $i++) { ?>

	<?php $soma = $soma + pow(1 + $taxa, $i); ?>

<?php } ?>

	<?php echo ($inicial * pow(1 + $taxa, $meses) + $soma * $mensal); ?>

<?php } ?>		

</body>

</html>