<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Equipamento;


class EquipamentoController extends Controller
{
    public function equipamento()
    {
        $equipamentos = Equipamento::All()->sortBy('marca');
        
        return view('equipamento/listar', array('equipamentos' => $equipamentos));
    }

    public function equipamentoCadastrar()
    {
        return view('equipamento/cadastrar');
    }

    public function cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'serial' => 'unique:equipamento,serial,'.$id,
            'patrimonio' => 'unique:equipamento,patrimonio,'.$id,
        ]);
        if ($validacao->fails()) {
            return redirect('equipamento/editar/'.$id)
                        ->withErrors($validacao)
                        ->withInput();
        }
        
        $equipamento = new Equipamento;

        $equipamento->marca = $request->marca;
        $equipamento->modelo = $request->modelo;
        $equipamento->serial = $request->serial;
        $equipamento->patrimonio = $request->patrimonio;
        $equipamento->save();

        return redirect('/equipamento');
    }

    public function equipamentoEditar($id)
    {
        $equipamento = Equipamento::find((int)$id);
        
        if ($equipamento !== null) {
          return view('/equipamento/editar', array('equipamento' => $equipamento));
        } else {
          abort(404);
        }
    }

    public function equipamentoAtualizar(Request $request, $id)
    {
      $equipamento = Equipamento::find($id);

      $equipamento->update([
        'marca' => $request->marca,
        'modelo' => $request->modelo,
        'serial' => $request->serial,
        'patrimonio' => $request->patrimonio,
      ]);
      return redirect('/equipamento');
    }

    public function equipamentoExcluir($id)
    {
      $consulta = DB::table('ativo')->where('equipamento_id', $id)->value('id');
      if ($consulta == null) {
        $equipamento = Equipamento::find($id);
        $equipamento->delete();
      } else {
        app('App\Http\Controllers\MensagemController')->mensagemDeErro('Este EQUIPAMENTO não pode ser excluído pois faz parte de um ATIVO!', 'equipamento');
      }
      return redirect('/equipamento');
    }
    
    public function equipamentoBuscar(Request $request)
    {       
      $search = $request->get('search');

      $equipamentos = Equipamento::where('id', 'LIKE', '%'.$search.'%')
                  ->orWhere('marca', 'LIKE', '%'.$search.'%')
                  ->orWhere('modelo', 'LIKE', '%'.$search.'%')
                  ->orWhere('serial', 'LIKE', '%'.$search.'%')
                  ->paginate(20)->sortBy('nome');;
      return view('/equipamento/listar', compact('equipamentos', 'search'));
    }    
}
