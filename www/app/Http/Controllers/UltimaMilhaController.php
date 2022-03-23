<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\UltimaMilha;

class UltimaMilhaController extends Controller
{
    public function ultimaMilha()
    {
        $ultimas = UltimaMilha::All()->sortBy('fantasia');
        
        return view('ultima-milha/listar', array('ultimas' => $ultimas));
    }

    public function ultimaMilhaCadastrar()
    {
        return view('ultima-milha/cadastrar');
    }

    public function Cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'fantasia' => 'unique:ultima_milha',
            'razao_social' => 'unique:ultima_milha',
            'cnpj' => 'unique:ultima_milha',
        ]);
        if ($validacao->fails()) {
            return redirect('ultima-milha/cadastrar')
                        ->withErrors($validacao)
                        ->withInput();
        }

        $ultima = new UltimaMilha;
        $ultima->fantasia = $request->fantasia;
        $ultima->razao_social = $request->razao_social;
        $ultima->cnpj = $request->cnpj;
        $ultima->telefone = $request->telefone;
        $ultima->cep = $request->cep;
        $ultima->endereco = $request->endereco;
        $ultima->email = $request->email;

        $ultima->save();

        return redirect('/ultima-milha');
    }

    public function ultimaMilhaEditar($id)
    {
        $ultima = UltimaMilha::find($id);
        return view('/ultima-milha/editar', array('ultima' => $ultima));
    }

    public function ultimaMilhaAtualizar(Request $request, $id)
    {
      $validacao = Validator::make($request->all(), [
          'fantasia' => 'unique:ultima_milha,fantasia,'.$id,
          'razao_social' => 'unique:ultima_milha,razao_social,'.$id,
          'cnpj' => 'unique:ultima_milha,cnpj,'.$id,
      ]);
      
      if ($validacao->fails()) {
          return redirect('ultima-milha/editar/'.$id)
                      ->withErrors($validacao)
                      ->withInput();
      }

      $ultima = UltimaMilha::find($id);

      $ultima->update([
        'fantasia' => $request->fantasia,
        'razao_social' => $request->razao_social,
        'cnpj' => $request->cnpj,
        'cep' => $request->cep,
        'endereco' => $request->endereco,
        'telefone' => $request->telefone,
        'email' => $request->email,
      ]);
      return redirect('/ultima-milha');
    }
    
    public function ultimaMilhaExcluir($id)
    {
      $ultima = UltimaMilha::find($id);
      $ultima->delete();

      $has = DB::table('cidade_has_ultima_milha')->where('ultima_milha_id', $id);
      $has->delete();
      
      return redirect('/ultima-milha');
    }

    public function ultimaMilhaBuscar(Request $request)
    {       
        $search = $request->get('search');

        $ultimas = UltimaMilha::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('fantasia', 'LIKE', '%'.$search.'%')
                    ->orWhere('cnpj', 'LIKE', '%'.$search.'%')
                    ->orWhere('telefone', 'LIKE', '%'.$search.'%')
                    ->orWhere('email', 'LIKE', '%'.$search.'%')
                    ->paginate(20)->sortBy('fantasia');
        return view('ultima-milha/listar', compact('ultimas', 'search'));
    }    

}
