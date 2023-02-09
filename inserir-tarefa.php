<?php
    $tarefa = $_POST["tarefa"];
    $responsavel = $_POST["responsavel"];
    $situacao = $_POST["situacao"];
    
    include "conexao.php";
    
    $sqlGravar = "Insert into t_tarefas(descricao, responsavel,situacao) values('$tarefa', '$responsavel', '$situacao')";

    mysqli_query($conexao, $sqlGravar);

    mysqli_close($conexao);

    header('location: index.php?msg=incluido');
?>


