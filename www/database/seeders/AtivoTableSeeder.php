<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ativo;

class AtivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ativo::create([
            'id' => '1',
            'descricao' => 'Alto Paraíso',
            'ip_legado'  => NULL,
            'ip' => '192.168.33.1',
            'nome' => 'MAD4IT-APIS',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 1,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '2',
            'descricao' => 'Alto Paraíso2',
            'ip_legado'  => '192.168.6.15',
            'ip' => '192.168.23.1',
            'nome' => 'MAD4IT-APIS',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 2,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '3',
            'descricao' => 'Ariquemes',
            'ip_legado'  => '192.168.6.14',
            'ip' => '192.168.22.1',
            'nome' => 'MAD4IT-AQS',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 2,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '4',
            'descricao' => 'Borda Ji-Paraná',
            'ip_legado'  => NULL,
            'ip' => '192.168.5.255',
            'nome' => 'MAD4IT-JIP',
            'funcao_id' => 2,
            'equipamento_id' => 1,
            'site_id' => 23,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '5',
            'descricao' => 'Borda Pimenta Bueno',
            'ip_legado'  => NULL,
            'ip' => '192.168.1.255',
            'nome' => 'MAD4IT-PBW',
            'funcao_id' => 2,
            'equipamento_id' => 1,
            'site_id' => 19,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '6',
            'descricao' => 'Borda Porto Velho',
            'ip_legado'  => NULL,
            'ip' => '192.168.29.255',
            'nome' => 'MAD4IT-PVO',
            'funcao_id' => 2,
            'equipamento_id' => 2,
            'site_id' => 3,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '7',
            'descricao' => 'Brasil Digital - Dom Pedro - Porto Velho',
            'ip_legado'  => '192.168.6.18',
            'ip' => '192.168.29.1',
            'nome' => 'MAD4IT-PVO',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 3,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '8',
            'descricao' => 'Brasilândia / NetMais',
            'ip_legado'  => '192.168.6.35',
            'ip' => '192.168.13.1',
            'nome' => 'MAD4IT-NBA',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 15,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '9',
            'descricao' => 'Cacaulândia',
            'ip_legado'  => '192.168.6.13',
            'ip' => '192.168.21.1',
            'nome' => 'MAD4IT-CAUL',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 4,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '10',
            'descricao' => 'CACOAL / CPD / NETWAY',
            'ip_legado'  => '192.168.6.4',
            'ip' => '192.168.3.1',
            'nome' => 'MAD4IT-CWL',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 16,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '11',
            'descricao' => 'Costa Marques',
            'ip_legado'  => NULL,
            'ip' => '192.168.34.1',
            'nome' => 'MAD4IT-CMR',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 6,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '12',
            'descricao' => 'Cuiabá - Site Vivo',
            'ip_legado'  => NULL,
            'ip' => '192.168.51.1',
            'nome' => 'MAD4IT-CBA',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 39,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '13',
            'descricao' => 'Equinix SP1',
            'ip_legado'  => NULL,
            'ip' => '192.168.192.1',
            'nome' => 'MAD4IT-SPO',
            'funcao_id' => 1,
            'equipamento_id' => 2,
            'site_id' => 41,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '14',
            'descricao' => 'Espigão / Centranet',
            'ip_legado'  => '192.168.6.30',
            'ip' => '192.168.2.1',
            'nome' => 'MAD4IT-EOE',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 5,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '15',
            'descricao' => 'Governador Jorge Teixeira',
            'ip_legado'  => NULL,
            'ip' => '192.168.37.1',
            'nome' => 'MAD4IT-GJT',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 9,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '16',
            'descricao' => 'Guajara-Mirim',
            'ip_legado'  => NULL,
            'ip' => '192.168.36.1',
            'nome' => 'MAD4IT-GUM',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 24,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '17',
            'descricao' => 'Humaita - Site Vivo',
            'ip_legado'  => NULL,
            'ip' => '192.168.32.1',
            'nome' => 'MAD4IT-HUT',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 40,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '18',
            'descricao' => 'Itapuã do Oeste',
            'ip_legado'  => '192.168.6.16',
            'ip' => '192.168.24.1',
            'nome' => 'MAD4IT-ITDO',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 10,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '19',
            'descricao' => 'JARÚ / CPD / GIGANET',
            'ip_legado'  => '192.168.6.8',
            'ip' => '192.168.7.1',
            'nome' => 'MAD4IT-JAW',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 8,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '20',
            'descricao' => 'JI-PARANÁ / CPD / ONDA AGIL',
            'ip_legado'  => '192.168.6.6',
            'ip' => '192.168.5.1',
            'nome' => 'MAD4IT-JIP',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 23,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '21',
            'descricao' => 'MACHADINHO / CPD / WEBDA',
            'ip_legado'  => '192.168.6.84',
            'ip' => '192.168.11.1',
            'nome' => 'MAD4IT-MACH',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 36,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '22',
            'descricao' => 'MÉDICE / CPD / UZZY',
            'ip_legado'  => '192.168.6.5',
            'ip' => '192.168.4.1',
            'nome' => 'MAD4IT-PYM',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 30,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '23',
            'descricao' => 'Millenium - Alvorada',
            'ip_legado'  => NULL,
            'ip' => '192.168.27.1',
            'nome' => 'MAD4IT-ADW',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 11,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '24',
            'descricao' => 'Millenium - Mirante',
            'ip_legado'  => NULL,
            'ip' => '192.168.26.1',
            'nome' => 'MAD4IT-MTRR',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 12,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '25',
            'descricao' => 'Millenium - Urupá',
            'ip_legado'  => NULL,
            'ip' => '192.168.25.1',
            'nome' => 'MAD4IT-URUW',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 13,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '26',
            'descricao' => 'Monte Negro',
            'ip_legado'  => NULL,
            'ip' => '192.168.38.1',
            'nome' => 'MAD4IT-MNK',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 14,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '27',
            'descricao' => 'Netway - Distrito de Guaporé',
            'ip_legado'  => '10.255.255.3',
            'ip' => '192.168.18.1',
            'nome' => 'MAD4IT-PBW',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 17,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '28',
            'descricao' => 'Netway - Posto São Roque',
            'ip_legado'  => '10.255.255.2',
            'ip' => '192.168.17.1',
            'nome' => 'MAD4IT-PBW',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 18,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '29',
            'descricao' => 'Netway - Usina Hidrelétrica Ávila',
            'ip_legado'  => '10.255.255.4',
            'ip' => '192.168.19.1',
            'nome' => 'MAD4IT-VHA',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 20,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '30',
            'descricao' => 'Netway - ViaFibra',
            'ip_legado'  => '10.255.255.5',
            'ip' => '192.168.20.1',
            'nome' => 'MAD4IT-VHA',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 21,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '31',
            'descricao' => 'Nova União',
            'ip_legado'  => NULL,
            'ip' => '192.168.28.1',
            'nome' => 'MAD4IT-NVUO',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 22,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '32',
            'descricao' => 'OLT Ariquemes',
            'ip_legado'  => NULL,
            'ip' => '10.0.22.200',
            'nome' => 'MAD4IT-AQS',
            'funcao_id' => 4,
            'equipamento_id' => 3,
            'site_id' => 2,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '33',
            'descricao' => 'OURO PRETO / CPD / GIGANET',
            'ip_legado'  => '192.168.6.7',
            'ip' => '192.168.6.1',
            'nome' => 'MAD4IT-OPO',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 7,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '34',
            'descricao' => 'PIMENTA BUENO / CPD1 / NETWAY',
            'ip_legado'  => '192.168.6.3',
            'ip' => '192.168.1.1',
            'nome' => 'MAD4IT-PBW',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 19,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '35',
            'descricao' => 'Porto Velho - Site Vivo',
            'ip_legado'  => NULL,
            'ip' => '192.168.31.1',
            'nome' => 'MAD4IT-PVO',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 25,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '36',
            'descricao' => 'Posto Cinquentinha',
            'ip_legado'  => '192.168.6.17',
            'ip' => '192.168.30.1',
            'nome' => 'MAD4IT-CDEY',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 26,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '37',
            'descricao' => 'QUINTO BEC / CPD / WEBDA',
            'ip_legado'  => '192.168.6.83',
            'ip' => '192.168.10.1',
            'nome' => 'MAD4IT-MACH',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 27,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '38',
            'descricao' => 'ROLIM DE MOURA / CPD / SISTEM',
            'ip_legado'  => '192.168.6.34',
            'ip' => '192.168.12.1',
            'nome' => 'MAD4IT-RMM',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 28,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '39',
            'descricao' => 'Service Router JIP',
            'ip_legado'  => NULL,
            'ip' => '10.0.5.254',
            'nome' => 'MAD4IT-JIP',
            'funcao_id' => 3,
            'equipamento_id' => 8,
            'site_id' => 23,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '40',
            'descricao' => 'Service Router PBW',
            'ip_legado'  => NULL,
            'ip' => '10.0.1.254',
            'nome' => 'MAD4IT-PBW',
            'funcao_id' => 3,
            'equipamento_id' => 8,
            'site_id' => 19,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '41',
            'descricao' => 'Teleturbo / Netway',
            'ip_legado'  => NULL,
            'ip' => '192.168.50.1',
            'nome' => 'MAD4IT-CBA-TLT',
            'funcao_id' => 1,
            'equipamento_id' => 7,
            'site_id' => 38,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '42',
            'descricao' => 'TEOBROMA / CPD / WEBDA',
            'ip_legado'  => '192.168.6.81',
            'ip' => '192.168.8.1',
            'nome' => 'MAD4IT-TORM',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 29,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '43',
            'descricao' => 'VALE DO ANARI / CPD / WEBDA',
            'ip_legado'  => '192.168.6.82',
            'ip' => '192.168.9.1',
            'nome' => 'MAD4IT-VEAI',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 31,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '44',
            'descricao' => 'Vale do Paraiso',
            'ip_legado'  => NULL,
            'ip' => '192.168.35.1',
            'nome' => 'MAD4IT-VALP',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 32,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '45',
            'descricao' => 'Videosat - São Francisco',
            'ip_legado'  => NULL,
            'ip' => '192.168.16.1',
            'nome' => 'MAD4IT-SFYO',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 33,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '46',
            'descricao' => 'Videosat - São Miguel',
            'ip_legado'  => '192.168.6.36',
            'ip' => '192.168.14.1',
            'nome' => 'MAD4IT-SMGE',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 34,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);

        Ativo::create([
            'id' => '47',
            'descricao' => 'Videosat - Sede',
            'ip_legado'  => NULL,
            'ip' => '192.168.15.1',
            'nome' => 'MAD4IT-SRGS',
            'funcao_id' => 1,
            'equipamento_id' => 6,
            'site_id' => 35,
            'ativo' => 1,
            'created_at' => '2021-05-14 18:08:14',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
        ]);
    }
}
