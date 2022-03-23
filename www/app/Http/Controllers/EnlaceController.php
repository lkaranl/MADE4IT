<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Enlace;
use App\Models\Ativo;


class EnlaceController extends Controller
{
    public function enlace()
    {
        $enlaces = Enlace::All();
        $ativos = Ativo::All();
        
        return view('enlace/listar', array(
          'enlaces' => $enlaces, 
          'ativos' => $ativos
        ));
    }

    public function enlaceCadastrar()
    {
        $mlink = DB::table('enlace')->max('mlink') + 1;
        if ($mlink < 10) {
          $mlink = '00'.$mlink;
        } elseif ($mlink < 100) {
          $mlink = '0'.$mlink;
        }

        $ativos = Ativo::All();

        $resultado = app('App\Http\Controllers\HomeController')->faixaIPs('enlace', 'faixa');
        $faixa = $resultado['faixas'];
        $somas = $resultado['somas'];
        $route_mestre = $resultado['route_mestre'];
        $route_escravo = $resultado['route_escravo'];
        
        return view('enlace/cadastrar', array('mlink' => $mlink, 'ativos' =>$ativos, 'faixa' =>$somas, 'route_mestre' =>$route_mestre, 'route_escravo' =>$route_escravo));
    }

    public function cadastrar(Request $request)
    {
        $validacao = Validator::make($request->all(), [
          'mlink' => 'unique:enlace',
          'faixa' => 'unique:enlace',
        ]);
        if ($validacao->fails()) {
          return redirect('enlace/cadastrar')
                      ->withErrors($validacao)
                      ->withInput();
        }

        $enlace = new Enlace;

        $enlace->mlink = $request->mlink;
        $enlace->faixa = $request->faixa;
        $enlace->route_mestre = $request->route_mestre;
        $enlace->route_escravo = $request->route_escravo;
        $enlace->observacoes = $request->observacoes;
        $enlace->ativo_mestre = $request->ativo_mestre;
        $enlace->ativo_escravo = $request->ativo_escravo;
        $enlace->save();

        return redirect('/enlace');
    }

    public function enlaceEditar($id)
    {
        $enlace = Enlace::find((int)$id);
        $ativos = Ativo::All();
        
        if ($enlace !== null) {
          return view('/enlace/editar', array('enlace' => $enlace, 'ativos' => $ativos));
        } else {
          abort(404);
        }
    }

    public function enlaceAtualizar(Request $request, $id)
    {
      $validacao = Validator::make($request->all(), [
        'mlink' => 'unique:enlace,mlink,'.$id,
        'faixa' => 'unique:enlace,faixa,'.$id,
      ]);
      if ($validacao->fails()) {
        return redirect('enlace/editar/'.$id)
                    ->withErrors($validacao)
                    ->withInput();
      }

      $enlace = Enlace::find($id);

      $enlace->update([
        'mlink' => $request->mlink,
        'faixa' => $request->faixa,
        'route_mestre' => $request->route_mestre,
        'route_escravo' => $request->route_escravo,
        'observacoes' => $request->observacoes,
        'ativo_mestre' => $request->ativo_mestre,
        'ativo_escravo' => $request->ativo_escravo,
      ]);
      return redirect('/enlace');
    }

    public function enlaceExcluir($id)
    {
      $enlace = Enlace::find($id);
      $enlace->delete();
      return redirect('/enlace');
    }


    public function enlaceBuscar(Request $request)
    {       
      $search = $request->get('search');

      $enlaces = Enlace::where('id', 'LIKE', '%'.$search.'%')
        ->orWhere('mlink', 'LIKE', '%'.$search.'%')
        ->orWhere('route_mestre', 'LIKE', '%'.$search.'%')
        ->orWhere('route_escravo', 'LIKE', '%'.$search.'%')
        ->orWhere('faixa', 'LIKE', '%'.$search.'%')
        ->paginate(20);
      return view('/enlace/listar', compact('enlaces', 'search'));
    }
}
