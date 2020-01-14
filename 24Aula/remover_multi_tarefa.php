<?php

include('conexao.php');
global $link;

if ( isset($_POST["ids"]) == false ) {
    $ids = array();
} else {
    $ids = $_POST["ids"];
}

$erro = array();

foreach ($ids as $id) {
    
    $resultado = mysqli_query($link, "DELETE FROM cadastro_usuarios.tarefa WHERE id = $id");
    
    if ($resultado) {
        
        $linhasAfetadas = mysqli_affected_rows($link);
        
        if ($linhasAfetadas == 0) {
            $erro[] = $id;
        }
        
    } else {
        $erro[] = $id;
    }
    
}

header('Location: lista_tarefas.php');