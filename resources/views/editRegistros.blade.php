@extends('layout.default')

@section('content')
    
    <head>
        <title>Edition Page</title>
    </head>
    <body id='editPage'>

    <div class="container">
        
        <div class="text-area">
            <h1>Editando <?=$NomeTabela?></h1>
            
            {{-- Mostrar o status alterado
            <?php if ($status === 'alterado') { ?>

                <h4>Status: <span>Alterado</span></h4>

            <?php } ?> --}}

        </div>
        
    <form method="POST" action="/procEnvio">

        <input type="text" name="tableName" value="{{$tbNome}}" hidden>

        <label>
            <p>ID:</p>
            <input type="text" name="id" value="<?=$item['0']?>" readonly>
        </label>

        <br><br>

        <label>
            <p>Código:</p> 
            <input type="text" name="codigo" value="<?=$item['1']?>">
        </label>

        <br><br>

        <label>
            <p>Nome:</p>
            <input type="text" name="nome" value="<?=$item['2']?>">
        </label>

        <br><br>

    <?php if ($tbNome != 'reativacao') :?>

        <label>
            <p>Conceito e Finalidade:</p> 
            <textarea name="conc_final" cols="100" rows="6">
                <?=trim($item['3'])?>
            </textarea>
        </label>
        
        <br><br>

        <label>
            <p>Prisma_sabi:</p> 
            <textarea style="resize: none;" name="prisma_sabi" cols="50" rows="1"><?=trim($item['4'])?></textarea>
        </label>

        <br><br>

        <label>
            <p>Reatnb_plenus:</p>
            <textarea style="resize: none;" name="reatnb_plenus" cols="50" rows="1"><?=trim($item['5'])?></textarea>
        </label>

        <br><br>

        <label>
            <p>Situação:</p> 
            <textarea name="situacao" cols="50" rows="6"><?=trim($item['6'])?></textarea>
        </label>
    
    <?php endif; ?>
        
    <div class="button-area-form">
            <input type="submit" value="Salvar">
            <div class="button-back">
                <a href="/admin">Voltar</a>
            </div>
        </div>
        
    </form>
    </div>

@endsection