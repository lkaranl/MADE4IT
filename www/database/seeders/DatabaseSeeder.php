<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UltimaMilhaTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(EquipamentoTableSeeder::class);
        $this->call(FuncaoTableSeeder::class);
        $this->call(SiteTableSeeder::class);
        $this->call(AtivoTableSeeder::class);
        $this->call(EnlaceTableSeeder::class);
        $this->call(LmcTableSeeder::class);
        $this->call(SvcTableSeeder::class);
        $this->call(SvclmcTableSeeder::class);
        $this->call(LmxTableSeeder::class);
        $this->call(CidadeultimamilhaTableSeeder::class);


    }
}
