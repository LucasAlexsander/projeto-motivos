<?php require '../App/Views/Partials/TratandoTbName.php';?>
<head>
    
    <title>Admin Page</title>

</head>
<body id='adminPage'> 

    <header>
        <h1>Banco de Dados</h1>
        <h2>Motivos</h2>

        <?php if (!empty($status)) {?>

            <h6>Status: <span><?=$status?></span></h6>
            <h6>Tabela: <a href="#<?=$tbName?>"><u><?=$tableName?></u></a>
            
            <?php if($status != 'Excluído') {?> 

                | Id: <u><?=$lastId?></u></h6>

            <?php }?>

        <?php }?>

        <nav id="navegar">
        <div class="nav justify-content-end" id="nav-tab" role="tablist">
        <a class="nav-item nav-link" id="button-index-page" href="/home" aria-controls="nav-Motsus">Voltar</a>
        <a class="nav-item nav-link" id="button-logout-page" href="/logout" aria-controls="nav-Motsus">Sair</a>
    </nav>
        
        <div class="line"></div>
    </header>

    
    
<!-- Tabela de Cessação -->
<h2 id='cessacao'>Tabela de Cessação</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="button-absolute"> <!-- Botão para adicionar  -->
                        <div class="button-absolute-text">
                            <a href="/addReg?tb=cessacao">[ Adicionar Registro ]</a>
                        </div>
                    </div>
                    <table class="listar_dados table table-striped table-bordered" style="width: 100%;">  
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
                                        <div class="icons-area">
                                            <a href="/editar?id=<?= $cessacao['id_cessacao'] ?>&nome=cessacao"><img src="assets/images/icons/create-outline.svg"></img></a>
                                            <a href="/excluir?id=<?= $cessacao['id_cessacao'] ?>&nome=cessacao" onclick="return confirm('Deseja excluir?')"><img src="assets/images/icons/trash-outline.svg"></img></a>
                                        </div>
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
    <h2 id='reativacao'>Tabela de Reativação</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="button-absolute">
                        <div class="button-absolute-text">
                            <a href="/addReg?tb=reativacao">[ Adicionar Registro ]</a>
                        </div>
                        </div>
                    <table class="listar_dados table table-striped table-bordered" style="width: 100%;">  
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
                                        <div class="icons-area">
                                            <a href="/editar?id=<?=$reativacao['id_reativacao']?>&nome=reativacao"><img src="assets/images/icons/create-outline.svg"></img></a>
                                            <a href="/excluir?id=<?=$reativacao['id_reativacao']?>&nome=reativacao" onclick="return confirm('Deseja excluir?')"><img src="assets/images/icons/trash-outline.svg"></img></a>
                                        </div>
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
    <h2 id='suspensao'>Tabela de Suspensão</h2>
    <div class="container" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="button-absolute">
                        <div class="button-absolute-text">
                            <a href="/addReg?tb=suspensao">[ Adicionar Registro ]</a>
                        </div>
                    </div>
                    <table class="listar_dados table table-striped table-bordered" style="width: 100%;">  
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
                                        <div class="icons-area">
                                            <a href="/editar?id=<?=$suspensao['id_suspensao']?>&nome=suspensao"><img src="assets/images/icons/create-outline.svg"></img></a>
                                            <a href="/excluir?id=<?=$suspensao['id_suspensao']?>&nome=suspensao" onclick="return confirm('Deseja excluir?')"><img src="assets/images/icons/trash-outline.svg"></img></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>        

                    </table>
                </div>
            </div>
        </div>
    </div>

    