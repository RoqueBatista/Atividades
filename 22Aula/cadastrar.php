<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $link = @mysqli_connect("localhost", "root", "");
    
    $linkErro = mysqli_connect_errno();
    
    if ($linkErro == 0) {
        
        $resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios.usuario WHERE usuario = '$email'");
        
        if ($resultado) {
            
            if ($resultado->num_rows == 0) {
                
                
                $resultado = mysqli_query($link, "INSERT INTO cadastro_usuarios.usuario (usuario, senha) VALUES ('$email', '$senha')");
                
                if ($resultado) {
                    $rowsAffected = mysqli_affected_rows($link);
                    
                    if($rowsAffected > 0) {
                        $mensagem = "Cadastro feito com sucesso!";
                    }
                }
            } else {
                $mensagem = "E-mail já¡ cadastrado. Cadastre-se com outro e-mail";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Cadastro | App Cadastro de Usuários</title>
</head>
<body>
	<a href="usuarios.php">Voltar</a>

	<h1>Aula 22 - Revisão</h1>
	<form method="POST" action="cadastrar.php">
		<p><label>E-mail: </label></p>
		<p><input type="email" name="email" /></p>
		<p><label>Senha: </label></p>
		<p><input type="password" name="senha" /></p>
		<input type="submit" value="Cadastrar" />
		<?php if ( isset($mensagem) ) {?>
		<p>
		<?php echo $mensagem; ?>
		</p>
		<?php } else if ($method == "POST") {?>
		<p>Algo deu errado ao cadastrar. Tente novamente</p>
		<?php } ?>
	</form>

</body>
</html>