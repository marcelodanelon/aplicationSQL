<?php $msg = $_GET['msg'] ?? ""; 
    if($msg == 'alteracao'){
        echo "<div class='alert alert-warning'>Tarefa alterada com sucesso!</div>";
    }
    if($msg == 'excluido'){
        echo "<div class='alert alert-danger'>Tarefa excluida com sucesso!</div>";
    }
    if($msg == 'incluido'){
        echo "<div class='alert alert-success'>Tarefa incluida com sucesso!</div>";
    }
?>