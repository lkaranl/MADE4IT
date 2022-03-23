<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lmx;

class LmxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lmx::create([
            'id' => '1',
            'nome' => 'LMX.10.1500',
            'lmc_id' => '1',
            'created_at' => '2021-05-14 18:08:14',
        ]);
        Lmx::create([
            'id' => '2',
            'nome' => 'LMX.10.1501',
            'lmc_id' => '2',
            'created_at' => '2021-05-14 18:08:14',
        ]);
    }
}
