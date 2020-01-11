<?php 

$method	= $_SERVER["REQUEST_METHOD"];

if ($method == "POST"){
	// Eu quero fazer um novo cadastero para esse usuário
	session_start();

if (isset($_SESSION["lista"])== false) {
		$_SESSION["lista"] = array();
}		
	$lista = $_SESSION["lista"];	
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$usuario = array();	
	$usuario["email"] = $email;
	$usuario["senha"] = $senha;
	
	$emailCadastrado = false;
	foreach ($lista as $u){	
				
		if($u["email"] == $usuario["email"]){
			$emailCadastrado = true;
			break;
		}		
	}

	if ($emailCadastrado == false){
		$lista[] = $usuario;
		$_SESSION["lista"] = $lista;
		header("Location: cadastro_sucesso.php");
		exit();
	}	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>cadastar</title>
</head>
<body>
<h1>Index Aula 15</h1>

	<h1>Cadastro de Usuarios</h1><p>
	<form method="POST">	
		<label>E-mail:</label>
		<input name="email" type="email"/><p>
		<label>Senha:</label>
		<input type="password" name="senha" /><p>
		<input type="submit" value="Entrar"/><p>
		
		<?php if (isset($emailCadastrado)and $emailCadastrado == true){?>
		<p>* Email já cadastrado. Tente novamente</p>
		<?php }?> 
	</form>
	<a href="index.html">Aula 15</a><p>
</body>
</html>