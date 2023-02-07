<?php
    $tarefa = $_POST["tarefa"];
    $responsavel = $_POST["responsavel"];
    
    include "conexao.php";
    
    $sqlGravar = "Insert into t_tarefas(descricao, responsavel) values('$tarefa', '$responsavel')";

    mysqli_query($conexao, $sqlGravar);

    mysqli_close($conexao);

    header('location: index.php?msg=incluido');
?>


