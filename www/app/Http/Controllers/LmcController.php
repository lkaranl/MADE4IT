<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Lmc;
use App\Models\Svc;
use App\Models\Svclmc;
use App\Models\Cidade;
use App\Models\Cliente;
use App\Models\Ativo;


class LmcController extends Controller
{
    public function lmc()
    {
        $lmcs = Lmc::All();
        $clientes = Cliente::All();
        $svcs = DB::table('svc')
          ->join('svc_has_lmc', 'svc.id', '=', 'svc_has_lmc.svc_id')
          ->select('svc.*', 'svc_has_lmc.lmc_id')
          ->get();
        
        return view('lmc/listar', array('lmcs' => $lmcs, 'svcs' => $svcs, 'clientes' => $clientes));
    }

    public function lmcCadastrar($id = null)
    {
        $svcs = Svc::All();
        $cidades = Cidade::All()->sortBy('nome');
        $ativos = Ativo::All()->sortBy('nome');
        $identificador = DB::table('lmc')->max('identificador') + 1;
        $resultado = app('App\Http\Controllers\HomeController')->faixaIPs('lmc', 'faixa_gerencia');
        $faixa_gerencia = $resultado['somas'];

        if ($id !== null) {
            $id = Svc::find($id);
            
            return view('lmc/cadastrar', array(
              'svcs' => $svcs, 
              'id' => $id, 
              'identificador' => $identificador, 
              'faixa_gerencia' => $faixa_gerencia, 
              'cidades' => $cidades, 
              'ativos' => $ativos)    
            );
        } else {
            return view('lmc/cadastrar', array(
              'svcs' => $svcs, 
              'id' => null, 
              'identificador' => $identificador, 
              'faixa_gerencia' => $faixa_gerencia, 
              'cidades' => $cidades, 
              'ativos' => $ativos)    
            );
        }
    }

    public function Cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'nome' => 'unique:lmc',
            'identificador' => 'unique:lmc',
            'faixa_gerencia' => 'unique:lmc',
        ]);
        if ($validacao->fails()) {
            return redirect('lmc/cadastrar')
                        ->withErrors($validacao)
                        ->withInput();
        }
        
        $lmc = new Lmc;

        $lmc->identificador = $request->identificador;
        $lmc->spid = $request->spid;
        $sigla = DB::table('cidade')->where('id', $request->cidade_id)->value('sigla');
        $lmc->nome = "LMC.".$request->spid.".".$sigla.".".$request->identificador;
        $lmc->ce_identify = $request->ce_identify;
        $lmc->faixa_gerencia = $request->faixa_gerencia;
        $lmc->lmce = "LMCE.".$request->spid.".".$request->identificador." => ".$request->ce_identify;
        $lmc->vlan_gerencia = $request->vlan_gerencia;
        $lmc->interface = $request->interface;
        $lmc->cidade_id = $request->cidade_id;
        $lmc->ativo_id = $request->ativo_id;
        $lmc->save();
        
        $lmc_id = $lmc->id;

        foreach ($request->svc as $servico) {
            if ((int)$servico !== 0) {
                $consulta = DB::table('svc_has_lmc')->where('lmc_id', $lmc_id)->where('svc_id', $servico)->value('svc_id');
                if ($consulta == null){
                    $has = new Svclmc;
            
                    $has->lmc_id = $lmc_id;
                    $has->svc_id = $servico;
                    $has->save();
                }
            }
        }

        return redirect('/lmx/cadastrar/'.$lmc_id);
    }

    public function lmcEditar($id)
    {
        $lmc = Lmc::find($id);
        $cidades = Cidade::All();
        $ativos = Ativo::All();
        $svcs = Svc::All();
        $lmxs = DB::table('lmx')->where('lmc_id', $id)->get();
        $has = DB::table('svc_has_lmc')->where('lmc_id', $id)->get();
        $quant = DB::table('svc_has_lmc')->where('lmc_id', $id)->count();
        $interfaces = null;
        
        foreach ($lmxs as $lmx) {
            $interfaces = DB::table('subinterface')->where('lmx_id', $lmx->id)->get();
        }

        return view('lmc/editar', array(
            'lmc' => $lmc, 
            'cidades' => $cidades, 
            'has' => $has, 
            'quant' => $quant, 
            'svcs' => $svcs, 
            'lmxs' => $lmxs, 
            'interfaces' => $interfaces, 
            'ativos' => $ativos)
        );
    }

    public function lmcAtualizar(Request $request, $id)
    {
        $validacao = Validator::make($request->all(), [
            'nome' => 'unique:lmc,nome,'.$id,
            'identificador' => 'unique:lmc,identificador,'.$id,
        ]);
        if ($validacao->fails()) {
            return redirect('lmc/editar/'.$id)
                        ->withErrors($validacao)
                        ->withInput();
        }

        $lmc = Lmc::find($id);

        $sigla = DB::table('cidade')->where('id', $request->cidade_id)->value('sigla');

        $lmc->update([
            'identificador' => $request->identificador,
            'spid' => $request->spid,
            'nome' => "LMC.".$request->spid.".".$sigla.".".$request->identificador,
            'ce_identify' => $request->ce_identify,
            'faixa_gerencia' => $request->faixa_gerencia,
            'lmce' => "LMCE.".$request->spid.".".$request->identificador." => ".$request->ce_identify,
            'vlan_gerencia' => $request->vlan_gerencia,
            'interface' => $request->interface,
            'cidade_id' => $request->cidade_id,
            'ativo_id' => $request->ativo_id,
        ]);

        $trans = array('[' => '', ']' => '', '{"id":' => '', '}' => '');

        if ($request->vlan_gerencia == null) {
            $lmxs = DB::table('lmx')->where('lmc_id', $id)->get('id');
            if ($lmxs != null) {
                $lmxs = explode(",", strtr($lmxs, $trans));
                foreach ($lmxs as $lmx) {
                    DB::table('subinterface')->where('lmx_id', $lmx)->where('svc_id', null)->delete();
                }
            }
        }

        $svcs = Svc::All();
        foreach ($svcs as $svc) {
            if(in_array($svc->id, $request->svc) == false){
                $lmxs = DB::table('lmx')->where('lmc_id', $id)->get('id');
                if ($lmxs != null) {
                    $lmxs = explode(",", strtr($lmxs, $trans));
                    foreach ($lmxs as $lmx) {
                        DB::table('subinterface')->where('svc_id', $svc->id)->where('lmx_id', $svc->id)->delete();
                        DB::table('subinterface')->where([
                            ['svc_id', '=', $svc->id],
                            ['lmx_id', '=', $lmx],
                        ])->delete();
                    }
                }
            }
        }

        DB::table('svc_has_lmc')->where('lmc_id', $id)->delete();
        
        foreach ($request->svc as $servico) {
            if ((int)$servico !== 0) {
                $consulta = DB::table('svc_has_lmc')->where('lmc_id', $id)->where('svc_id', $servico)->value('svc_id');
                if ($consulta == null){
                    $has = new Svclmc;
                    
                    $has->lmc_id = $id;
                    $has->svc_id = $servico;
                    $has->save();
                }
            }
        }
      
        return redirect('/lmc/editar/'.$id);
    }

    public function lmcExcluir($id)
    {
        $consulta = DB::table('lmx')->where('lmc_id', $id)->value('id');
        if ($consulta == null) {
            $lmc = Lmc::find($id);
            $lmc->delete();
        } else {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('Este LMC não pode ser excluído pois faz parte de um LMX!', 'lmc');
        }
        return redirect('/lmc');
    }

    public function lmcBuscar(Request $request)
    {       
        $search = $request->get('search');

        $lmcs = Lmc::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('identificador', 'LIKE', '%'.$search.'%')
                    ->orWhere('nome', 'LIKE', '%'.$search.'%')
                    ->orWhere('ce_identify', 'LIKE', '%'.$search.'%')
                    ->paginate(20);

        $svcs = DB::table('svc')
        ->join('svc_has_lmc', 'svc.id', '=', 'svc_has_lmc.svc_id')
        ->select('svc.*', 'svc_has_lmc.lmc_id')
        ->get();
        
        $clientes = Cidade::All();            

        return view('/lmc/listar', compact('lmcs','svcs','clientes', 'search'));
    }

    public function lmcScript($id)
    {
        $lmc = Lmc::find($id);
        $cidades = Cidade::All();
        $ativos = Ativo::All();
        $svcs = Svc::All();
        $lmxs = DB::table('lmx')->where('lmc_id', $id)->get();
        $has = DB::table('svc_has_lmc')->where('lmc_id', $id)->get();
        $quant = DB::table('svc_has_lmc')->where('lmc_id', $id)->count();

        foreach ($lmxs as $lmx) {
            $return = app('App\Http\Controllers\HomeController')->getIP($lmx->faixa_gerencia, 1);
            $getway = $return;
            $return = app('App\Http\Controllers\HomeController')->getIP($lmx->faixa_gerencia, 2, true);
            $gerencia = $return;

            // for ($i=0; $i < $quant; $i++) { 
                // foreach ($svcs as $svc) {
                    // if ($svc->id == $has[$i]->svc_id) {
                        if ($lmx->peering_mrouter != null) {
                            $return = app('App\Http\Controllers\HomeController')->getIP($lmx->peering_mrouter, 1);
                            $vrfs[] = $return;
                            $return = app('App\Http\Controllers\HomeController')->getIP($lmx->peering_mrouter, 2, true);
                            $mrouters[] = $return;
                        } else {
                            $vrfs[] = null;
                            $mrouters[] = null;
                        }
                    // }
                // }
            // }
        }

        return view('lmc/script', array(
            'lmc' => $lmc, 
            'cidades' => $cidades, 
            'has' => $has, 
            'quant' => $quant, 
            'svcs' => $svcs, 
            'lmxs' => $lmxs, 
            'ativos' => $ativos,
            'vrfs' => $vrfs,
            'mrouters' => $mrouters,
            'getway' => $getway,
            'gerencia' => $gerencia)
        );
    }

    public function lmcInfo($id)
    {
        $lmc = Lmc::find($id);
        $cidades = Cidade::All();
        $ativos = Ativo::All();
        $svcs = Svc::All();
        $lmxs = DB::table('lmx')->where('lmc_id', $id)->get();
        $id_lmxs = DB::table('lmx')->where('lmc_id', $id)->get('id');
        $has = DB::table('svc_has_lmc')->where('lmc_id', $id)->get('svc_id');

        $trans = array('[' => '', ']' => '', '{"svc_id":' => '', '}' => '');
        $trans2 = array('[' => '', ']' => '', '{"id":' => '', '}' => '');
        
        if ($has != '[]') {
            $id_svcs = explode(",", strtr($has, $trans));
            $id_lmxs = explode(",", strtr($id_lmxs, $trans2));
            $svcs = DB::table('svc')->whereIn('id', $id_svcs)->get();
            $sub_gerencias = DB::table('subinterface')->whereIn('lmx_id', $id_lmxs)->where('svc_id', null)->get();
            $sub_svcs = DB::table('subinterface')->whereIn('lmx_id', $id_lmxs)->whereIn('svc_id', $id_svcs)->get();
        } else {
            $svcs = null;
            $sub_gerencias = null;
            $sub_svcs = null;
        }

        // echo 'sub_gerencias:'.$sub_gerencias.'/<br><br>';
        // echo 'sub_svcs:'.$sub_svcs.'/<br><br>';
        // foreach ($sub_svcs as $sub_svc) {
        //     echo $sub_svc->nome.'#########';
        // }


        return view('lmc/info', array(
            'lmc' => $lmc, 
            'cidades' => $cidades, 
            'svcs' => $svcs, 
            'lmxs' => $lmxs, 
            'has' => $has, 
            'sub_gerencias' => $sub_gerencias, 
            'sub_svcs' => $sub_svcs, 
            'ativos' => $ativos)
        );
    }
}