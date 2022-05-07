<?php

namespace App\Http\Controllers;

use App\Models\CrudDbFindAll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {

        // Buscar os dados
        // Dados de Cessação
        $cessacao = DB::select('select * from cessacao');
        // Dados de Reativação
        $reativacao = DB::select('select * from reativacao');
        // Dados de Suspensão
        $suspensao = DB::select('select * from suspensao');

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

            } elseif ($tb === 'reativacao') {

                $NomeTabela = "Reativação";

            } elseif ($tb === "suspensao") {

                $NomeTabela = "Suspensão";
            }

            return view('addMotivo', ['tbNome' => $NomeTabela]);

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

        $tbNomeAccent = $tabela == 'cessacao' ? 'Cessação' : 'Reativação';

        if ($tabela === 'reativacao') {

            DB::insert('insert into reativacao (codigo, nome) values (:codigo, :nome)',
            [
                'codigo' => $rawData['codigo'],
                'nome' => $rawData['nome']
            ]);
            $lastId = DB::getPdo()->lastInsertId();

            return redirect()->route('motivos.admin')->with('status', 'Adicionado')->with('tableName', 'Reativação')->with('tableNameNotAccent', 'reativacao')->with('lastId', $lastId);

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
            $lastId = DB::getPdo()->lastInsertId();


            return redirect()->route('motivos.admin')->with('status', 'Adicionado')->with('tableName', $tbNomeAccent)->with('tableNameNotAccent', $tabela)->with('lastId', $lastId);
        }
    }

    /* -------------------------------------------------------------------------- */

    public function edit($id, $tb) {

        if($tb === 'reativacao' || $tb === 'suspensao' || $tb === 'cessacao') {

            if ($tb === 'cessacao' ) {

                $NomeTabela = "Cessação";

            } elseif ($tb === 'reativacao') {

                $NomeTabela = "Reativação";

            } elseif ($tb === "suspensao") {

                $NomeTabela = "Suspensão";
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

    public function editAction(Request $request) {
        echo '<pre>';
        print_r($request->except(['_token']));
        echo '</pre>';
        $DbData = $request->except(['_token']);


        if($request->tb == 'reativacao') {
            DB::update('update reativacao set codigo = :codigo, nome = :nome where id_'. $request->tb .' = :id',
            [
                'codigo' => $DbData['codigo'],
                'nome' => $DbData['nome'],
                'id' => $request->id
            ]);

            return redirect('/motivos/admin/edit/'. $request->id . '/'. $request->tb)->with('success', 'Alterado');

        } else {

            /* Caso tenha algum valor vazio vai entrar no banco de dados sem erro */
            $prisma_sabi = empty($DbData['prisma_sabi']) ? '  ' : $DbData['prisma_sabi'];
            $reatnb_plenus = empty($DbData['reatnb_plenus']) ? '  ' : $DbData['reatnb_plenus'];
            $situacao = empty($DbData['situacao']) ? '  ' : $DbData['situacao'];

            DB::update('update '. $request->tb .' set codigo = :codigo, nome = :nome, conc_final = :conc_final, prisma_sabi = :prisma_sabi, reatnb_plenus = :reatnb_plenus, situacao = :situacao where id_'. $request->tb .' = :id',
            [
                'codigo' => $DbData['codigo'],
                'nome' => $DbData['nome'],
                'conc_final' => $DbData['conc_final'],
                'prisma_sabi' => $prisma_sabi,
                'reatnb_plenus' => $reatnb_plenus,
                'situacao' => $situacao,
                'id' => $request->id
            ]);

            return redirect('/motivos/admin/edit/'. $request->id . '/'. $request->tb)->with('success', 'Alterado');

        }
    }

    /* -------------------------------------------------------------------------- */

    public function del($id, $tb) {

        if ($tb === 'cessacao' ) {

            $NomeTabela = "Cessação";

        } elseif ($tb === 'reativacao') {

            $NomeTabela = "Reativação";

        } elseif ($tb === "suspensao") {

            $NomeTabela = "Suspensão";
        }

        DB::delete('delete from '. $tb .' where id_'.$tb.' = :id', ['id'=>$id]);
        return redirect()->route('motivos.admin')->with('status', 'Deletado')->with('tableName', $NomeTabela)->with('tableNameNotAccent', $tb);
    }

}
