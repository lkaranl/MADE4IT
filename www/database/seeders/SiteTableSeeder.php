<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;


class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Site::create([
        'id' => '1',
        'nome'     => 'Alto Paraíso',
        'faixa_administrativa' => '10.0.23.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 3,
        'sigla' => 'NBS-APIS-FZN',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '2',
        'nome'     => 'Ariquemes',
        'faixa_administrativa' => '10.0.22.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 5,
        'sigla' => 'NBS-AQS-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '3',
        'nome'     => 'Brasil Digital - Dom Pedro',
        'faixa_administrativa' => '10.0.29.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 36,
        'sigla' => 'NBS-PVO-DPD',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '4',
        'nome'     => 'Cacaulândia',
        'faixa_administrativa' => '10.0.21.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 8,
        'sigla' => 'NBS-CAUL-TRV',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '5',
        'nome'     => 'Centranet - Sede',
        'faixa_administrativa' => '10.0.2.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 18,
        'sigla' => 'NBS-EOE-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '6',
        'nome'     => 'Costa Marques',
        'faixa_administrativa' => '10.0.34.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 17,
        'sigla' => 'NBS-CMR-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '7',
        'nome'     => 'GigaNet - Bairro Jardim Novo Estado',
        'faixa_administrativa' => '10.0.6.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 32,
        'sigla' => 'NBS-OPO-BJN',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '8',
        'nome'     => 'GigaNet - Bairro Liberdade',
        'faixa_administrativa' => '10.0.7.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 22,
        'sigla' => 'NBS-JAW-BLB',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '9',
        'nome'     => 'Governador Jorge Teixeira',
        'faixa_administrativa' => '10.0.37.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 19,
        'sigla' => 'NBS-GJT-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '10',
        'nome'     => 'Itapuã do Oeste',
        'faixa_administrativa' => '10.0.24.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 21,
        'sigla' => 'NBS-ITDO-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '11',
        'nome'     => 'Millenium - Alvorada',
        'faixa_administrativa' => '10.0.27.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 4,
        'sigla' => 'NBS-ADW-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '12',
        'nome'     => 'Millenium - Mirante',
        'faixa_administrativa' => '10.0.26.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 26,
        'sigla' => 'NBS-MTRR-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '13',
        'nome'     => 'Millenium - Urupá',
        'faixa_administrativa' => '10.0.25.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 48,
        'sigla' => 'NBS-URUW-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '14',
        'nome'     => 'Monte Negro',
        'faixa_administrativa' => '10.0.38.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 27,
        'sigla' => 'NBS-MNK-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '15',
        'nome'     => 'NetMais - Sede',
        'faixa_administrativa' => '10.0.13.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 28,
        'sigla' => 'NBS-NBA-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '16',
        'nome'     => 'NetWay - DC03 - Cacoal',
        'faixa_administrativa' => '10.0.3.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 9,
        'sigla' => 'NBS-CWL-NCC',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '17',
        'nome'     => 'Netway - Distrito de Guaporé',
        'faixa_administrativa' => '10.0.18.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 34,
        'sigla' => 'NBS-PBW-DGP',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '18',
        'nome'     => 'Netway - Posto São Roque',
        'faixa_administrativa' => '10.0.17.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 34,
        'sigla' => 'NBS-PBW-PSR',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '19',
        'nome'     => 'NetWay - Sede - Centro',
        'faixa_administrativa' => '10.0.1.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 34,
        'sigla' => 'NBS-PBW-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '20',
        'nome'     => 'Netway - Usina Hidrelétrica Ávila',
        'faixa_administrativa' => '10.0.19.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 51,
        'sigla' => 'NBS-VHA-UHA',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '21',
        'nome'     => 'Netway - ViaFibra',
        'faixa_administrativa' => '10.0.20.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 51,
        'sigla' => 'NBS-VHA-VFB',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '22',
        'nome'     => 'Nova União',
        'faixa_administrativa' => '10.0.28.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 30,
        'sigla' => 'NBS-NVUO-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '23',
        'nome'     => 'Onda Ágil Telecom',
        'faixa_administrativa' => '10.0.5.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 23,
        'sigla' => 'NBS-JIP-DAB',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '24',
        'nome'     => 'Portal Telecom',
        'faixa_administrativa' => '10.0.36.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 20,
        'sigla' => 'NBS-GUM-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '25',
        'nome'     => 'Porto Velho - SIte Vivo',
        'faixa_administrativa' => '10.0.31.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 36,
        'sigla' => 'NBS-PVO-VIV',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '26',
        'nome'     => 'Posto Cinquentinha',
        'faixa_administrativa' => '10.0.30.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 11,
        'sigla' => 'NBS-CDEY-PCN',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '27',
        'nome'     => 'Quinto BEC (WebDA)',
        'faixa_administrativa' => '10.0.10.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 24,
        'sigla' => 'NBS-MACH-QBC',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '28',
        'nome'     => 'Sistem - Sede',
        'faixa_administrativa' => '10.0.12.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 40,
        'sigla' => 'NBS-RMM-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '29',
        'nome'     => 'Theobroma (WebDA)',
        'faixa_administrativa' => '10.0.8.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 47,
        'sigla' => 'NBS-TORM-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '30',
        'nome'     => 'Uzzy Telecom',
        'faixa_administrativa' => '10.0.4.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 37,
        'sigla' => 'NBS-PYM-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '31',
        'nome'     => 'Vale do Anari (WebDA)',
        'faixa_administrativa' => '10.0.9.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 49,
        'sigla' => 'NBS-VEAI-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '32',
        'nome'     => 'Vale do Paraiso',
        'faixa_administrativa' => '10.0.35.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 50,
        'sigla' => 'NBS-VALP-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '33',
        'nome'     => 'Videosat - São Francisco',
        'faixa_administrativa' => '10.0.16.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 43,
        'sigla' => 'NBS-SFYO-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '34',
        'nome'     => 'Videosat - São Miguel',
        'faixa_administrativa' => '10.0.14.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 44,
        'sigla' => 'NBS-SMGE-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '35',
        'nome'     => 'Videosat - Sede',
        'faixa_administrativa' => '10.0.15.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 45,
        'sigla' => 'NBS-SRGS-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '36',
        'nome'     => 'WebDA - Sede',
        'faixa_administrativa' => '10.0.11.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 24,
        'sigla' => 'NBS-MACH-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '37',
        'nome'     => 'Worldnet',
        'faixa_administrativa' => '10.0.33.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 3,
        'sigla' => 'NBS-APIS-CNT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      // FIM RONDONIA

      // INICIO MATO GROSSO

      Site::create([
        'id' => '38',
        'nome'     => 'Cuiabá - Teleturbo',
        'faixa_administrativa' => '10.0.50.0/24',
        'estado_id'     => 10,
        'cidade_id'     => 52,
        'sigla' => 'NBS-CBA-TLT',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      Site::create([
        'id' => '39',
        'nome'     => 'Cuiabá - Vivo',
        'faixa_administrativa' => '10.0.51.0/24',
        'estado_id'     => 10,
        'cidade_id'     => 52,
        'sigla' => 'NBS-CBA-VIV',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      // FIM MATO GROSSO

      // INICIO AMAZONAS

      Site::create([
        'id' => '40',
        'nome'     => 'Humaita - Vivo',
        'faixa_administrativa' => '10.0.32.0/24',
        'estado_id'     => 4,
        'cidade_id'     => 53,
        'sigla' => 'NBS-HUT-VIV',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

      // FIM AMAZONAS

      // INICIO SAO PAULO

      Site::create([
        'id' => '41',
        'nome'     => 'São Paulo - Equinix',
        'faixa_administrativa' => '10.0.100.0/24',
        'estado_id'     => 24,
        'cidade_id'     => 54,
        'sigla' => 'NBS-SPO-EQN',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2021-05-14 18:08:14',
      ]);

    }
}
