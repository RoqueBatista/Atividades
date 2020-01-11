<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	// Se o método é o POST, então preciso remover um usuário
	
	// Para isso, vou iniciar a sessão para ter acessa à lista de usuários
	session_start();
	
	// Pegar a lista de usuários da sessão
	if ( isset( $_SESSION["lista"] ) == false ) {
		// Se a lista ainda não existir, inicializá-la
		$_SESSION["lista"] = array();
	}
	$lista = $_SESSION["lista"];
	
	// Pegar email do usuário a ser removido (enviado pelo form)
	$email = $_POST["email"];
	
	// Procurar usuário que tenha o email na lista
	$usuarioRemovido = false;
	foreach ($lista as $i => $u) {
		// verificar email do usuário
		if ( $lista[$i]["email"] == $email ) {
			unset( $lista[$i] );
			$usuarioRemovido = true;
			$mensagem = "* Removido com sucesso";
			break;
		}
	}
	
	
	$_SESSION["lista"] = $lista;
	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Remover | Usuários</title>
</head>
<body>
	<a href="usuarios.php">Voltar</a>
	<h1>Remova um usuário</h1>
	<form method="POST">
		<p>
			<label>E-mail: </label> <input type="email" name="email" />
		</p>
		<input type="submit" value="Remover" />
	</form>
	<?php if ( isset( $usuarioRemovido ) and $usuarioRemovido == true ) { ?>
		<p>* Usuário removido com sucesso</p>
	<?php } ?>
</body>
</html>
