<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\UltimaMilha;
use App\Models\CidadeUltimaMilha;

class CidadeController extends Controller
{
    public function cidade()
    {
        $cidades = Cidade::All()->sortBy('nome');
        return view('cidade/listar', array('cidades' => $cidades));
    }

    public function cidadeCadastrar()
    {
      $estados = Estado::All()->sortBy('nome');
      $ultimas = UltimaMilha::All()->sortBy('fantasia');

      return view('cidade/cadastrar', array('estados' => $estados, 'ultimas' => $ultimas));
    }

    public function Cadastrar(Request $request)
    {
      $validacao = Validator::make($request->all(), [
        'sigla' => 'unique:cidade',
      ]);
      if ($validacao->fails()) {
          return redirect('cidade/cadastrar')
                      ->withErrors($validacao)
                      ->withInput();
      }
      
      if (DB::table('cidade')->where('sigla', $request->sigla)->value('id') != null){
        app('App\Http\Controllers\MensagemController')->mensagemDeErro('Sigla já cadastrada', 'cidade/cadastrar');
      } else {
        $cidade = new Cidade;
        $cidade->nome = $request->nome;
        $cidade->sigla = strtoupper($request->sigla);
        $cidade->estado_id = $request->estado;

        $cidade->save();
        $cidade_id = $cidade->id;

        foreach ($request->ultimas as $ultima) {
          if ((int)$ultima !== 0) {
            $consulta = DB::table('cidade_has_ultima_milha')->where('cidade_id', $cidade_id)->where('ultima_milha_id', $ultima)->value('ultima_milha_id');
            if ($consulta == null){
              $has = new CidadeUltimaMilha;
      
              $has->cidade_id = $cidade_id;
              $has->ultima_milha_id = $ultima;
              $has->save();
            }
          }
        }
        
        return redirect('/cidade');
      }
    }

    public function cidadeEditar($id)
    {
        $cidade = Cidade::find($id);
        $has = DB::table('cidade_has_ultima_milha')->where('cidade_id', $id)->get();
        $quant = DB::table('cidade_has_ultima_milha')->where('cidade_id', $id)->count();
        $estados = Estado::All()->sortBy('nome');
        $ultimas = UltimaMilha::All()->sortBy('fantasia');

        return view('cidade/editar', array('cidade' => $cidade, 'has' => $has, 'quant' => $quant, 'estados' => $estados, 'ultimas' => $ultimas));
    }

    public function cidadeAtualizar(Request $request, $id)
    {
      $validacao = Validator::make($request->all(), [
        'sigla' => 'unique:cidade,sigla,'.$id,
      ]);
      if ($validacao->fails()) {
          return redirect('cidade/cadastrar/'.$id)
                      ->withErrors($validacao)
                      ->withInput();
      }

      $cidade = Cidade::find($id);
      $cidade->update([
        'nome' => $request->nome,
        'sigla' => strtoupper($request->sigla),
        'estado_id' => $request->estado
      ]);
      
      DB::table('cidade_has_ultima_milha')->where('cidade_id', $id)->delete();

      foreach ($request->ultimas as $ultima) {
        if ((int)$ultima !== 0) {
          $consulta = DB::table('cidade_has_ultima_milha')->where('cidade_id', $id)->where('ultima_milha_id', $ultima)->value('ultima_milha_id');
          if ($consulta == null){
            $has = new CidadeUltimaMilha;
    
            $has->cidade_id = $id;
            $has->ultima_milha_id = $ultima;
            $has->save();
          }
        }
      }

      return redirect('/cidade');
    }
    
    public function cidadeExcluir($id)
    {
      $consulta = DB::table('lmc')->where('cidade_id', $id)->value('id');
      if ($consulta == null) {
        $cidade = Cidade::find($id);
        $cidade->delete();
      } else {
        app('App\Http\Controllers\MensagemController')->mensagemDeErro('Esta CIDADE não pode ser excluída pois faz parte de um LMC!', 'cidade');
      }
      return redirect('/cidade');
    }

    public function cidadeBuscar(Request $request)
    {       
        $search = $request->get('search');

        $cidades = Cidade::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('nome', 'LIKE', '%'.$search.'%')
                    ->orWhere('sigla', 'LIKE', '%'.$search.'%')
                    ->paginate(20);
        return view('/cidade/listar', compact('cidades', 'search'));
    }

}
