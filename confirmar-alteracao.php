<?php
    $id = $_POST["id"];
    $descricao = $_POST["descricao"];
    $responsavel = $_POST["responsavel"];
    $situacao = $_POST["situacao"];
    
    include_once "conexao.php";
    
    $sqlAlterar = "update t_tarefas set descricao='$descricao',responsavel='$responsavel',situacao='$situacao' where id=$id;";

    mysqli_query($conexao, $sqlAlterar);

    mysqli_close($conexao);

    header('location: index.php?msg=alteracao');
?>