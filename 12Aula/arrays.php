<?php 

$method = $_SERVER["REQUEST_METHOD"];

$lista = array();



$lista[] = 10;
$lista[] = 20;
$lista[] = 30;


?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<meta charset="utf-8">
</head>
<body>
	<a href="index.html">volta</a><p>
	
	<h1>Arrays</h1>
	<p> Implode Array: <?php echo implode(" | ", $lista); ?></p>

		
	<p>Implode 0 : <?php echo $lista[0];?></p>
	<p>Implode 1 : <?php echo $lista[1];?></p>
	<p>Implode 2 : <?php echo $lista[2];?></p>
	
	
	


</body>
</html>
