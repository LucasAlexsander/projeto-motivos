@php
    require '../resources/views/validator/TratandoTbName.php';
@endphp

@extends('layout.dataTable')

@section('title', 'Admin Page')

@section('content')

    <body id='adminPage'>

    <header>
        <h1>Banco de Dados</h1>
        <h2>Motivos</h2>

        @if (session('status'))

            <h6>Status: <span>{{session('status')}}</span></h6>
            <h6>Tabela: <a href="#{{session('tableNameNotAccent')}}">{{session('tableName')}}</a>

                @if (session('status') == 'Adicionado')
                    | Id: <u>{{session('lastId')}}</u></h6>
                @endif

        @endif

        <nav id="navegar">
        <div class="nav justify-content-end" id="nav-tab" role="tablist">
        <a class="nav-item nav-link" id="button-index-page" href="home" aria-controls="nav-Motsus">Voltar</a>
        <a onclick="return confirm('Deseja sair?')" class="nav-item nav-link" id="button-logout-page" href="/motivos/logout" aria-controls="nav-Motsus">Sair</a>
        </nav>
        <div class="nav-table-motivos">
            <div class="table-motivos">
                <a href="#cessacao">Cessação</a>
                <a href="#reativacao">Reativação</a>
                <a href="#suspensao">Suspensão</a>
            </div>
        </div>
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
                            <a href="/motivos/admin/add/cessacao">[ Adicionar Registro ]</a>
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

                            @foreach ($cessacao as $cessacaoItem)

                                <tr>
                                    <td>{{$cessacaoItem->id_cessacao}}</td>
                                    <td>{{$cessacaoItem->codigo}}</td>
                                    <td>{{$cessacaoItem->nome}}</td>
                                    <td>{{$cessacaoItem->situacao}}</td>
                                    <td>
                                        <div class="icons-area">
                                            <a href="/motivos/admin/edit/{{$cessacaoItem->id_cessacao}}/cessacao"><img src="/assets/images/icons/create-outline.svg"></img></a>
                                            <a href="/motivos/admin/delete/{{$cessacaoItem->id_cessacao}}/cessacao" onclick="return confirm('Deseja excluir?')"><img src="/assets/images/icons/trash-outline.svg"></img></a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

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
                            <a href="/motivos/admin/add/reativacao">[ Adicionar Registro ]</a>
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

                            @foreach ($reativacao as $reativacao)

                                <tr>
                                    <td>{{$reativacao->id_reativacao}}</td>
                                    <td>{{$reativacao->codigo}}</td>
                                    <td>{{$reativacao->nome}}</td>
                                    <td>
                                        <div class="icons-area">
                                            <a href="/motivos/admin/edit/{{$reativacao->id_reativacao}}/reativacao"><img src="/assets/images/icons/create-outline.svg"></img></a>
                                            <a href="/motivos/admin/delete/{{$reativacao->id_reativacao}}/reativacao" onclick="return confirm('Deseja excluir?')"><img src="/assets/images/icons/trash-outline.svg"></img></a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

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
                            <a href="/motivos/admin/add/suspensao">[ Adicionar Registro ]</a>
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

                            @foreach ($suspensao as $suspensaoItem)

                                <tr>
                                    <td>{{$suspensaoItem->id_suspensao}}</td>
                                    <td>{{$suspensaoItem->codigo}}</td>
                                    <td>{{$suspensaoItem->nome}}</td>
                                    <td>{{$suspensaoItem->situacao}}</td>
                                    <td>
                                        <div class="icons-area">
                                            <a href="/motivos/admin/edit/{{$suspensaoItem->id_suspensao}}/suspensao"><img src="/assets/images/icons/create-outline.svg"></img></a>
                                            <a href="/motivos/admin/delete/{{$suspensaoItem->id_suspensao}}/suspensao" onclick="return confirm('Deseja excluir?')"><img src="/assets/images/icons/trash-outline.svg"></img></a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
