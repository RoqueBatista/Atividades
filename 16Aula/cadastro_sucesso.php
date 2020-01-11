<?php
	echo "Cadastro Realizado com Sucesso"

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
		<input name="email" type="emai"/>
		<labe>Senha:</labe>
		<input type="passaword" type="senha"/>
		<input type="submit" value="Entrar"/>
		
		<?php if(isset($emailCadastrado) and $emailCadastrado == true){?>
			<p>* Email já Cadastrado, tente novamente.</p>
		<?php }?>
		
	</form>
	
	<a href="index.html">Voltar</a><p>

</body>