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
        'sigla' => 'MADE4IT-APIS-1',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '2',
        'nome'     => 'Ariquemes',
        'faixa_administrativa' => '10.0.22.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 5,
        'sigla' => 'MADE4IT-AQS-2',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '3',
        'nome'     => 'Brasil Digital - Dom Pedro',
        'faixa_administrativa' => '10.0.29.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 36,
        'sigla' => 'MADE4IT-PVO-3',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '4',
        'nome'     => 'Cacaulândia',
        'faixa_administrativa' => '10.0.21.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 8,
        'sigla' => 'MADE4IT-CAUL-4',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '5',
        'nome'     => 'Centranet - Sede',
        'faixa_administrativa' => '10.0.2.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 18,
        'sigla' => 'MADE4IT-EOE-5',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '6',
        'nome'     => 'Costa Marques',
        'faixa_administrativa' => '10.0.34.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 17,
        'sigla' => 'MADE4IT-CMR-6',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '7',
        'nome'     => 'GigaNet - Bairro Jardim Novo Estado',
        'faixa_administrativa' => '10.0.6.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 32,
        'sigla' => 'MADE4IT-OPO-7',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '8',
        'nome'     => 'GigaNet - Bairro Liberdade',
        'faixa_administrativa' => '10.0.7.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 22,
        'sigla' => 'MADE4IT-JAW-8',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '9',
        'nome'     => 'Governador Jorge Teixeira',
        'faixa_administrativa' => '10.0.37.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 19,
        'sigla' => 'MADE4IT-GJT-9',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '10',
        'nome'     => 'Itapuã do Oeste',
        'faixa_administrativa' => '10.0.24.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 21,
        'sigla' => 'MADE4IT-ITDO-10',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '11',
        'nome'     => 'Millenium - Alvorada',
        'faixa_administrativa' => '10.0.27.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 4,
        'sigla' => 'MADE4IT-ADW-11',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '12',
        'nome'     => 'Millenium - Mirante',
        'faixa_administrativa' => '10.0.26.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 26,
        'sigla' => 'MADE4IT-MTRR-12',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '13',
        'nome'     => 'Millenium - Urupá',
        'faixa_administrativa' => '10.0.25.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 48,
        'sigla' => 'MADE4IT-URUW-13',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '14',
        'nome'     => 'Monte Negro',
        'faixa_administrativa' => '10.0.38.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 27,
        'sigla' => 'MADE4IT-MNK-14',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '15',
        'nome'     => 'NetMais - Sede',
        'faixa_administrativa' => '10.0.13.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 28,
        'sigla' => 'MADE4IT-NBA-15',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '16',
        'nome'     => 'NetWay - DC03 - Cacoal',
        'faixa_administrativa' => '10.0.3.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 9,
        'sigla' => 'MADE4IT-CWL-16',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '17',
        'nome'     => 'Netway - Distrito de Guaporé',
        'faixa_administrativa' => '10.0.18.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 34,
        'sigla' => 'MADE4IT-PBW-17',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '18',
        'nome'     => 'Netway - Posto São Roque',
        'faixa_administrativa' => '10.0.17.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 34,
        'sigla' => 'MADE4IT-PBW-18',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '19',
        'nome'     => 'NetWay - Sede - Centro',
        'faixa_administrativa' => '10.0.1.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 34,
        'sigla' => 'MADE4IT-PBW-19',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '20',
        'nome'     => 'Netway - Usina Hidrelétrica Ávila',
        'faixa_administrativa' => '10.0.19.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 51,
        'sigla' => 'MADE4IT-VHA-20',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '21',
        'nome'     => 'Netway - ViaFibra',
        'faixa_administrativa' => '10.0.20.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 51,
        'sigla' => 'MADE4IT-VHA-21',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '22',
        'nome'     => 'Nova União',
        'faixa_administrativa' => '10.0.28.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 30,
        'sigla' => 'MADE4IT-NVUO-22',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '23',
        'nome'     => 'Onda Ágil Telecom',
        'faixa_administrativa' => '10.0.5.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 23,
        'sigla' => 'MADE4IT-JIP-23',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '24',
        'nome'     => 'Portal Telecom',
        'faixa_administrativa' => '10.0.36.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 20,
        'sigla' => 'MADE4IT-GUM-24',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '25',
        'nome'     => 'Porto Velho - SIte Vivo',
        'faixa_administrativa' => '10.0.31.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 36,
        'sigla' => 'MADE4IT-PVO-25',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '26',
        'nome'     => 'Posto Cinquentinha',
        'faixa_administrativa' => '10.0.30.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 11,
        'sigla' => 'MADE4IT-CDEY-26',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '27',
        'nome'     => 'Quinto BEC (WebDA)',
        'faixa_administrativa' => '10.0.10.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 24,
        'sigla' => 'MADE4IT-MACH-27',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '28',
        'nome'     => 'Sistem - Sede',
        'faixa_administrativa' => '10.0.12.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 40,
        'sigla' => 'MADE4IT-RMM-28',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '29',
        'nome'     => 'Theobroma (WebDA)',
        'faixa_administrativa' => '10.0.8.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 47,
        'sigla' => 'MADE4IT-TORM-29',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '30',
        'nome'     => 'Uzzy Telecom',
        'faixa_administrativa' => '10.0.4.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 37,
        'sigla' => 'MADE4IT-PYM-30',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '31',
        'nome'     => 'Vale do Anari (WebDA)',
        'faixa_administrativa' => '10.0.9.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 49,
        'sigla' => 'MADE4IT-VEAI-31',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '32',
        'nome'     => 'Vale do Paraiso',
        'faixa_administrativa' => '10.0.35.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 50,
        'sigla' => 'MADE4IT-VALP-32',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '33',
        'nome'     => 'Videosat - São Francisco',
        'faixa_administrativa' => '10.0.16.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 43,
        'sigla' => 'MADE4IT-SFYO-33',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '34',
        'nome'     => 'Videosat - São Miguel',
        'faixa_administrativa' => '10.0.14.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 44,
        'sigla' => 'MADE4IT-SMGE-34',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '35',
        'nome'     => 'Videosat - Sede',
        'faixa_administrativa' => '10.0.15.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 45,
        'sigla' => 'MADE4IT-SRGS-35',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '36',
        'nome'     => 'WebDA - Sede',
        'faixa_administrativa' => '10.0.11.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 24,
        'sigla' => 'MADE4IT-MACH-36',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '37',
        'nome'     => 'Worldnet',
        'faixa_administrativa' => '10.0.33.0/24',
        'estado_id'     => 21,
        'cidade_id'     => 3,
        'sigla' => 'MADE4IT-APIS-37',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      // FIM RONDONIA

      // INICIO MATO GROSSO

      Site::create([
        'id' => '38',
        'nome'     => 'Cuiabá - Teleturbo',
        'faixa_administrativa' => '10.0.50.0/24',
        'estado_id'     => 10,
        'cidade_id'     => 52,
        'sigla' => 'MADE4IT-CBA-38',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      Site::create([
        'id' => '39',
        'nome'     => 'Cuiabá - Vivo',
        'faixa_administrativa' => '10.0.51.0/24',
        'estado_id'     => 10,
        'cidade_id'     => 52,
        'sigla' => 'MADE4IT-CBA-39',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      // FIM MATO GROSSO

      // INICIO AMAZONAS

      Site::create([
        'id' => '40',
        'nome'     => 'Humaita - Vivo',
        'faixa_administrativa' => '10.0.32.0/24',
        'estado_id'     => 4,
        'cidade_id'     => 53,
        'sigla' => 'MADE4IT-HUT-40',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

      // FIM AMAZONAS

      // INICIO SAO PAULO

      Site::create([
        'id' => '41',
        'nome'     => 'São Paulo - Equinix',
        'faixa_administrativa' => '10.0.100.0/24',
        'estado_id'     => 24,
        'cidade_id'     => 54,
        'sigla' => 'MADE4IT-SPO-41',
        'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        'created_at'     => '2022-03-23 18:08:14',
      ]);

    }
}
