<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subinterface;

class SubinterfaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subinterface::create([
            'id' => '1',
            'nome' => 'Via Empresa, PEVLAN XXXX - "XGigabitEthernet0/0/YY.ZZZZ"',
            'lmx_id' => '1',
            'svc_id' => '1',
            'created_at' => '2021-05-14 18:08:14',
        ]);
        Subinterface::create([
            'id' => '2',
            'nome' => 'Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY.ZZZZ"',
            'lmx_id' => '2',
            'svc_id' => '1',
            'created_at' => '2021-05-14 18:08:14',
        ]);
    }
}
