<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function faixaIPs($table = null, $coluna = null)
    {
        if ($table == null || $coluna == null) {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('Você precisa passar uma tabela e uma coluna como parâmetro', 'painel');
        } else {
            //CALCULO PARA PEGAR O MAIOR ID
            $id = DB::table($table)->max('id');


            //pega o IP correspondente ao ID
            $ip = DB::table($table)
            ->where('id',$id)
            ->select($coluna)
            ->get();


            // limpa string do IP, pois o mesmo vem com caracteres especiais
            $dados = array('somas'=>'','faixas'=>'','route_mestre'=>'','route_escravo'=>'');
            $string = $ip;
            $string_limpa = array(
                '[{"'.$coluna.'":"' => '',
                '\/' => '.',
                '"}]' => '',
                '/' => '.'
            );
            $ip = strtr($string, $string_limpa);
            echo $ip;
            #exit();

            // SEPARA O IP EM PARTES E AS TRANSFORMA EM INT (OU FLOAT SEI LA) E
            //  - SEPARA EM UM ARRAY (EX: $ipSoma[0] = 192, $ipSoma[1] = 168, ETC)
            $ipSoma = explode('.',$ip);
            #var_dump($ipSoma);
            #exit();
            // FAIXAS RECEBE O VALOR DOS IPS ANTES DOS CALCULOS
            $faixas = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3].'/'.$ipSoma[4];
            if($ipSoma[4] == '30' or $ipSoma[4] == '29' or $ipSoma[4] == '24')
            {
                // COMPARACOES PARA SABER A MASCARA QUESTA SENDO UTILIZADA
                if ($ipSoma[4] == '30')// SE A MASCARA FOR IGUAL A 30
                {
                    if($ipSoma[3] > 248)//SE O ULTIMO CAMPO DO IP (.XXX) FOR MAIOR QUE 248
                    {
                        $ipSoma[2] = $ipSoma[2]+1;
                        $ipSoma[3] = 0;
                        $somas = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3].'/'.$ipSoma[4];

                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_mestre = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_escravo = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                    }
                    else
                    {
                        $ipSoma[3] = $ipSoma[3]+4;
                        $somas = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3].'/'.$ipSoma[4];

                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_mestre = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_escravo = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                    }
                }
                // MASCARA 29
                if ($ipSoma[4] == '29')
                {
                    if($ipSoma[3] > 240)
                    {
                        $ipSoma[2] = $ipSoma[2]+1;
                        $ipSoma[3] = 0;
                        $somas = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3].'/'.$ipSoma[4];

                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_mestre = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_escravo = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];

                    }
                    else
                    {
                        $ipSoma[3] = $ipSoma[3]+8;
                        $somas = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3].'/'.$ipSoma[4];

                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_mestre = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_escravo = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                    }
                }
                // MASCARA 24
                if ($ipSoma[4] == '24')
                {
                    if($ipSoma[3] == '0')
                    {
                        $ipSoma[2] = $ipSoma[2]+1;
                        $ipSoma[3] = 0;
                        $somas = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3].'/'.$ipSoma[4];

                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_mestre = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                        $ipSoma[3] = $ipSoma[3]+1;
                        $route_escravo = $ipSoma[0].'.'.$ipSoma[1].'.'.$ipSoma[2].'.'.$ipSoma[3];
                    }
                    else
                    {
                        $somas = 'ERROR';
                    }
                }
            }
            else
            {
                $somas = 'ERROR, MASCARA FORA DO INTERVALO';
            }

            $dados['faixas'] = $faixas; // 192.168.0.56/24
            $dados['somas'] = $somas; // 192.168.0.64/24
            $dados['route_mestre'] = $route_mestre; // 192.168.0.65/24
            $dados['route_escravo'] = $route_escravo; // 192.168.0.66/24
            return $dados;
        }
    }

    public function getIP($ip = null, $add = null, $mascara = false)
    {
        if ($ip == null) {
            app('App\Http\Controllers\MensagemController')->mensagemDeErro('Você precisa passar um IP como parâmetro', 'painel');
        } else {
            if ($add != null) {
                if ($mascara == true) {
                    $iparray = explode('.',strtr($ip, array("/" => ".")));
                    $return = $iparray[3]+$add;
                    $dados = $iparray[0].'.'.$iparray[1].'.'.$iparray[2].'.'.$return.'/'.$iparray[4];
                    return $dados;
                } else {
                    $iparray = explode('.',strtr($ip, array("/" => ".")));
                    $return = $iparray[3]+$add;
                    $dados = $iparray[0].'.'.$iparray[1].'.'.$iparray[2].'.'.$return;
                    return $dados;
                }
            } else {
                app('App\Http\Controllers\MensagemController')->mensagemDeErro('Você precisa especificar quantos IPs acima você precisa!', 'painel');
            }
        }
    }

    public function painel()
    {
        $cidades    = DB::table('cidade')->count();
        $clientes   = DB::table('cliente')->count();
        $ultimas    = DB::table('ultima_milha')->count();
        $ativos     = DB::table('ativo')->count();
        $sites      = DB::table('site')->count();


        $all = array(
            'cidades'   => $cidades,
            'clientes'  => $clientes,
            'ultimas'   => $ultimas,
            'ativos'    => $ativos,
            'sites'     => $sites
        );

        $cidadesPorce   = ($cidades/max($all))*100;
        $clientesPorce  = ($clientes/max($all))*100;
        $ultimasPorce   = ($ultimas/max($all))*100;
        $ativosPorce    = ($ativos/max($all))*100;
        $sitesPorce     = ($sites/max($all))*100;

        return view('inicio/estatistica', array(
            'cidades'       => $cidades,
            'cidadesPorce'  => $cidadesPorce,
            'clientes'      => $clientes,
            'clientesPorce' => $clientesPorce,
            'ultimas'       => $ultimas,
            'ultimasPorce'  => $ultimasPorce,
            'sites'         => $sites,
            'sitesPorce'    => $sitesPorce
        ));
    }

}
