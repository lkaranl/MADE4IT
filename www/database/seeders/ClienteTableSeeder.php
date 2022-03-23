<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cliente::create([
        'id' => '10',
        'nome' => 'NBS',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '11',
        'nome' => 'SISTEM TELECOM',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '12',
        'nome' => 'NETMAIS',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '13',
        'nome' => 'WM TELECOM',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '14',
        'nome' => 'CLICKNET',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '15',
        'nome' => 'NETWAY',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '16',
        'nome' => 'ONDA AGIL',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '17',
        'nome' => 'MILLENIUM',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '18',
        'nome' => 'UZZY',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '19',
        'nome' => 'GIGANET',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '20',
        'nome' => 'WEBDA',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '21',
        'nome' => 'CENTRANET',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '22',
        'nome' => 'VIDEOSAT',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '23',
        'nome' => 'BRDIGITAL',
        'created_at' => '2021-05-14 18:08:14',
        ]);

      Cliente::create([
        'id' => '24',
        'nome' => 'WORLDNET',
        'created_at' => '2021-05-14 18:08:14',
        ]);
    }
}
