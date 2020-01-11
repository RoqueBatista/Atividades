<?php 

//Criar uma variável
$titulo = "Dinâmico";
$numerico = 10;
$reais = 10.0;
$array[] = 10;
$array[] = 20.5;
$array[] = "String";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta charset="UTF-8">
<title>Vari�veis</title>
</head>
<body>
	<h1>Título: <?php echo $titulo;?></h1>
	<h2>Orientações das Variáveis</h2>
	<p>$titulo: <?php var_dump($titulo); ?></p>
	<p>$titulo: <?php var_dump($numerico); ?></p>
	<p>$titulo: <?php var_dump($reais); ?></p>
	<p>$titulo: <?php var_dump($array); ?></p>
	<p>$array (com var_dump): <?php var_dump($array); ?></p>
</body>
</html>
