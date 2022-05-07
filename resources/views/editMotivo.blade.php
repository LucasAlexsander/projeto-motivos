@extends('layout.default')

@section('title', 'Editar Motivo')

@section('content')


    <body id='editPage'>

    <div class="container">

        <div class="text-area">
            <h1>Editando {{$tbNome}}</h1>

            @if (session('success'))
                <h4>Status: <span>Alterado</span></h4>
            @elseif (session('warning'))
                <h4>Status: <span>Erro, não foi possivel realizar as alterações</span></h4>
            @endif

        </div>

        <form method="POST">
            @csrf

            <input type="text" name="tableName" value="{{$tbNome}}" hidden>

            <label>
                <p>ID:</p>
                <input type="text" name="id" value="{{$id}}" readonly>
            </label>

            <br><br>

            <label>
                <p>Código:</p>
                <input type="text" name="codigo" value="{{$DbData[0]->codigo}}">
            </label>

            <br><br>

            <label>
                <p>Nome:</p>
                <input type="text" name="nome" value="{{$DbData[0]->nome}}">
            </label>

            <br><br>

            @if ($tbNome != 'Reativação')

                <label>
                    <p>Conceito e Finalidade:</p>
                    <textarea name="conc_final" cols="100" rows="6"> @php echo ($DbData[0]->conc_final) @endphp </textarea>
                </label>

                <br><br>

                <label>
                    <p>Prisma_sabi:</p>
                    <textarea style="resize: none;" name="prisma_sabi" cols="50" rows="1"> @php echo trim($DbData[0]->prisma_sabi) @endphp </textarea>
                </label>

                <br><br>

                <label>
                    <p>Reatnb_plenus:</p>
                    <textarea style="resize: none;" name="reatnb_plenus" cols="50" rows="1">@php echo trim($DbData[0]->reatnb_plenus) @endphp</textarea>
                </label>

                <br><br>

                <label>
                    <p>Situação:</p>
                    <textarea name="situacao" cols="50" rows="6"> @php echo trim($DbData[0]->situacao) @endphp </textarea>
                </label>

            @endif

            <div class="button-area-form">
                <input type="submit" value="Salvar">
                <div class="button-back">
                    <a href="admin">Voltar</a>
                </div>
            </div>

        </form>
    </div>

@endsection
