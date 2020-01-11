<?php 

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDezenas = $_POST["nDezenas"];
	
	$sorteados = array();
	
	for($i = 0; $i < $nDezenas; $i++) {
		
		$adicionado = false;
		while($adicionado == false){
		
		$dezenas = rand($minimo,$maximo);
				
			if(in_array($dezenas,$sorteados) ==false){
				$sorteados[] = $dezenas;
				$adicionado = true;
			}
		}
		sort ($sorteados);
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
	<h2>Com foreach:</h2>
	
	<?php foreach($sorteados as $valor){?>
	<p>
	<?php echo $valor;?>
	
	<?php } ?>
	
	<h2>Com for:</h2>
	
	<?php for($i = 0; $i < $nDezenas; $i++) {?>
	
	<p>
	<?php echo $sorteados[$i];?>
	</p>

	<?php } ?>
<?php } ?>
	<p>
		<a href="index.html">volta</a>
</body>
</html>
