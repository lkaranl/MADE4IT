<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function cliente()
    {
        $clientes = Cliente::All();
        
        return view('cliente/listar', array('clientes' => $clientes));
    }

    public function clienteCadastrar()
    {
        return view('cliente/cadastrar');
    }

    public function cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
          'nome' => 'unique:cliente',
        ]);
        if ($validacao->fails()) {
            return redirect('cliente/cadastrar')
                        ->withErrors($validacao)
                        ->withInput();
        }

        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->save();

        return redirect('/cliente');
    }

    public function clienteEditar($id)
    {
        $cliente = Cliente::find((int)$id);
        
        if ($cliente !== null) {
          return view('/cliente/editar', array('cliente' => $cliente));
        } else {
          abort(404);
        }
    }

    public function clienteAtualizar(Request $request, $id)
    {
      $validacao = Validator::make($request->all(), [
        'nome' => 'unique:cliente,nome,'.$id,
      ]);
      if ($validacao->fails()) {
          return redirect('cliente/editar/'.$id)
                      ->withErrors($validacao)
                      ->withInput();
      }

      $cliente = Cliente::find($id);

      $cliente->update([
        'nome' => $request->nome,
      ]);
      return redirect('/cliente');
    }

    public function clienteExcluir($id)
    {
      $consulta = DB::table('svc')->where('cidade_id', $id)->value('id');
      if ($consulta == null) {
        $cliente = Cliente::find($id);
        $cliente->delete();
      } else {
        app('App\Http\Controllers\MensagemController')->mensagemDeErro('Este CLIENTE não pode ser excluído pois faz parte de um SVC!', 'ativo');
      }
      return redirect('/cliente');
    }

    public function clienteBuscar(Request $request)
    {       
        $search = $request->get('search');

        $clientes = Cliente::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('nome', 'LIKE', '%'.$search.'%')
                    ->paginate(20);
        return view('/cliente/listar', compact('clientes', 'search'));
    
      }
}
