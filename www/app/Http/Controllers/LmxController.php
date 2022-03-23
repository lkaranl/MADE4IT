<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Lmx;
use App\Models\Lmc;
use App\Models\Svc;
use App\Models\Subinterface;

class LmxController extends Controller
{
    public function lmxCadastrar($id = null)
    {
        $lmcs = Lmc::All();

        $svcs = DB::table('svc')
            ->join('svc_has_lmc', 'svc.id', '=', 'svc_has_lmc.svc_id')
            ->select('svc.*')
            ->where('lmc_id', $id)
            ->get();

        if ($id !== null and $id != 0) {
            $svcs = DB::table('svc')
            ->join('svc_has_lmc', 'svc.id', '=', 'svc_has_lmc.svc_id')
            ->select('svc.*')
            ->where('lmc_id', $id)
            ->get();

            $id = Lmc::find($id);
            
            return view('lmx/cadastrar', array(
                'lmcs' => $lmcs, 
                'svcs' => $svcs, 
                'id' => $id)
            );
        } else {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('LMC não especificado por URL!', 'painel');
        }
    }

    public function Cadastrar(Request $request)
    {
        for ($i=0; $i < count($request->interface); $i++) { 
            $validacao = Validator::make($request->all(), [
                'interface['.$i.']' => 'unique:lmx',
            ]);
            if ($validacao->fails()) {
                return redirect('/lmx/cadastrar/'.$request->lmc_id)
                ->withErrors($validacao)
                ->withInput();
            }
        }
        
        $lmx = new Lmx;

        $lmx->nome = $request->nome;
        $lmx->lmc_id = $request->lmc_id;
        $lmx->save();

        $lmx_id = $lmx->id;

        for ($i=0; $i < count($request->interface); $i++) {
            if ($request->svc[$i] == '0') {
                $subinterface = new Subinterface;
        
                $subinterface->lmx_id = $lmx_id;
                $subinterface->svc_id = null;
                $subinterface->nome = $request->interface[$i];
                $subinterface->save();
            }
            elseif ($request->svc[$i] !== null && $request->svc[$i] !== '') {
                $subinterface = new Subinterface;
        
                $subinterface->lmx_id = $lmx_id;
                $subinterface->svc_id = $request->svc[$i];
                $subinterface->nome = $request->interface[$i];
                $subinterface->save();
            }
        }

        return redirect('/lmc/editar/'.$request->lmc_id);
    }

    public function lmxEditar($id)
    {
        $lmx = Lmx::find($id);
        $lmc = Lmc::find($lmx->lmc_id);
        $sub_gerencia = DB::table('subinterface')->where('lmx_id', $id)->where('svc_id', null)->get();
        $subs = DB::table('subinterface')->where('lmx_id', $lmx->id)->get();
        $svcs = DB::table('svc_has_lmc')
            ->join('svc', 'svc.id', '=', 'svc_has_lmc.svc_id')
            ->select('svc.*', 'svc_has_lmc.*')
            ->where('lmc_id', $lmc->id)
            ->get();
        
        if ($sub_gerencia == null && $lmc->vlan_genrencia) {
            $sub_gerencia = explode("", "");
        }

        return view('lmx/editar', array(
            'lmx' => $lmx, 
            'lmc' => $lmc,
            'svcs' => $svcs,
            'subs' => $subs,
            'sub_gerencia' => $sub_gerencia)
        );
    }

    public function lmxAtualizar(Request $request, $id)
    {
        $lmx = Lmx::find($id);

        $lmx->update([
            'nome' => $request->nome,
            'lmc_id' => $request->lmc_id
        ]);

        DB::table('subinterface')->where('lmx_id', $id)->delete();

        for ($i=0; $i < count($request->interface); $i++) {
            if ($request->svc[$i] == '0') {
                $subinterface = new Subinterface;
        
                $subinterface->lmx_id = $id;
                $subinterface->svc_id = null;
                $subinterface->nome = $request->interface[$i];
                $subinterface->save();
            }
            elseif ($request->svc[$i] !== null && $request->svc[$i] !== '') {
                $subinterface = new Subinterface;
        
                $subinterface->lmx_id = $id;
                $subinterface->svc_id = $request->svc[$i];
                $subinterface->nome = $request->interface[$i];
                $subinterface->save();
            }
        }

        return redirect('/lmc/editar/'.$request->lmc_id);
    }

    public function lmxExcluir($id)
    {
        DB::table('subinterface')->where('lmx_id', $id)->delete();
        $lmx = Lmx::find($id);
        $lmc = $lmx->lmc_id;
        $lmx->delete();
        return redirect('/lmc/editar/'.$lmc);
    }
}
