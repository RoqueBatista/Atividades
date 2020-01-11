<?php 

$method = $_SERVER["REQUEST_METHOD"];

$ehPost = $method == "POST";

if ($method == "POST") {
$minimo = $_POST["minimo"];
$maximo = $_POST["maximo"];
$ndados = $_POST["ndados"];
$resultado = array();

	for($i = 0 ; $i < $ndados; $i++ ){
		$resultado[] = rand($minimo, $maximo);
	}
}
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
<meta charset="ISO-8859-1">
<title>Lançador de Dados</title>
<meta charset="utf-8">
</head>
<body>
	
	
<?php if($method == "GET") {?>

<form method="POST">
		<a href="index.html">volta</a>
		<h1>Lançador de Dados</h1>
	
		<label>Minimo</label>
		<p>
		<input name="minimo" type="number"/>
		</p>
		<label>Maximo</label>
		<p>
		<input name="maximo" type="number"/>
		</p>
		<label>Nr Dados</label>
		<p>
		<input name="ndados" type="number"/>
		</p>
		<p>
		<input type="submit" value="Lançador de Dados"/>
		</p>
		
	</form>


<?php } else {?>
	
	<h2>Implode</h2>
	<p> Implode Array: <?php echo implode(" | ", $resultado); ?></p>
	
	<h2>com For</h2>
	<?php for($i = 0 ; $i < $ndados; $i++ ){?>
	<p> Dado:<?php echo ($i + 1)?> : <?php echo $resultado[$i];?></p>
	
	<?php }?>
	
<?php }?>
</body>
</html>
