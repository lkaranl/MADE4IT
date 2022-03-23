<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funcao;

class FuncaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Funcao::create([
        'id'      => '1',
        'nome'     => 'MRouter',
        'terminacao'     => 'R:A',
        'created_at'     => '2021-05-14 18:08:14',
      ]);
      Funcao::create([
        'id'      => '2',
        'nome'     => 'Borda',
        'terminacao'     => 'R:X',
        'created_at'     => '2021-05-14 18:08:14',
      ]);
      Funcao::create([
        'id'      => '3',
        'nome'     => 'Service Router',
        'terminacao'     => 'R:S',
        'created_at'     => '2021-05-14 18:08:14',
      ]);
      Funcao::create([
        'id'      => '4',
        'nome'     => 'Acesso',
        'terminacao'     => 'CO:A',
        'created_at'     => '2021-05-14 18:08:14',
      ]);
    }
}
