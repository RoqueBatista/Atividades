<?php 

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDezenas = $_POST["nDezenas"];
	
	$conjuntoDeSorteados = array();
	
	for($j = 0 ; $j < 30 ; $j++ ) {
		
		$sorteados = array();
		
		for($i = 0; $i < $nDezenas; $i++) {
			
			$adicionado = false;
			while($adicionado == false);
			
			$dezena = rand($minino,$maximo);
					
				if(in_array($dezenas,$sorteados) ==false){
					$sorteados[] = $dezenas;
					$acionado = true;
				}
			}
		sort ($sorteados);
		$conjuntoDeSorteados[] = $sorteados;
			
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


<?php }else if($method == "POST") {?>
	
	<?php for($i = 0 ; $i < 30; $i++){ ?>
	
		<p><?php echo implode(" | ", $conjuntoDeSorteados[$i])?></p>
	
	<?php } ?>
<?php } ?>

	<p>
		<a href="index.html">volta</a>
</body>
</html>