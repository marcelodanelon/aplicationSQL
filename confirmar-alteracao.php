<?php
    $id = $_POST["id"];
    $descricao = $_POST["descricao"];
    $responsavel = $_POST["responsavel"];
    
    include_once "conexao.php";
    
    $sqlAlterar = "update t_tarefas set descricao='$descricao',responsavel='$responsavel' where id=$id;";

    mysqli_query($conexao, $sqlAlterar);

    mysqli_close($conexao);

    header('location: index.php?msg=alteracao');
?>