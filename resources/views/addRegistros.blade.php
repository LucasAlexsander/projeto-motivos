@extends('layout.default')

@section('content')
    
    <head>
        <title>Adicionando Registro</title>
    </head>
    <body id='editPage'>


    <div class="container">
        
        <div class="text-area">
            <h1>Adicionando Registro de </h1>
            <h1> {{$tbNome}} </h1>
        </div>
        
    <form method="POST">
        @csrf

        <input type="text" name="tableName" value="{{$tbNome}}" hidden>

        <label>
            <p>Código:</p> 
            <input type="text" name="codigo" placeholder="Código">
        </label>

        <br><br>

        <label>
            <p>Nome:</p>
            <input type="text" name="nome" placeholder="Nome">
        </label>

        <br><br>

        @if ($tbNome != 'Reativação')

            <label>
                <p>Conceito e Finalidade:</p> 
                <textarea name="conc_final" cols="100" rows="6" placeholder="Conceito e Finalidade"></textarea>
            </label>
            
            <br><br>

            <label>
                <p>Prisma_sabi:</p> 
                <textarea style="resize: none;" name="prisma_sabi" cols="50" rows="1" placeholder="Prisma_Sabi"></textarea>
            </label>

            <br><br>

            <label>
                <p>Reatnb_plenus:</p>
                <textarea style="resize: none;" name="reatnb_plenus" cols="50" rows="1" placeholder="Reatnb_Plenus"></textarea>
            </label>

            <br><br>

            <label>
                <p>Situação:</p> 
                <textarea name="situacao" cols="50" rows="6" placeholder="Situação"></textarea>
            </label>

        @endif

        
        <div class="button-area-form">
            <input type="submit" value="Adicionar">
            <div class="button-back">
                <a href="/motivos/admin">Voltar</a>
            </div>
        </div>
        
    </form>
    </div>

@endsection