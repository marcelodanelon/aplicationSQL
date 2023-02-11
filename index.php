<?php include_once "header.php"; ?>
                            <?php include "mensagens.php"; ?>
                            <!--inicio conteudo -->
                            <form class="d-flex justify-content-center align-items-center mb-4" action="page-adicionar-tarefa.php" method="post">
                                <button type="submit" class="btn btn-success ms-2 text-light fw-bold"><i class="bi bi-download"></i> Adicionar Tarefa</button>
                            </form>

                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?filtro=todas">Todas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?filtro=planejado">Planejados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?filtro=emAndamento">Em Andamento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?filtro=concluido">Concluídas</a>
                                </li>
                            </ul>


                            <ul class="list-group mb-0">
                                <?php
                                include "conexao.php";
                                $filtro = $_GET['filtro'] ?? "";
                                if($filtro=='emAndamento'){
                                    $sqlBusca = "select * from t_tarefas where situacao='Em Andamento'";
                                }else if($filtro=='concluido'){
                                    $sqlBusca = "select * from t_tarefas where situacao='Concluído'";
                                }else if($filtro=='planejado'){
                                    $sqlBusca = "select * from t_tarefas where situacao='Planejado'";
                                }else{
                                    $sqlBusca = "select * from t_tarefas";
                                }
                                $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
                                while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
                                ?>
                                    <div class="row list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">                                        
                                        <div class="col-3">
                                            <?php echo $umaTarefa['id']."-"; ?> 
                                            <?php echo $umaTarefa['descricao']; ?>
                                        </div>
                                        <div class="col-3 d-flex justify-content-center">
                                            <?php echo $umaTarefa['situacao']; ?>
                                        </div>
                                        <div class="col-3 d-flex justify-content-center"><?php echo $umaTarefa['responsavel']; ?></div>
                                        <div class="col-3 d-flex justify-content-end">
                                            <a class='btn btn-warning me-1' href="page-alterar-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-pencil-square"> Alterar</i></a>
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