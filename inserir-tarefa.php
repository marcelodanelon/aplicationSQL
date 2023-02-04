<?php
    $tarefa = $_POST["tarefa"];
    
    //conexao banco de dados
    $servidor = '127.0.0.1';
    $banco = 'bd_tarefas';
    $usuario = 'root';
    $senha='';

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    
    $sqlGravar = "Insert into t_tarefas(descricao) values('$tarefa')";

    mysqli_query($conexao, $sqlGravar);

    mysqli_close($conexao);
?>


