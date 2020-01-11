<?php

$method = $_SERVER["REQUEST_METHOD"];

$ehPost = $method == "POST";


if($ehPost){
	//Variáveis para calcular os números
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	//Validação dos numeros

	// Verificar se $num1 é numerico
	if (is_numeric($num1)) {
		if (is_numeric($num2)) {
			if ($num2 !=0){
				
				$soma = $num1 + $num2;
				$sub  = $num1 - $num2;
				$mult = $num1 * $num2;
				$div  = $num1 / $num2;
				
			}else{
				echo "Insira um valor maior que zero";
			}

		}else{
			echo "Número 2 não é valor numérico, informe um valor númerico";
		}

	}else {
		echo "Número 1 não é valor numerico, informe um valor númerico";
 	 
	}

}

?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
<meta charset="ISO-8859-1">
<meta charset="utf-8">
<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>
	<form method="POST">
		<label>Número1:</label> 
		<input name="num1"/>
		<label>Número2:</label>
		<input name="num2"/>
		<input type="submit" />
	</form>

	<?php if($ehPost){?>
		<?php if (is_numeric($num1)) {?>
			<?php if (is_numeric($num2)) {?>
				<?php if ($num2 !=0){?>	
				<p>
				Número 1:
				<?php echo $num1;?>
				</p>
				<p>
				Número 2:
				<?php echo $num2;?>
				</p>
				<p>
					<h2>Resultados:</h2>
				</p>
				<p>
				soma:
				<?php echo $soma;?>
				</p>
				<p>
				sub:
				<?php echo $sub;?>
				</p>
				<p>
				mult:
				<?php echo $mult;?>
				</p>
				<p>
				div:
				<?php echo $div;?>
				</p>
				<?php }?>
			<?php }?>
		<?php }?>
	<?php }?>
	
</body>
</html>
