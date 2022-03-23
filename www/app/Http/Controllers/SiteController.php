<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Site;
use App\Models\Estado;
use App\Models\Cidade;



class SiteController extends Controller
{
    public function site()
    {
        $sites = Site::All();

        return view('site/listar', array('sites' => $sites));
    }

    public function siteCadastrar()
    {
        $estados = Estado::all()->sortBy('nome');
        $cidades = Cidade::all()->sortBy('nome');

        return view('site/cadastrar', array(
            'estados' => $estados,
            'cidades' => $cidades, 
        ));
    }

    public function Cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'nome' => 'unique:site',
            'sigla' => 'unique:site',
            'faixa_administrativa' => 'unique:site',
        ]);
        if ($validacao->fails()) {
            return redirect('site/cadastrar')
                        ->withErrors($validacao)
                        ->withInput();
        }

        $site = new Site;

        $site->nome = $request->nome;
        $site->sigla = $request->sigla;
        $site->estado_id = $request->estado_id;
        $site->cidade_id = $request->cidade_id;
        $site->faixa_administrativa = $request->faixa_administrativa;
        $site->coordenadas = $request->coordenadas;

        $site->save();

        return redirect('/site');
    }

    public function siteEditar($id)
    {
        $site = Site::find($id);       
        
        $estados = Estado::all()->sortBy('nome');
        $cidades = Cidade::all()->sortBy('nome');

        return view('/site/editar', array(
            'site' => $site,
            'estados' => $estados,
            'cidades' => $cidades)
        );
    }

    public function siteAtualizar(Request $request, $id)
    {
        $validacao = Validator::make($request->all(), [
            'nome' => 'unique:site,nome,'.$id,
            'sigla' => 'unique:site,sigla,'.$id,
            'faixa_administrativa' => 'unique:site,faixa_administrativa,'.$id,
        ]);
        if ($validacao->fails()) {
            return redirect('site/editar/'.$id)
                        ->withErrors($validacao)
                        ->withInput();
        }

        $site = Site::find($id);   

        $estados = Estado::all();
        $cidades = Cidade::all();

        $site->update([
            'nome' => $request->nome,
            'sigla' => $request->sigla,
            'estado_id' => $request->estado_id,
            'cidade_id' => $request->cidade_id,
            'faixa_administrativa' => $request->faixa_administrativa,
            'coordenadas' => $request->coordenadas,
        ]);

      return redirect('/site');
    }

    public function siteExcluir($id)
    {
        $consulta = DB::table('ativo')->where('site_id', $id)->value('id');
        if ($consulta == null) {
            $site = Site::find($id);
            $site->delete();
        } else {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('Este SITE não pode ser excluído pois faz parte de um ATIVO!', 'site');
        }
        return redirect('/site');
    }

    
    public function siteBuscar(Request $request)
    {       
        $search = $request->get('search');

        $sites = Site::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('nome', 'LIKE', '%'.$search.'%')
                    ->orWhere('sigla', 'LIKE', '%'.$search.'%')
                    ->orWhere('faixa_administrativa', 'LIKE', '%'.$search.'%')
                    ->paginate(20);
        return view('/site/listar', compact('sites', 'search'));
    }    
}
