<?php 
session_start();

if(isset($_SESSION["lista"])==false){
	$_SESSION["lista"] = array();	
}
$lista = $_SESSION["lista"]	

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<table>
	<thead>
		<tr>			
			<td>Email</td>
			<td>Senha</td>
		</tr>	
	</thead>
	<tbody>
		<?php foreach ($lista as $u) {?>
			<tr>			
				<td><?php echo $u["email"];?></td>
				<td><?php echo $u["senha"];?></td>
			</tr>		
		<?php }?>
	
	</tbody>
</table>
<p>
<a href="index.html">Voltar</a>
</p>
</body>
</html>