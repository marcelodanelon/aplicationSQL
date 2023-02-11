<?php
    $id = $_POST["id"];
    $descricao = $_POST["descricao"];
    $responsavel = $_POST["responsavel"];
    $situacao = $_POST["situacao"];
    $data_inicio = $_POST["data_inicio"];
    $data_prevista = $_POST["data_prevista"];
    
    include_once "conexao.php";
    
    $sqlAlterar = "update t_tarefas set descricao='$descricao',responsavel='$responsavel',situacao='$situacao',data_inicio='$data_inicio',data_prevista='$data_prevista' where id=$id;";

    mysqli_query($conexao, $sqlAlterar);

    mysqli_close($conexao);

    header('location: index.php?msg=alteracao');
?>