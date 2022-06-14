@extends('layout.default')

@section('title', 'Editar Motivo')

@section('content')

<body id='editPage'>

    <div class="container">

        <div class="text-area">
            <h1>Editando {{$tbNome}}</h1>

            @if (session('success'))

                <h4>Status: <span>Alterado</span></h4>

            @elseif ($errors->any())

                <h4>Status: <span style="color: #F00"><b>Erro: </b>
                    @foreach ($errors->all() as $erro)
                        {{$erro}}
                    @endforeach
                </span></h4>

            @endif

        </div>

        <form method="POST">
            @csrf
            <input type="text" name="tableName" value="{{$tbNome}}" hidden>
            <input type="text" name="tableName" hidden>

            <label id="Id">
                <p>ID:</p>
                <input type="text" name="id" value="{{$id}}" readonly required>
            </label>

            <br><br>

            <label>
                <p>Código:</p>
                <input type="text" name="codigo" value="{{$DbData[0]->codigo}}" required>
            </label>

            <br><br>

            <label>
                <p>Nome:</p>
                <input type="text" name="nome" value="{{$DbData[0]->nome}}" required>
            </label>

            <br><br>

            @if ($tbNome != 'Reativação')

                <label>
                    <p>Conceito e Finalidade:</p>
                    <textarea name="conc_final" cols="100" rows="6" required> @php echo ($DbData[0]->conc_final) @endphp </textarea>

                </label>

                <br><br>

                <label>
                    <p>Prisma_sabi:</p>
                    <textarea style="resize: none;" name="prisma_sabi" cols="100" rows="2" required> @php echo trim($DbData[0]->prisma_sabi) @endphp </textarea>
                </label>

                <br><br>

                <label>
                    <p>Reatnb_plenus:</p>
                    <textarea style="resize: none;" name="reatnb_plenus" cols="100" rows="2" required>@php echo trim($DbData[0]->reatnb_plenus) @endphp</textarea>
                </label>

                <br><br>

                <label>
                    <p>Situação:</p>
                    <textarea name="situacao" cols="100" rows="7" required> @php echo trim($DbData[0]->situacao) @endphp </textarea>

                </label>

            @endif

            <div class="button-area-form">
                <div class="button-back">
                    <a href="/motivos/admin">Voltar</a>
                </div>
                <input type="submit" value="Salvar">
            </div>

        </form>
    </div>

@endsection
