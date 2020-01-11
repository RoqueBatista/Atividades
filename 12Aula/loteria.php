<?php 

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDezenas = $_POST["nDezenas"];
	
	$array_dezenas = array();
	
	for($i = 0; $i < $nDezenas; $i++) {
		
		$contador = $i+1;
		for($existe = true; $existe == true; $contador++) {
			$dezena = rand($minimo, $maximo);
			echo "[$contador] = $dezena";
			
			$search = in_array($dezena, $array_dezenas);
			" - " . ($search ? "true" : "false");
			if(!$search) {
				$existe = false;
				"Adicionando: $dezena ";
				$array_dezenas[] = $dezena;
			}
		}
		
	}
}
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
<meta charset="ISO-8859-1">
<title>loteria</title>
<meta charset="utf-8">
</head>
<body>
	
		<h1>Loteria</h1>
			
		<form method="POST">
			
	
			<label>Minimo</label>
			<p>
			<input name="minimo" type="number"/>
			</p>
			<label>Maximo</label>
			<p>
			<input name="maximo" type="number"/>
			</p>
			<label>Qtd Dezenas</label>
			<p>
			<input name="nDezenas" type="number"/>
			</p>
			<p>
			<input type="submit" value="Lançador de Dados"/>
			</p>
		
		</form>
	
	
<?php if($method == "GET") {?>

		


<?php if($method == "POST") {?>
	<h2>Resultado:</h2>
	
	<?php echo implode(" | ", $array_dezenas); ?> 
	
	<?php } ?>
<?php } ?>
	<p>
		<a href="index.html">volta</a>
</body>
</html>