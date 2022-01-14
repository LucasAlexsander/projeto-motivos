<head>
    
    <title>Admin Page</title>

</head>
<body id='adminPage'> 

    <header>
        <h1>Lista de Teste</h1>
        <h2>Subtitulo</h2>
    </header>

    <!-- <?php
        echo '<pre>';
        print_r($this->view->dados);
        echo '</pre>';
    ?> -->

    <!-- Tabela de Cessação -->
    <h2>Tabela de Cessação</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="button-absolute"> <!-- Botão para adicionar  -->
                                <a href="/addReg">Adicionar</a>
                        </div>
                    <table id="listar_dados" class="listar_dados table table-striped table-bordered" style="width: 100%;">  
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Situação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php foreach ($this->view->cessacao as $cessacao) :?>

                                <tr>
                                    <td><?=$cessacao['id_cessacao']?></td>
                                    <td><?=$cessacao['codigo']?></td>
                                    <td><?=$cessacao['nome']?></td>
                                    <td><?=$cessacao['situacao']?></td>
                                    <td>
                                        <a href="/excluir?id=<?= $cessacao['id_cessacao'] ?>&nome=cessacao" onclick="return confirm('Deseja excluir?')">[ excluir ]</a><br>
                                        <a href="/editar?id=<?= $cessacao['id_cessacao'] ?>&nome=cessacao">[ Editar ]</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>        

                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><hr><br>

    <!-- Tabela de Reativação -->
    <h2>Tabela de Reativação</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="button-absolute">
                                <a href="/addReg">Adicionar</a>
                        </div>
                    <table id="listar_dados1" class="table table-striped table-bordered" style="width: 100%;">  
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php foreach ($this->view->reativacao as $reativacao) :?>

                                <tr>
                                    <td><?=$reativacao['id_reativacao']?></td>
                                    <td><?=$reativacao['codigo']?></td>
                                    <td><?=$reativacao['nome']?></td>
                                    <td>
                                        <a href="/excluir?id=<?= $cessacao['id_cessacao'] ?>&nome=cessacao" onclick="return confirm('Deseja excluir?')">[ excluir ]</a><br>
                                        <a href="/editar?id=<?=$reativacao['id_reativacao']?>&nome=reativacao">[ Editar ]</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>        

                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><hr><br>

    <!-- Tabela de Suspensão -->
    <h2>Tabela de Suspensão</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="button-absolute">
                            <a href="/addReg">Adicionar</a>
                    </div>
                    <table id="listar_dados2" class="table table-striped table-bordered" style="width: 100%;">  
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Situação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php foreach ($this->view->suspensao as $suspensao) :?>

                                <tr>
                                    <td><?=$suspensao['id_suspensao']?></td>
                                    <td><?=$suspensao['codigo']?></td>
                                    <td><?=$suspensao['nome']?></td>
                                    <td><?=$suspensao['situacao']?></td>
                                    <td>
                                        <a href="/excluir?id=<?= $cessacao['id_cessacao'] ?>&nome=cessacao" onclick="return confirm('Deseja excluir?')">[ excluir ]</a><br>
                                        <a href="/editar?id=<?=$suspensao['id_suspensao']?>&nome=suspensao">[ Editar ]</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>        

                    </table>
                </div>
            </div>
        </div>
    </div>

    

    

    
