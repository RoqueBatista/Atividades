<?php

include("classes/Usuario.php");
include("conexao.php");
global $link;

session_start();

if (isset($_SESSION["usuarioLogado"])) {
    $usuario = $_SESSION["usuarioLogado"];
} else {
    header("Location: index.php");
    exit();
}


$id = $_GET["id"];

$resultado = mysqli_query($link, "DELETE FROM cadastro_usuarios.tarefa WHERE id = {$id} and id_usuario = {$usuario->id}");

if ($resultado) {
    
    $linhasAlteradas = mysqli_affected_rows($link);
    
    if ($linhasAlteradas > 0) {
        // Tarefa finalizada com sucesso
        $msg = "Tarefa excluída com sucesso!";
    } else {
        // Erro ao finalizar tarefa
        $msg = "Erro ao excluir tarefa. Tente Novamente";
    }
    
} else {
    // Erro ao finalizar tarefa
    $msg = "Erro ao excluir tarefa. Tente Novamente";
}

header("Location: home.php?msgExcluir=$msg");
exit();





