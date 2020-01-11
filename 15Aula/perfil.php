<?php
session_start();

if ( isset($_SESSION["uPerfil"]) == false ) {
	header("Location: usuarios.php");
	exit();
}

$uPerfil = $_SESSION["uPerfil"];

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

	$emailAntigo = $uPerfil["email"];	
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$lista = $_SESSION["lista"];

	// Lógica para atualizar os dados
	foreach ($lista as  $i => $u) {
		
		if ( $lista[$i]["email"] == $emailAntigo) {			
			$lista[$i]["email"] = $email;
			$lista[$i]["senha"] = $senha;			
			$uPerfil["email"] = $email;
			$uPerfil["senha"] = $senha;
			$mensagem = "* Dados salvos com sucesso";
			break;
		}
	}
	
	$_SESSION["lista"] = $lista;
	$_SESSION["uPerfil"] = $uPerfil;

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Perfil | Usuários</title>
</head>
<body>
	<a href="procurar.php">Voltar</a>
	<h1>Perfil</h1>

	<form method="POST">		
		<p>
			<label>E-mail: </label> <input type="email" name="email"
				value="<?php echo $uPerfil["email"]; ?>" />
		</p>
		<p>
			<label>Senha: </label> <input type="password" name="senha"
				value="<?php echo $uPerfil["senha"]; ?>" />
		</p>
		<input type="submit" value="Salvar" />
	</form>
	<?php if( isset($mensagem) ) { ?>
	<p><?php echo $mensagem; ?></p>
	<?php } ?>

</body>
</html>
