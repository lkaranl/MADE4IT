<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipamento;

class EquipamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Equipamento::create([
        'id' => '1',
        'marca'     => 'Mikrotik',
        'modelo'  => 'RB2011',
        'created_at'     => '2021-05-14 18:08:14',
      ]);
      Equipamento::create([
        'id' => '2',
        'marca'     => 'Mikrotik',
        'modelo'  => 'RB4011',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Equipamento::create([
        'id' => '3',
        'marca'     => 'Fiberhome',
        'modelo'  => 'Fiberhome',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Equipamento::create([
        'id' => '4',
        'marca'     => 'Huawei',
        'modelo'  => 'NE20',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Equipamento::create([
        'id' => '5',
        'marca'     => 'Huawei',
        'modelo'  => 'NE40',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Equipamento::create([
        'id' => '6',
        'marca'     => 'Huawei',
        'modelo'  => 's6720',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Equipamento::create([
        'id' => '7',
        'marca'     => 'Huawei',
        'modelo'  => 's6730',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Equipamento::create([
        'id' => '8',
        'marca'     => 'Mikrotik',
        'modelo'  => 'CCR 1009',
        'created_at'     => '2021-05-14 18:08:14',
      ]);
    }
}
