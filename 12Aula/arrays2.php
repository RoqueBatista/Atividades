<?php 

$method = $_SERVER["REQUEST_METHOD"];

$pessoa = array();



$pessoa["nome"] = "Roque";
$pessoa["sobrenome"] = "Batista";
$pessoa["endereco"] = "Brasília - DF";


?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
<meta charset="ISO-8859-1">
<title>Arrays2</title>
<meta charset="utf-8">
</head>
<body>
	<a href="index.html">volta</a><p>
	
	<h1>Arrays2 </h1>	

		
	<p>Nome: <?php echo $pessoa["nome"];?></p>
	<p>Sobre Nome: <?php echo $pessoa["sobrenome"];?></p>
	<p>Endereço: <?php echo $pessoa["endereco"];?></p>
	
	<p><?php echo $pessoa["nome"] . " " . $pessoa["sobrenome"] . " " .  $pessoa["endereco"];?></p>
	
	
	<p><?php echo "{$pessoa["nome"]} {$pessoa["sobrenome"]}" ;?></p>
	
	


</body>
</html>
