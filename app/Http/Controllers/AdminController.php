<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// CRUD para o Banco de Dados
use App\Models\Cessacao;
use App\Models\Reativacao;
use App\Models\Suspensao;
use App\Models\User;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('validateadmin');
    }

    public function index() {

        // Buscar os dados
        // Dados de Cessação
        $cessacao = Cessacao::all();
        // Dados de Reativação
        $reativacao = Reativacao::all();
        // Dados de Suspensão
        $suspensao = Suspensao::all();

        $data = [
            'cessacao' => $cessacao,
            'reativacao' => $reativacao,
            'suspensao' => $suspensao
        ];

        return view('admin', $data);
    }

    /* -------------------------------------------------------------------------- */

    public function add($tb) {

        if($tb === 'reativacao' || $tb === 'suspensao' || $tb === 'cessacao') {

            if ($tb === 'cessacao' ) {            
                $NomeTabela = "Cessação";            
            } else {
                $NomeTabela = $tb === 'reativacao' ? 'Reativação' : 'Suspensão';
            }

            return view('addMotivo', ['tbNome' => $NomeTabela]);

        } else {
            return redirect()->route('admin');
        }
    }

    /* Adicionando os registros */
    public function addAction(Request $request, $id) {
        // Validando o formulário
        $request->validate([
            'codigo' => ['required'],
            'nome' => ['required'],
        ]);
        
        $rawData = $request->except(['_token']);
        $tabela = $id;

        $tbNomeAccent = $tabela == 'cessacao' ? 'Cessação' : 'Reativação';

        if ($tabela === 'reativacao') {

            $insert = new Reativacao();
            $insert->codigo = $rawData['codigo'];
            $insert->nome = $rawData['nome'];
            $insert->save();

            $lastId = $insert->id_reativacao;

            return redirect()->route('motivos.admin')->with('status', 'Adicionado')->with('tableName', 'Reativação')->with('tableNameNotAccent', 'reativacao')->with('lastId', $lastId);

        } else {

            $request->validate([
                'conc_final' => ['required'],
                'prisma_sabi' => ['required'],
                'reatnb_plenus' => ['required'],
                'situacao' => ['required'],
            ]);

            $insert = $tabela === 'cessacao' ? new Cessacao() : new Suspensao(); 

            $insert->codigo = $rawData['codigo'];
            $insert->nome = $rawData['nome'];
            $insert->conc_final = $rawData['conc_final'];
            $insert->prisma_sabi = $rawData['prisma_sabi'];
            $insert->reatnb_plenus = $rawData['reatnb_plenus'];
            $insert->situacao = $rawData['situacao'];
            $insert->save();

            $lastId = $tabela === 'cessacao' ? $insert->id_cessacao : $insert->id_suspensao;

            return redirect()->route('motivos.admin')->with('status', 'Adicionado')->with('tableName', $tbNomeAccent)->with('tableNameNotAccent', $tabela)->with('lastId', $lastId);
        }
    }

    /* -------------------------------------------------------------------------- */

    public function edit($id, $tb) {

        if($tb === 'reativacao' || $tb === 'suspensao' || $tb === 'cessacao') {

            if ($tb === 'cessacao' ) {            
                $NomeTabela = "Cessação";            
            } else {
                $NomeTabela = $tb === 'reativacao' ? 'Reativação' : 'Suspensão';
            }

            /* Buscar os dados com base na tabela e no id e mandar para a página de editar */
            $DbData = DB::select('select * from '. $tb . ' where id_'.$tb.' = ?', [$id]);

            $rawData = [
                'tbNome' => $NomeTabela,
                'DbData' => $DbData,
                'id' => $id
            ];

            return view('editMotivo', $rawData);

        } else {
            return redirect('/motivos/admin');
        }
    }

    public function editAction(Request $request, $id, $tb) {
        // Validando o formulário
        $request->validate([
            'codigo' => ['required'],
            'nome' => ['required'],
        ]);
        
        $DbData = $request->except(['_token']);

        if($request->tb == 'reativacao') {

            Reativacao::where('id_reativacao', $id)->update([
                'codigo' => $DbData['codigo'],
                'nome' => $DbData['nome']
            ]);

            return redirect('/motivos/admin/edit/'. $id . '/'. $tb)->with('success', 'Alterado');
        } else {  
            
            $request->validate([
                'conc_final' => ['required'],
                'prisma_sabi' => ['required'],
                'reatnb_plenus' => ['required'],
                'situacao' => ['required'],
            ]);

            $insert = $tb === 'cessacao' ? Cessacao::find($id) : Suspensao::find($id);

            $insert->codigo = $DbData['codigo'];
            $insert->nome = $DbData['nome'];
            $insert->conc_final = $DbData['conc_final'];
            $insert->prisma_sabi = $DbData['prisma_sabi'];
            $insert->reatnb_plenus = $DbData['reatnb_plenus'];
            $insert->situacao = $DbData['situacao'];

            $insert->save();

            return redirect('/motivos/admin/edit/'. $request->id . '/'. $request->tb)->with('success', 'Alterado');
        }
    }

    /* -------------------------------------------------------------------------- */

    public function del($id, $tb) {

        if ($tb === 'cessacao' ) {            
            $NomeTabela = "Cessação";            
        } else {
            $NomeTabela = $tb === 'reativacao' ? 'Reativação' : 'Suspensão';
        }

        DB::delete('delete from '. $tb .' where id_'.$tb.' = :id', ['id'=>$id]);
        return redirect()->route('motivos.admin')->with('status', 'Deletado')->with('tableName', $NomeTabela)->with('tableNameNotAccent', $tb);
    }
}