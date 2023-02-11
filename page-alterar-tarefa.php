<?php
    include_once "header.php";
    include_once "conexao.php";

    $id = $_GET['id'];

    $sqlConsulta = "select * from t_tarefas where id=$id";

    $consulta = mysqli_query($conexao, $sqlConsulta);

    while ($umaTarefa = mysqli_fetch_assoc($consulta)) {
        $descricao = $umaTarefa['descricao'];
        $responsavel = $umaTarefa['responsavel'];
        $selectedSituacao = $umaTarefa['situacao'];
        $data_inicio = $umaTarefa['data_inicio'];
        $data_prevista = $umaTarefa['data_prevista'];
        $options = array('Planejado', 'Em Andamento', 'Concluído');
    }
        ?>
            <h3>Alterar Tarefa</h3>
            <form class="d-flex align-items-center mb-4 row" action="confirmar-alteracao.php" method="post">
                <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                <div class="col-5">
                    Descrição
                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa" value="<?php echo $descricao ?>">
                </div>
                <div class="col-4">
                    Responsável
                    <input type="text" id="form2" class="form-control mt-1" placeholder="Responsável Tarefa" name="responsavel" value="<?php echo $responsavel ?>">
                </div>
                <div class="col-2">
                    Situação
                    <select class="form-select" name="situacao" aria-label="Default select example">
                            <?php
                            foreach($options as $option){
                                if($selectedSituacao == $option){
                                    echo "<option selected value='$option'>$option</option>";
                                }
                                else{
                                    echo "<option value='$option'>$option</option>";
                                }
                            }
                            ?>
                    </select>
                </div>
                <div class="d-flex align-items-center mb-4 row mt-2">
                    <div class="col-2">
                        Data de Início
                        <input type="date" id="form2" class="form-control mt-1" placeholder="Data de Inicio" name="data_inicio" value="<?php echo $data_inicio ?>">
                    </div>
                    <div class="col-2">
                        Data Prevista
                        <input type="date" id="form2" class="form-control mt-1" placeholder="Data Prevista" name="data_prevista" value="<?php echo $data_prevista ?>">
                    </div>
                </div>     
                <div class="col-2">
                    <button type="submit" class="btn btn-success ms-2 text-light fw-bold"><i class="bi bi-download"></i> Gravar</button>
                </div>                           
            </form>                                                       
        <?php    
    include_once "footer.php";
?>