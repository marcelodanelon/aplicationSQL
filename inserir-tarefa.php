<?php
    $tarefa = $_POST["tarefa"];
    
    include "conexao.php";
    
    $sqlGravar = "Insert into t_tarefas(descricao) values('$tarefa')";

    mysqli_query($conexao, $sqlGravar);

    mysqli_close($conexao);
?>


