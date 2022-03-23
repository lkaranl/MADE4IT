<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Svc;
use App\Models\Lmc;
use App\Models\Ativo;
use App\Models\Cliente;

class SvcController extends Controller
{
    public function svc()
    {
        $svcs = Svc::All();
        $ativos = Ativo::All();
        $lmcs = DB::table('lmc')
          ->join('svc_has_lmc', 'lmc.id', '=', 'svc_has_lmc.lmc_id')
          ->select('lmc.*', 'svc_has_lmc.svc_id')
          ->get();

        return view('svc/listar', array('svcs' => $svcs, 'lmcs' => $lmcs, 'ativos' => $ativos));
    }

    public function svcCadastrar()
    {
        $identificador = DB::table('svc')->max('identificador') + 1;
        $clientes = Cliente::All();
        $resultado = app('App\Http\Controllers\HomeController')->faixaIPs('svc', 'peering_mrouter');
        $peering_mrouter = $resultado['somas'];

        return view('svc/cadastrar', array('identificador' => $identificador, 'clientes' =>$clientes, 'peering_mrouter' =>$peering_mrouter));
    }

    public function Cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'identificador' => 'unique:svc',
        ]);
        if ($validacao->fails()) {
            return redirect('svc/cadastrar')
                        ->withErrors($validacao)
                        ->withInput();
        }

        $svc = new Svc;
        $svc->identificador = $request->identificador;
        $svc->svct = $request->svct;
        $svc->banda = $request->banda;
        $svc->gsvcid = $request->gsvcid;
        $svc->in_vlan = $request->in_vlan;
        $svc->out_vlan = $request->out_vlan;
        $svc->peering_mrouter = $request->peering_mrouter;
        $svc->peering_cliente1 = $request->peering_cliente1;
        $svc->peering_cliente2 = $request->peering_cliente2;
        $svc->distinguisher = $request->distinguisher;
        $svc->cliente_id = $request->cliente;
        
        $cliente = Cliente::find($request->cliente);

        if ($cliente->nome != null) {
          if ($request->svct == 20) {
            $svc->informacoes = 'L2VC <= '.$cliente->nome;
          } elseif ($request->svct == 22) {
            $svc->informacoes = 'L2VPN <= '.$cliente->nome;
          } elseif ($request->svct == 30) {
            $svc->informacoes = 'L3VPN <= '.$cliente->nome;
          } elseif ($request->svct == 39) {
            $svc->informacoes = 'Dedicado <= '.$cliente->nome;
          }
        }

        $svc->save();

        return redirect('/svc');
    }

    public function svcEditar($id)
    {
        $svc = Svc::find($id);
        $clientes = Cliente::All()->sortBy('nome');

        $lmcs = DB::table('lmc')
          ->join('svc_has_lmc', 'lmc.id', '=', 'svc_has_lmc.lmc_id')
          ->select('lmc.*')
          ->where('svc_id', $id)
          ->get();

        return view('svc/editar', array('svc' => $svc, 'lmcs' => $lmcs, 'clientes' => $clientes));
    }

    public function svcAtualizar(Request $request, $id)
    {
      $validacao = Validator::make($request->all(), [
        'identificador' => 'unique:svc,identificador,'.$id,
      ]);
      if ($validacao->fails()) {
        return redirect('svc/editar/'.$id)
                    ->withErrors($validacao)
                    ->withInput();
      }
      
      $svc = Svc::find($id);

      $svc->update([
        'identificador' => $request->identificador,
        'svct' => $request->svct,
        'banda' => $request->banda,
        'informacoes' => $request->informacoes,
        'gsvcid' => $request->gsvcid,
        'in_vlan' => $request->in_vlan,
        'out_vlan' => $request->out_vlan,
        'peering_mrouter' => $request->peering_mrouter,
        'peering_cliente1' => $request->peering_cliente1,
        'peering_cliente2' => $request->peering_cliente2,
        'distinguisher' => $request->distinguisher,
        'cliente_id' => $request->cliente,
      ]);
      return redirect('/svc');
    }
    
    public function svcExcluir($id)
    {
      DB::table('subinterface')->where('svc_id', $id)->delete();
      $svc = Svc::find($id);
      $svc->delete();
      return redirect('/svc');
    }

    public function svcBuscar(Request $request)
    {       
        $search = $request->get('search');

        $svcs = Svc::where('id', 'LIKE', '%'.$search.'%')
                    ->orWhere('identificador', 'LIKE', '%'.$search.'%')
                    ->orWhere('svct', 'LIKE', '%'.$search.'%')
                    ->orWhere('banda', 'LIKE', '%'.$search.'%')
                    ->orWhere('informacoes', 'LIKE', '%'.$search.'%')
                    ->paginate(20);

        $lmcs = DB::table('lmc')
        ->join('svc_has_lmc', 'lmc.id', '=', 'svc_has_lmc.lmc_id')
        ->select('lmc.*', 'svc_has_lmc.svc_id')
        ->get();  

        return view('/svc/listar', array('svcs' => $svcs, 'lmcs' => $lmcs, 'search' => $search));
    }

}
