@extends('layouts.default')

@section('title', 'Adicionar Motivo')

@section('content')

<body id='editPage'>

    <div class="container">

        <div class="text-area">
            <h1>Adicionando Registro de </h1>
            <h1> {{$tbNome}}
        </div>

        @if ($errors->any())
            <h4>Status: <span style="color: #F00"><b>Erro: </b>
                @foreach ($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </span></h4>
        @endif

    <form method="POST">
        @csrf
        <label>
            <p>Código:</p>
            <input type="text" name="codigo" placeholder="Código" required>
        </label>

        <br><br>

        <label>
            <p>Nome:</p>
            <input type="text" name="nome" placeholder="Nome" required>
        </label>

        <br><br>

        @if ($tbNome != 'Reativação')

            <label>
                <p>Conceito e Finalidade:</p>
                <textarea name="conc_final" cols="100" rows="6" placeholder="Conceito e Finalidade" required></textarea>
            </label>

            <br><br>

            <label>
                <p>Prisma_sabi:</p>
                <textarea style="resize: none;" name="prisma_sabi" cols="100" rows="2" placeholder="Prisma_Sabi" required></textarea>
            </label>

            <br><br>

            <label>
                <p>Reatnb_plenus:</p>
                <textarea style="resize: none;" name="reatnb_plenus" cols="100" rows="2" placeholder="Reatnb_Plenus" required></textarea>
            </label>

            <br><br>

            <label>
                <p>Situação:</p>
                <textarea name="situacao" cols="100" rows="6" placeholder="Situação" required></textarea>
            </label>

        @endif

        <div class="button-area-form">
            <div class="button-back">
                <a href="/motivos/admin">Voltar</a>
            </div>
            <input type="submit" value="Adicionar">
        </div>

    </form>
    </div>  
</body>

@endsection