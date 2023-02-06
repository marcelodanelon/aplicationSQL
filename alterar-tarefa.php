<?php
    include_once "header.php";
    include_once "conexao.php";

    $id = $_GET['id'];

    $sqlConsulta = "select * from t_tarefas where id=$id";

    $consulta = mysqli_query($conexao, $sqlConsulta);

    while ($umaTarefa = mysqli_fetch_assoc($consulta)) {
        $idLocalizado = $umaTarefa['id'];
        $descricao = $umaTarefa['descricao'];
        ?>
            <h3>Alterar Tarefa</h3>
            <form class="d-flex justify-content-center align-items-center mb-4" action="alterar-tarefa.php" method="post">
                <div class="form-outline flex-fill">
                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa" value="<?php echo $descricao ?>">
                </div>
                <button type="submit" class="btn btn-success ms-2 text-light fw-bold"><i class="bi bi-download"></i> Gravar</button>
            </form>
        <?php
    }
    include_once "footer.php";
?>