<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Ativo;
use App\Models\Funcao;
use App\Models\Equipamento;
use App\Models\Site;


class AtivoController extends Controller
{
    public function ativo()
    {
        $ativos = Ativo::All();
        
        return view('ativo/listar', array('ativos' => $ativos));
    }

    public function ativoCadastrar()
    {
        $ativos = Ativo::All()->sortBy('nome');
        $funcoes = Funcao::All()->sortBy('nome');
        $equipamentos = Equipamento::All()->sortBy('marca');
        $sites = Site::All()->sortBy('sigla');

        return view('ativo/cadastrar', array(
            'funcoes' => $funcoes, 
            'ativos' => $ativos,
            'equipamentos' => $equipamentos,
            'sites' => $sites)    
        );
    }

    public function Cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'descricao' => 'unique:ativo',
            'ip_legado' => 'unique:ativo',
        ]);
        if ($validacao->fails()) {
            return redirect('ativo/cadastrar')
                        ->withErrors($validacao)
                        ->withInput();
        }

        $ativo = new Ativo;
        $terminacao = DB::table('funcao')->where('id', $request->funcao_id)->value('terminacao');
        $site = DB::table('site')->where('id', $request->site_id)->value('sigla');

        $ativo->descricao = $request->descricao;
        $ativo->ip_legado = $request->ip_legado;
        $ativo->ip = $request->ip;
        $ativo->nome = $site.'-'.$terminacao;
        $ativo->ativo = $request->ativo;
        $ativo->observacao = $request->observacao;
        $ativo->funcao_id = $request->funcao_id;
        $ativo->equipamento_id = $request->equipamento_id;
        $ativo->site_id = $request->site_id;
        $ativo->coordenadas = $request->coordenadas;

        $ativo->save();

        return redirect('/ativo');
    }

    public function ativoEditar($id)
    {
        $ativo = Ativo::find($id);       
        
        $funcoes = Funcao::All()->sortBy('nome');
        $equipamentos = Equipamento::All()->sortBy('marca');
        $sites = Site::All()->sortBy('sigla');

        return view('/ativo/editar', array(
            'ativo' => $ativo,
            'funcoes' => $funcoes,
            'equipamentos' => $equipamentos,
            'sites' => $sites)
        );
    }

    public function ativoAtualizar(Request $request, $id)
    {
        $validacao = Validator::make($request->all(), [
            'descricao' => 'unique:ativo,descricao,'.$id,
            'ip_legado' => 'unique:ativo,ip_legado,'.$id,
        ]);
        if ($validacao->fails()) {
            return redirect('ativo/editar/'.$id)
                        ->withErrors($validacao)
                        ->withInput();
        }

        $ativo = Ativo::find($id);    
        $terminacao = DB::table('funcao')->where('id', $request->funcao_id)->value('terminacao');
        $site = DB::table('site')->where('id', $request->site_id)->value('sigla');

        $ativo->update([
            'descricao' => $request->descricao,
            'ip_legado' => $request->ip_legado,
            'ip' => $request->ip,
            'nome' => $site.'-'.$terminacao,
            'ativo' => $request->ativo,
            'observacao' => $request->observacao,
            'funcao_id' => $request->funcao_id,
            'equipamento_id' => $request->equipamento_id,
            'site_id' => $request->site_id,
            'coordenadas' => $request->coordenadas,
        ]);

        return redirect('/ativo');
    }

    public function ativoExcluir($id)
    {
        $consulta = DB::table('enlace')->where('ativo_escravo', $id)->orWhere('ativo_mestre', $id)->value('id');
        if ($consulta == null) {
            $ativo = Ativo::find($id);
            $ativo->delete();
            return redirect('/ativo');
        } else {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('Este ATIVO não pode ser excluído pois faz parte de um ENLACE!', 'ativo');
        }
        
        $consulta = DB::table('lmc')->where('ativo_id', $id)->value('id');
        if ($consulta == null) {
            $ativo = Ativo::find($id);
            $ativo->delete();
            return redirect('/ativo');
        } else {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('Este ATIVO não pode ser excluído pois faz parte de um LMC!', 'ativo');
        }
    }


    public function ativoBuscar(Request $request)
    {       
        $search = $request->get('search');

        $ativos = Ativo::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('descricao', 'LIKE', '%'.$search.'%')
                    ->orWhere('ip', 'LIKE', '%'.$search.'%')
                    ->orWhere('nome', 'LIKE', '%'.$search.'%')
                    ->orWhere('ativo', 'LIKE', '%'.$search.'%')
                    ->paginate(20);
        return view('/ativo/listar', compact('ativos', 'search'));
    }
}
