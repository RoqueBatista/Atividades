<?php 
include("classes/usuario.class.php");

session_start();

$u = $_SESSION["usuario"];

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	// ===================================== O ERRO ESTÁ AQUI ===================
	// Eu fiz o include do arquivo da classe usuario dentro desse if
	// Por causa disso, a classe só estava sendo incluida no método POST
	// Ao acessar a página com o método GET, o include não estava sendo executado
	// Para consertar, basta colocar esse include no início da página (logo
	//	na primeira linha de código)
	//===========================================================================
	include('classes/usuario.class.php');
	
	$senha = $_POST["senha"];
	//$u["senha"] = $senha;
	$u->senha = $senha;
	
	include ("conexao.php");
	global $link;
	
	$resultado = mysqli_query($link, "UPDATE cadastro_usuarios.usuario SET senha = '$senha' WHERE id = {$u["id"]}");
	
	if($resultado) {
		
		$affectedRows = mysqli_affected_rows($link);
		
		if ($affectedRows > 0) {
			$mensagem = "Dados atualizados com sucesso";
		} 
	}
	
	$_SESSION["usuario"] = $u;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Perfil | Cadastro de Usuários</title>
</head>
<body>
	<a href="procurar.php">Voltar</a>
	<h1>Perfil</h1>
	<form method="POST" action="perfil.php">
		<p>
			<label>E-mail: </label>
			<input type="email" value="<?php echo $u->email; ?>" disabled />
		</p>
		<p>
			<label>Senha: </label>
			<input type="password" name="senha" value="<?php echo $u->senha; ?>" />
		</p>
		<input type="submit" value="Salvar" />
		<?php if ( isset($mensagem) ) {?>
		<p><?php echo $mensagem;?></p>
		<?php } else if ($method == "POST") {?>
		<p>Erro ao atualizar os dados. Tente novamente</p>
		<?php } ?>
	</form>
</body>
</html>