<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enlace;

class EnlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enlace::create([
            'id' => '2',
            'mlink'     => '002',
            'ativo_mestre'     => '34',
            'ativo_escravo'     => '10',
            'faixa'  => '10.10.0.8/29',
            'route_mestre'  => '10.10.0.9',
            'route_escravo'     => '10.0.0.12',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '3',
            'mlink'     => '003',
            'ativo_mestre'     => '10',
            'ativo_escravo'     => '22',
            'faixa'  => '10.10.0.16/29',
            'route_mestre'  => '10.10.0.17',
            'route_escravo'     => '10.10.0.18',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '4',
            'mlink'     => '004',
            'ativo_mestre'     => '22',
            'ativo_escravo'     => '20',
            'faixa'  => '10.10.0.24/29',
            'route_mestre'  => '10.10.0.25',
            'route_escravo'     => '10.10.0.26',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '5',
            'mlink'     => '005',
            'ativo_mestre'     => '20',
            'ativo_escravo'     => '33',
            'faixa'  => '10.10.0.32/29',
            'route_mestre'  => '10.10.0.33',
            'route_escravo'     => '10.10.0.34',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '6',
            'mlink'     => '006',
            'ativo_mestre'     => '33',
            'ativo_escravo'     => '19',
            'faixa'  => '10.10.0.40/29',
            'route_mestre'  => '10.10.0.41',
            'route_escravo'     => '10.10.0.42',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '7',
            'mlink'     => '007',
            'ativo_mestre'     => '19',
            'ativo_escravo'     => '42',
            'faixa'  => '10.10.0.48/29',
            'route_mestre'  => '10.10.0.49',
            'route_escravo'     => '10.10.0.50',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '8',
            'mlink'     => '008',
            'ativo_mestre'     => '42',
            'ativo_escravo'     => '43',
            'faixa'  => '10.10.0.56/29',
            'route_mestre'  => '10.10.0.57',
            'route_escravo'     => '10.10.0.58',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '9',
            'mlink'     => '009',
            'ativo_mestre'     => '43',
            'ativo_escravo'     => '47',
            'faixa'  => '10.10.0.64/29',
            'route_mestre'  => '10.10.0.65',
            'route_escravo'     => '10.10.0.66',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '10',
            'mlink'     => '010',
            'ativo_mestre'     => '37',
            'ativo_escravo'     => '21',
            'faixa'  => '10.10.0.72/29',
            'route_mestre'  => '10.10.0.73',
            'route_escravo'     => '10.10.0.74',
            'observacoes'     => 'VLAN 100 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '11',
            'mlink'     => '011',
            'ativo_mestre'     => '34',
            'ativo_escravo'     => '38',
            'faixa'  => '10.10.0.80/29',
            'route_mestre'  => '10.10.0.81',
            'route_escravo'     => '10.10.0.82',
            'observacoes'     => 'VLAN 110 / VLAN 110',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '12',
            'mlink'     => '012',
            'ativo_mestre'     => '34',
            'ativo_escravo'     => '14',
            'faixa'  => '10.10.0.88/29',
            'route_mestre'  => '10.10.0.89',
            'route_escravo'     => '10.10.0.90',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '13',
            'mlink'     => '013',
            'ativo_mestre'     => '38',
            'ativo_escravo'     => '8',
            'faixa'  => '10.10.0.96/29',
            'route_mestre'  => '10.10.0.97',
            'route_escravo'     => '10.10.0.98',
            'observacoes'     => 'VLAN 115 / VLAN 115',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '14',
            'mlink'     => '014',
            'ativo_mestre'     => '8',
            'ativo_escravo'     => '46',
            'faixa'  => '10.10.0.104/29',
            'route_mestre'  => '10.10.0.105',
            'route_escravo'     => '10.10.0.106',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '15',
            'mlink'     => '015',
            'ativo_mestre'     => '46',
            'ativo_escravo'     => '47',
            'faixa'  => '10.10.0.112/29',
            'route_mestre'  => '10.10.0.113',
            'route_escravo'     => '10.10.0.114',
            'observacoes'     => 'VLAN 102 / VLAN 102',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '16',
            'mlink'     => '016',
            'ativo_mestre'     => '47',
            'ativo_escravo'     => '45',
            'faixa'  => '10.10.0.120/29',
            'route_mestre'  => '10.10.0.121',
            'route_escravo'     => '10.10.0.122',
            'observacoes'     => 'VLAN 101 / VLAN 101',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '21',
            'mlink'     => '021',
            'ativo_mestre'     => '19',
            'ativo_escravo'     => '9',
            'faixa'  => '10.10.0.160/29',
            'route_mestre'  => '10.10.0.161',
            'route_escravo'     => '10.10.0.162',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '22',
            'mlink'     => '022',
            'ativo_mestre'     => '9',
            'ativo_escravo'     => '3',
            'faixa'  => '10.10.0.168/29',
            'route_mestre'  => '10.10.0.169',
            'route_escravo'     => '10.10.0.170',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '23',
            'mlink'     => '023',
            'ativo_mestre'     => '3',
            'ativo_escravo'     => '2',
            'faixa'  => '10.10.0.176/29',
            'route_mestre'  => '10.10.0.177',
            'route_escravo'     => '10.10.0.178',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '24',
            'mlink'     => '024',
            'ativo_mestre'     => '2',
            'ativo_escravo'     => '18',
            'faixa'  => '10.10.0.184/29',
            'route_mestre'  => '10.10.0.185',
            'route_escravo'     => '10.10.0.186',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '25',
            'mlink'     => '025',
            'ativo_mestre'     => '18',
            'ativo_escravo'     => '36',
            'faixa'  => '10.10.0.192/29',
            'route_mestre'  => '10.10.0.193',
            'route_escravo'     => '10.10.0.194',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '26',
            'mlink'     => '026',
            'ativo_mestre'     => '36',
            'ativo_escravo'     => '7',
            'faixa'  => '10.10.0.200/29',
            'route_mestre'  => '10.10.0.201',
            'route_escravo'     => '10.10.0.202',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '27',
            'mlink'     => '027',
            'ativo_mestre'     => '22',
            'ativo_escravo'     => '23',
            'faixa'  => '10.10.0.208/29',
            'route_mestre'  => '10.10.0.209',
            'route_escravo'     => '10.10.0.210',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '28',
            'mlink'     => '028',
            'ativo_mestre'     => '7',
            'ativo_escravo'     => '30',
            'faixa'  => '10.10.0.216/29',
            'route_mestre'  => '10.10.0.217',
            'route_escravo'     => '10.10.0.218',
            'observacoes'     => 'VLAN 101 / VLAN 101',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '29',
            'mlink'     => '029',
            'ativo_mestre'     => '23',
            'ativo_escravo'     => '46',
            'faixa'  => '10.10.0.224/29',
            'route_mestre'  => '10.10.0.225',
            'route_escravo'     => '10.10.0.226',
            'observacoes'     => 'VLAN 101 / VLAN 101 (Switch Terra Boa 10.10.0.230)',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '30',
            'mlink'     => '030',
            'ativo_mestre'     => '30',
            'ativo_escravo'     => '41',
            'faixa'  => '10.10.0.232/29',
            'route_mestre'  => '10.10.0.233',
            'route_escravo'     => '10.10.0.234',
            'observacoes'     => 'VLAN 101 / VLAN 60',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '31',
            'mlink'     => '031',
            'ativo_mestre'     => '41',
            'ativo_escravo'     => '12',
            'faixa'  => '110.10.0.240/29',
            'route_mestre'  => '10.10.0.241',
            'route_escravo'     => '10.10.0.242',
            'observacoes'     => 'VLAN 101 / VLAN 101',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '32',
            'mlink'     => '032',
            'ativo_mestre'     => '35',
            'ativo_escravo'     => '12',
            'faixa'  => '10.10.0.248/29',
            'route_mestre'  => '10.10.0.249',
            'route_escravo'     => '10.10.0.250',
            'observacoes'     => 'VLAN 101 / VLAN 102',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '33',
            'mlink'     => '033',
            'ativo_mestre'     => '12',
            'ativo_escravo'     => '13',
            'faixa'  => '10.10.1.0/29',
            'route_mestre'  => '10.10.1.1',
            'route_escravo'     => '10.10.1.2',
            'observacoes'     => 'VLAN 100 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '34',
            'mlink'     => '034',
            'ativo_mestre'     => '23',
            'ativo_escravo'     => '25',
            'faixa'  => '10.10.1.8/29',
            'route_mestre'  => '10.10.1.9',
            'route_escravo'     => '10.10.1.10',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '35',
            'mlink'     => '035',
            'ativo_mestre'     => '25',
            'ativo_escravo'     => '24',
            'faixa'  => '10.10.1.16/29',
            'route_mestre'  => '10.10.1.17',
            'route_escravo'     => '10.10.1.18',
            'observacoes'     => 'VLAN 101 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '36',
            'mlink'     => '036',
            'ativo_mestre'     => '7',
            'ativo_escravo'     => '35',
            'faixa'  => '10.10.1.24/29',
            'route_mestre'  => '10.10.1.25',
            'route_escravo'     => '10.10.1.26',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '37',
            'mlink'     => '037',
            'ativo_mestre'     => '35',
            'ativo_escravo'     => '17',
            'faixa'  => '10.10.1.32/29',
            'route_mestre'  => '10.10.1.33',
            'route_escravo'     => '10.10.1.34',
            'observacoes'     => 'VLAN 110 / VLAN 110',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '38',
            'mlink'     => '038',
            'ativo_mestre'     => '2',
            'ativo_escravo'     => '1',
            'faixa'  => '10.10.1.40/29',
            'route_mestre'  => '10.10.1.41',
            'route_escravo'     => '10.10.1.42',
            'observacoes'     => 'VLAN 105 / VLAN 105',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '39',
            'mlink'     => '039',
            'ativo_mestre'     => '3',
            'ativo_escravo'     => '1',
            'faixa'  => '10.10.1.48/29',
            'route_mestre'  => '10.10.1.49',
            'route_escravo'     => '10.10.1.50',
            'observacoes'     => 'VLAN 104 / VLAN 104',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '40',
            'mlink'     => '040',
            'ativo_mestre'     => '33',
            'ativo_escravo'     => '44',
            'faixa'  => '10.10.1.56/29',
            'route_mestre'  => '10.10.1.57',
            'route_escravo'     => '10.10.1.58',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '41',
            'mlink'     => '041',
            'ativo_mestre'     => '20',
            'ativo_escravo'     => '16',
            'faixa'  => '10.10.1.64/29',
            'route_mestre'  => '10.10.1.65',
            'route_escravo'     => '10.10.1.66',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '42',
            'mlink'     => '042',
            'ativo_mestre'     => '19',
            'ativo_escravo'     => '15',
            'faixa'  => '10.10.1.72/29',
            'route_mestre'  => '10.10.1.73',
            'route_escravo'     => '110.10.1.74',
            'observacoes'     => 'VLAN 103 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '43',
            'mlink'     => '043',
            'ativo_mestre'     => '45',
            'ativo_escravo'     => '11',
            'faixa'  => '10.10.1.80/29',
            'route_mestre'  => '10.10.1.81',
            'route_escravo'     => '10.10.1.82',
            'observacoes'     => 'Inativo',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '44',
            'mlink'     => '044',
            'ativo_mestre'     => '34',
            'ativo_escravo'     => '30',
            'faixa'  => '10.10.1.88/29',
            'route_mestre'  => '10.10.1.89',
            'route_escravo'     => '10.10.1.90',
            'observacoes'     => 'Múltiplas VLANs, Múltiplas Faixas',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '45',
            'mlink'     => '045',
            'ativo_mestre'     => '3',
            'ativo_escravo'     => '26',
            'faixa'  => '10.10.1.96/29',
            'route_mestre'  => '10.10.1.97',
            'route_escravo'     => '10.10.1.98',
            'observacoes'     => 'VLAN 102 / VLAN 100',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '46',
            'mlink'     => '046',
            'ativo_mestre'     => '2',
            'ativo_escravo'     => '7',
            'faixa'  => '10.10.1.104/29',
            'route_mestre'  => '10.10.1.105',
            'route_escravo'     => '10.10.1.106',
            'observacoes'     => 'VLAN 105 / VLAN 105',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '47',
            'mlink'     => '047',
            'ativo_mestre'     => '3',
            'ativo_escravo'     => '19',
            'faixa'  => '10.10.1.112/29',
            'route_mestre'  => '10.10.1.113',
            'route_escravo'     => '10.10.1.114',
            'observacoes'     => 'VLAN 105 / VLAN 105',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '48',
            'mlink'     => '048',
            'ativo_mestre'     => '7',
            'ativo_escravo'     => '20',
            'faixa'  => '10.10.1.120/29',
            'route_mestre'  => '10.10.1.121',
            'route_escravo'     => '10.10.1.122',
            'observacoes'     => 'VLAN 103 / VLAN 104 (Via DWDM C34)',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '49',
            'mlink'     => '049',
            'ativo_mestre'     => '7',
            'ativo_escravo'     => '34',
            'faixa'  => '10.10.1.128/29',
            'route_mestre'  => '10.10.1.129',
            'route_escravo'     => '10.10.1.130',
            'observacoes'     => 'VLAN 104 / VLAN 103 (Via DWDM C33)',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        Enlace::create([
            'id' => '50',
            'mlink'     => '050',
            'ativo_mestre'     => '7',
            'ativo_escravo'     => '16',
            'faixa'  => '10.10.1.136/29',
            'route_mestre'  => '10.10.1.137',
            'route_escravo'     => '10.10.1.138',
            'observacoes'     => 'VLAN 106 / VLAN 106',
            'created_at'     => '2021-05-14 18:08:14',
        ]);

        // Enlace::create([
        //     'id' => '',
        //     'mlink'     => '',
        //     'ativo_mestre'     => '',
        //     'ativo_escravo'     => '',
        //     'faixa'  => '',
        //     'route_mestre'  => '',
        //     'route_escravo'     => '',
        //     'observacoes'     => 'VLAN 103 / VLAN 100',
        //     'created_at'     => '2021-05-14 18:08:14',
        // ]);
    }
}
