<?php
    $tarefa = $_POST["tarefa"];
    $responsavel = $_POST["responsavel"];
    $situacao = $_POST["situacao"];
    $data_inicio = $_POST["data_inicial"];
    $data_prevista = $_POST["data_prevista"];
    
    include "conexao.php";
    
    print_r($data_inicio);
    print_r($data_prevista);
    
    $sqlGravar = "Insert into t_tarefas(descricao, responsavel,situacao,data_inicio,data_prevista) values('$tarefa', '$responsavel', '$situacao', '$data_inicio', '$data_prevista')";

    mysqli_query($conexao, $sqlGravar);

    mysqli_close($conexao);

    header('location: index.php?msg=incluido');
?>


