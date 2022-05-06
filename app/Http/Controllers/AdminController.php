<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
    }

    public function add($tb) {

        if($tb === 'reativacao' || $tb === 'suspensao' || $tb === 'cessacao') {
            
            if ($tb === 'cessacao' ) {

                $NomeTabela = "Cessação";
        
            } elseif ($tb === 'reativacao') {
        
                $NomeTabela = "Reativação";
        
            } elseif ($tb === "suspensao") {
        
                $NomeTabela = "Suspensão";
            }

            return view('addRegistros', ['tbNome' => $NomeTabela]);

        } else {
            return redirect()->route('admin');
        } 
    }

    /* Adicionando os registros */
    public function addAction(Request $request, $id) {
        $rawData = $request->except(['_token']);
        $tabela = $id;

        echo '<pre>';
        print_r($rawData);
        echo '</pre>';

        if ($tabela === 'reativacao') {

            DB::insert('insert into reativacao (codigo, nome) values (:codigo, :nome)', [
                'codigo' => $rawData['codigo'],
                'nome' => $rawData['nome']
            ]);

            echo 'Chegamos até aqui';
        
        } else {
            DB::insert('insert into '. $tabela .' (codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao) 
            values (:codigo, :nome, :conc_final, :prisma_sabi, :reatnb_plenus, :situacao)', 
            [
                'codigo' => $rawData['codigo'],
                'nome' => $rawData['nome'],
                'conc_final' => $rawData['conc_final'],
                'prisma_sabi' => $rawData['prisma_sabi'],
                'reatnb_plenus' => $rawData['reatnb_plenus'],
                'situacao' => $rawData['situacao']
            ]);

            echo 'Chegamos até aqui sem erro';
        }

    }
}
