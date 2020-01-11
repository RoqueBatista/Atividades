<?php

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST"){
	// Eu quero fazer um novo cadastero para esse usuário
	session_start();
	
	if(isset($_SESSION["lista"])== false) {
		$_SESSION["lista"] = array();

	}
	
	$lista = $_SESSION["lista"];
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$usuario = array ();
	$usuario["email"]= $email;
	$usuario["senha"]= $senha;
	
	$emailCadastrado = false;
	foreach($lista as $u){
		
		if($u["email"] == $usuario["email"]) {
			$emailCadastrado = true;
			break;
			
		}	
	}
	
	if($emailCadastrado == false){
		$lista[] = $usuario;
		$_SESSION["lista"] = $lista;
		header("Location: cadastro_sucesso.php");
		exit;
		
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
	<h1>Caddastrar Usuario</h1>
	<form method="POST">
		<labe>E-mail:</labe>
		<input name="email" type="email"/>
		<labe>Senha:</labe>
		<input type="password" name="senha"/>
		<input type="submit" value="Entrar"/>
		
		<?php if(isset($emailCadastrado) and $emailCadastrado == true){?>
			<p>* Email já Cadastrado, tente novamente.</p>
		<?php }?>
		
	</form>
	
	<a href="index.html">Voltar</a><p>

</body>
</html>