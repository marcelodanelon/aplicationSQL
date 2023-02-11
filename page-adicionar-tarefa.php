<?php include_once "header.php"; ?>
                            <?php include "mensagens.php"; ?>
                            <!--inicio conteudo -->
                            <form class="d-flex align-items-center mb-4 row" action="inserir-tarefa.php" method="post">
                                <div class="col-5">
                                    Descrição
                                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
                                </div>
                                <div class="col-4">
                                    Responsável
                                    <input type="text" id="form2" class="form-control mt-1" placeholder="Responsável Tarefa" name="responsavel">
                                </div>
                                <div class="col-2">
                                    Situação
                                    <select class="form-select mt-1" name="situacao" aria-label="Default select example">
                                        <option value="Planejado">Planejado</option>
                                        <option value="Em Andamento">Em Andamento</option>
                                        <option value="Concluído">Concluído</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center mb-4 row mt-2">
                                    <div class="col-2">
                                        Data de Início
                                        <input type="date" id="form2" class="form-control mt-1" placeholder="Data de Inicio" name="data_inicial">
                                    </div>
                                    <div class="col-2">
                                        Data Prevista
                                        <input type="date" id="form2" class="form-control mt-1" placeholder="Data Prevista" name="data_prevista">
                                    </div>
                                </div>     
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success ms-2 text-light fw-bold"><i class="bi bi-download"></i> ADD</button>
                                </div>                           
                            </form>                             
<?php include_once "footer.php"; ?>