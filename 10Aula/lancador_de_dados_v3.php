<?php

$method	= $_SERVER["REQUEST_METHOD"];

$ehPost = $method == "POST";

if($ehPost){
$minimo = $_POST["minimo"];
$maximo = $_POST["maximo"];
$dados = $_POST["dados"];

}else{



}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>lancador_de_dados_v3</title>
</head>
<body>
	<a href="index.html">Voltar</a>
	<h1>Lançador de dados Versão 3</h1>

	<form method="POST">
		<label>Digite os valores</label>
		<p>
			<input name="minimo" />
		<p>
			<input name="maximo" />	
		<p>
			<input name="dados" />				
		<p>
			<input type="submit">
	
	</form>

<?php if($method == "GET") {?>

<?php }else {?>
<?php for($i = 0; $i < $dados ; $i++) { ?>

	<?php echo $resultado= rand($minimo,$maximo)?><p>	
	
<?php }?>
<?php }?>

</body>
</html>