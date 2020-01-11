<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	//Abrir conexção com o MySQL
	$link = mysqli_connect("localhost", "root", "");

	// Enviar comando SQL e quardar a resposta do MySQL na variável $resposta	
	$resposta = mysqli_query($link,"SELECT * FROM cadastro_usuarios.usuario WHERE email = '$email'");
	//Se o número de linhas retornado for maior que 0, significa que o email
	// já foi utilizado para fazer um cadastro
	// Senão, prosseguir com o cadastro
	if ($resposta ->num_rows >0){
		$msg = "E-mail já cadastrado. Por favor, informe outro e-mail";
		
	}else{
		//Enviar o comando SQL de INSERT e guardar a resposta $resposta
		$resposta = mysqli_query($link, "INSERT INTO cadastro_usuarios.usuario (email, senha) VALUES ('$email', '$senha')");
		
		//Se o valor da $resposta for true, então cadastro foi feito com
		//sucesso
		//Senão, algo deu errado
		if ($resposta){
			$msg = "Cadastro feito com sucesso!!";
		}else{
			$msg = "Erro ao cadastrar usuário, Tente novamente";
		}	
	}
}



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h1>Cadastro de Usuario</h1>

	<form method="POST" action="cadastrar.php">
	<p>
	<label>E-mail:</label>	
	<input type="email" name="email"/>
	</p>
	<p>
	<label>Senha:</label>
	<input type="password" name="senha"/>
	</p>
	<input type="submit" name="Cadastrar"/>
	<?php if(isset($msg)){?>
		<h3><?php echo $msg; ?></h3>
	<?php }?>
	</form>
	<p><a href="index.html">Voltar</a></p>
</body>
</html>