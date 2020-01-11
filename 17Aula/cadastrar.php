<?php

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST") {
	// Eu quero fazer um novo cadastero para esse usuário
		session_start();
	
	if(isset($_SESSION["lista"])== false){
		$_SESSION["lista"]= array();				
	}
	$lista = $_SESSION["lista"];
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$usuario = array();
	$usuario["email"]= $email;
	$usuario["senha"] = $senha;
	
	$emailCadastrado = false;
		foreach($lista as $u){
			
			if($u["email"] == $usuario["email"]){
				$emailCadastrado = true;
				break;
			}			
		}
	if($emailCadastrado == false){
		$lista[] = $usuario;
		$_SESSION["lista"] = $lista;
		header ("Location: mensagem.php");
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
	<form method="POST">
	<p><h1>Cadastro de Usuario</h1></p>
	<p><label>Email:</label></p>
	<p><input type="email" name="email"/></p>
	<p><label>Senha:</label></p>
	<p><input type="password" name="senha"/></p>
	<p><input type="submit" value="Cadastrar"></p>
	
	<?php if(isset($emailCadastrado) and $emailCadastrado == true){?>
			<p>* Email já Cadastrado, tente novamente.</p>
	<?php }?>
		
	</form>
	
		<a href="index.html">Voltar</a><p>
</body>
</html>