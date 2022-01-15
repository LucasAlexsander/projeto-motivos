<head>
    <title>Adicionando Registro</title>
</head>
<body id='editPage'>
<?php

    $tbNome = filter_input(INPUT_GET, 'tb');


    if ($tbNome === 'cessacao' ) {

        $NomeTabela = "Cessacão";

    } elseif ($tbNome === 'reativacao') {

        $NomeTabela = "Reativação";

    } elseif ($tbNome === "suspensao") {

        $NomeTabela = "Suspensão";
    }
?>


<div class="container">
    
    <div class="text-area">
        <h1>Adicionando Registro de </h1>
        <h1> <?=$NomeTabela?> </h1>
    </div>
    
<form method="POST" action="/addReg/Db">

    <input type="text" name="tableName" value="<?=$tbNome?>" hidden>

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

   <?php if ($tbNome != 'reativacao') :?>

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
   
   <?php endif; ?>
    
    <div class="button-area-form">
        <input type="submit" value="Adicionar">
        <div class="button-back">
            <a href="/admin">Voltar</a>
        </div>
    </div>
    
</form>
</div>