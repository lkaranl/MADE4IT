<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Svc;

class SvcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     Svc::create([
    //         'id' => '1',
    //         'identificador' => '1200',
    //         'svct' => '30',
    //         'banda' => '100',
    //         'informacoes' => 'L3VPN <= IFRO',
    //         'gsvcid' => '101200',
    //         'in_vlan' => '',
    //         'out_vlan' => '800T',
    //         'peering_mrouter' => '172.28.4.100/30',
    //         'peering_cliente1' => '192.168.0.1',
    //         'peering_cliente2' => '192.168.254.1',
    //         'distinguisher' => '',
    //         'cliente_id' => '1',
    //         'created_at' => '2021-05-14 18:08:14',
    //     ]);
        
    //     Svc::create([
    //         'id' => '2',
    //         'identificador' => '1201',
    //         'svct' => '39',
    //         'banda' => '200',
    //         'informacoes' => 'Dedicado <= IFRO - Porto Velho',
    //         'gsvcid' => '101201',
    //         'in_vlan' => '',
    //         'out_vlan' => '800T',
    //         'peering_mrouter' => '172.28.4.104/30',
    //         'peering_cliente1' => '192.168.1.1',
    //         'peering_cliente2' => '',
    //         'distinguisher' => '',
    //         'cliente_id' => '1',
    //         'created_at' => '2021-05-14 18:08:14',
    //     ]);

    //     Svc::create([
    //         'id' => '3',
    //         'identificador' => '1202',
    //         'svct' => '20',
    //         'banda' => '10',
    //         'informacoes' => 'L2L <= FIERO',
    //         'gsvcid' => '101202',
    //         'in_vlan' => '',
    //         'out_vlan' => '800T',
    //         'peering_mrouter' => '172.28.4.108/30',
    //         'peering_cliente1' => '192.168.0.1',
    //         'peering_cliente2' => '',
    //         'distinguisher' => '',
    //         'cliente_id' => '2',
    //         'created_at' => '2021-05-14 18:08:14',
    //     ]);
        Svc::create( [
            'id'=>1,
            'identificador'=>'1',
            'svct'=>'20',
            'banda'=>10,
            'gsvcid'=>'101202',
            'informacoes'=>'L2L <= FIERO',
            'in_vlan'=>'10',
            'out_vlan'=>'800T',
            'peering_mrouter'=>'172.26.0.1/30',
            'peering_cliente1'=>'192.168.0.1/24',
            'peering_cliente2'=>NULL,
            'distinguisher'=>NULL,
            'cliente_id'=>23,
            'created_at'=>'2021-09-01 20:28:32',
            'updated_at'=>'2021-09-01 20:28:32'
            ] );
    }
}
