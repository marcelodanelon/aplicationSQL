<?php include_once "header.php"; ?>
                            <?php include "mensagens.php"; ?>
                            <!--inicio conteudo -->
                            <form class="d-flex justify-content-center align-items-center mb-4" action="inserir-tarefa.php" method="post">
                                <div class="form-outline flex-fill">
                                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
                                    <input type="text" id="form2" class="form-control mt-1" placeholder="Responsável Tarefa" name="responsavel">
                                </div>
                                <button type="submit" class="btn btn-success ms-2 text-light fw-bold"><i class="bi bi-download"></i> ADD</button>
                            </form>

                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Todas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Em execução</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Concluídas</a>
                                </li>
                            </ul>


                            <ul class="list-group mb-0">
                                <?php
                                include "conexao.php";
                                $sqlBusca = "select * from t_tarefas";
                                $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
                                while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
                                ?>
                                    <div class="row list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">                                        
                                        <div class="col-4"><?php echo $umaTarefa['id']."-"; ?> 
                                            <?php echo $umaTarefa['descricao']; ?>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center"><?php echo $umaTarefa['responsavel']; ?></div>
                                        <div class="col-4 d-flex justify-content-end">
                                            <a class='btn btn-warning me-1' href="alterar-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-pencil-square"> Alterar</i></a>
                                            <a class='btn btn-danger' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-trash3"></i> Excluir</a>
                                        </div>
                                </div>
                                <?php
                                }
                                mysqli_close($conexao);
                                ?>                                
                            </ul>
                            <!--fim conteudo-->
<?php include_once "footer.php"; ?>