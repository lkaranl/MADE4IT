<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lmc;

class LmcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lmc::create([
            'id' => '1',
            'identificador' => '1500',
            'spid' => '10',
            'nome' => 'LMC.10.PVO.1500',
            'ce_identify' => 'IFRO - Porto Velho',
            'faixa_gerencia' => '172.26.1.240/30',
            'lmce' => 'LMCE.10.1500',
            'vlan_gerencia' => '300',
            'interface' => 'subinterface-qinq',
            'cidade_id' => '1',
            'ativo_id' => '1',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
            'created_at' => '2021-05-14 18:08:14',
        ]);

        Lmc::create([
            'id' => '2',
            'identificador' => '1501',
            'spid' => '10',
            'nome' => 'LMC.10.GUM.1501',
            'ce_identify' => 'IFRO - Guajará Mirim',
            'faixa_gerencia' => '172.26.1.244/30',
            'lmce' => 'LMCE.10.1501',
            'vlan_gerencia' => '300',
            'interface' => 'subinterface-dot1q',
            'cidade_id' => '2',
            'ativo_id' => '1',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
            'created_at' => '2021-05-14 18:08:14',
        ]);

        Lmc::create([
            'id' => '3',
            'identificador' => '1502',
            'spid' => '10',
            'nome' => 'LMC.10.AQS.1502',
            'ce_identify' => 'TV Allamanda - Ariquemes',
            'faixa_gerencia' => '172.26.1.248/30',
            'lmce' => 'LMCE.10.1502',
            'vlan_gerencia' => '300',
            'interface' => 'interface-vlanif',
            'cidade_id' => '1',
            'ativo_id' => '1',
            'coordenadas' =>'Lat: -10.8754 Lon: -61.9549',
            'created_at' => '2021-05-14 18:08:14',
        ]);
    }
}

//         Lmc::create( [
//         'id'=>1,
//         'identificador'=>'1498',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.AAPC.1498',
//         'ce_identify'=>'DETRAN => Alto Alegre dos Parecis - Av. Afonso Pena, 3791',
//         'vlan_gerencia'=>'300',
//         'faixa_gersencia' => '172.28.1.3'
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1498',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>2,
//         'identificador'=>'0107',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.0107',
//         'ce_identify'=>'MILLENIUM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0107',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>3,
//         'identificador'=>'0123',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.0123',
//         'ce_identify'=>'Giganet - Alvorada',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0123',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>4,
//         'identificador'=>'1038',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1038',
//         'ce_identify'=>'Delta Informatica => Urupa',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1038',
//         'ativo_id'=>25
//         ] );

                    

//         Lmc::create( [
//         'id'=>5,
//         'identificador'=>'1048',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1048',
//         'ce_identify'=>'Giganet - Alvorada',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1048',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>6,
//         'identificador'=>'1095',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1095',
//         'ce_identify'=>'Sesdec - Alvorada - Duque de Caxias_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1095',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>7,
//         'identificador'=>'1149',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1149',
//         'ce_identify'=>'Sesdec - Alvorada - Duque de Caxias_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1149',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>8,
//         'identificador'=>'1245',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1245',
//         'ce_identify'=>'PROINFO - Teixeiropolis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1245',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>9,
//         'identificador'=>'1252',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1252',
//         'ce_identify'=>'OuroCredi - Nova União',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1252',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>10,
//         'identificador'=>'1253',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1253',
//         'ce_identify'=>'OuroCredi - Tarilandia',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1253',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>11,
//         'identificador'=>'1257',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1257',
//         'ce_identify'=>'OuroCredi - Urupa',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1257',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>12,
//         'identificador'=>'1258',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1258',
//         'ce_identify'=>'OuroCredi - Teixeiropolis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1258',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>13,
//         'identificador'=>'1259',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1259',
//         'ce_identify'=>'OuroCredi - Mirante da Serra',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1259',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>14,
//         'identificador'=>'1275',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1275',
//         'ce_identify'=>'Vivo - Alvorada do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1275',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>15,
//         'identificador'=>'1308',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1308',
//         'ce_identify'=>'JLP INFO - Nova União',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1308',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>16,
//         'identificador'=>'1342',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1342',
//         'ce_identify'=>'VipNet - Teixeirópolis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1342',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>17,
//         'identificador'=>'1364',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1364',
//         'ce_identify'=>'SEJUS - Alvorada do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1364',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>18,
//         'identificador'=>'1397',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1397',
//         'ce_identify'=>'CrediSIS <= Alvorada - JiCredi - [AG-22]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1397',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>19,
//         'identificador'=>'1502',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1502',
//         'ce_identify'=>'DETRAN => Alvorada do Oeste - Av. Duque de Caxias, 5082',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1502',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>20,
//         'identificador'=>'1561',
//         'spid'=>'10',
//         'cidade_id'=>2,
//         'nome'=>'LMC.10.ADW.1561',
//         'ce_identify'=>'Millenium -4',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1561',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>21,
//         'identificador'=>'1132',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1132',
//         'ce_identify'=>'Sesdec - Alta Floresta - Parana_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1132',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>22,
//         'identificador'=>'1226',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1226',
//         'ce_identify'=>'SEDAM - Alta Floresta',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1226',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>23,
//         'identificador'=>'1264',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1264',
//         'ce_identify'=>'Vivo - Alta Floresta D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1264',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>24,
//         'identificador'=>'1319',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1319',
//         'ce_identify'=>'Telebras - (DataPrev) - Espigão D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1319',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>25,
//         'identificador'=>'1343',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1343',
//         'ce_identify'=>'SEJUS - Alta Floresta do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1343',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>26,
//         'identificador'=>'1411',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1411',
//         'ce_identify'=>'CrediSIS <= Alta Floresta - JiCredi - [AG-62]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1411',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>27,
//         'identificador'=>'1495',
//         'spid'=>'10',
//         'cidade_id'=>1,
//         'nome'=>'LMC.10.AFT.1495',
//         'ce_identify'=>'DETRAN => Alta Floresta - R. Sergipe, 4292',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1495',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>28,
//         'identificador'=>'1023',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1023',
//         'ce_identify'=>'Cliente Boa Safra Fazendinha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1023',
//         'ativo_id'=>2
//         ] );

                    

//         Lmc::create( [
//         'id'=>29,
//         'identificador'=>'1027',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1027',
//         'ce_identify'=>'PPPoE Parceiros - 3',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1027',
//         'ativo_id'=>2
//         ] );

                    

//         Lmc::create( [
//         'id'=>30,
//         'identificador'=>'1268',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1268',
//         'ce_identify'=>'Vivo - Alto Paraíso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1268',
//         'ativo_id'=>1
//         ] );

                    

//         Lmc::create( [
//         'id'=>31,
//         'identificador'=>'1335',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1335',
//         'ce_identify'=>'NorteNet - Alto Paraiso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1335',
//         'ativo_id'=>1
//         ] );

                    

//         Lmc::create( [
//         'id'=>32,
//         'identificador'=>'1470',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1470',
//         'ce_identify'=>'CrediSIS => Alto Paraíso - CrediAri - [AG-80]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1470',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>33,
//         'identificador'=>'1472',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1472',
//         'ce_identify'=>'DETRAN => Alto Paraíso - R. Bom Futuro, 3868',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1472',
//         'ativo_id'=>1
//         ] );

                    

//         Lmc::create( [
//         'id'=>34,
//         'identificador'=>'1547',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1547',
//         'ce_identify'=>'NBN Telecom => CEF <= Alto Paraíso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1547',
//         'ativo_id'=>1
//         ] );

                    

//         Lmc::create( [
//         'id'=>35,
//         'identificador'=>'1558',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1558',
//         'ce_identify'=>'Norte Serviços de Telecomunicações [Paraíso Net]  => Alto Paraíso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1558',
//         'ativo_id'=>1
//         ] );

                    

//         Lmc::create( [
//         'id'=>36,
//         'identificador'=>'1583',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1583',
//         'ce_identify'=>'INFONET => Alto Paraíso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1583',
//         'ativo_id'=>2
//         ] );

                    

//         Lmc::create( [
//         'id'=>37,
//         'identificador'=>'1585',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1585',
//         'ce_identify'=>'WorldNet => Malha - Garimpo Bom Futuro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1585',
//         'ativo_id'=>1
//         ] );

                    

//         Lmc::create( [
//         'id'=>38,
//         'identificador'=>'1591',
//         'spid'=>'10',
//         'cidade_id'=>3,
//         'nome'=>'LMC.10.APIS.1591',
//         'ce_identify'=>'PERMUTA.Fazendinha => FZN',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1591',
//         'ativo_id'=>2
//         ] );

                    

//         Lmc::create( [
//         'id'=>39,
//         'identificador'=>'0121',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.0121',
//         'ce_identify'=>'OLT Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0121',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>40,
//         'identificador'=>'1015',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1015',
//         'ce_identify'=>'Cliente NovaNet',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1015',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>41,
//         'identificador'=>'1029',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1029',
//         'ce_identify'=>'PPPoE Parceiros - 5',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1029',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>42,
//         'identificador'=>'1030',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1030',
//         'ce_identify'=>'WorldNet',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1030',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>43,
//         'identificador'=>'1031',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1031',
//         'ce_identify'=>'Cliente IG - Shopping (Filial 22)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1031',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>44,
//         'identificador'=>'1032',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1032',
//         'ce_identify'=>'Cliente IG - Mercado (Filial 17)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1032',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>45,
//         'identificador'=>'1045',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1045',
//         'ce_identify'=>'RNP - IFRO Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1045',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>46,
//         'identificador'=>'1050',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1050',
//         'ce_identify'=>'Centranet Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1050',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>47,
//         'identificador'=>'1052',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1052',
//         'ce_identify'=>'Vlan Centranet<=>BulletNet (5<=>CAUL)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1052',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>48,
//         'identificador'=>'1056',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1056',
//         'ce_identify'=>'Brasil Distribuidora - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1056',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>49,
//         'identificador'=>'1057',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1057',
//         'ce_identify'=>'Credisis L2L Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1057',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>50,
//         'identificador'=>'1064',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1064',
//         'ce_identify'=>'Rei das Tecnologias – Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1064',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>51,
//         'identificador'=>'1076',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1076',
//         'ce_identify'=>'Fiero – Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1076',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>52,
//         'identificador'=>'1190',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1190',
//         'ce_identify'=>'Coimbra - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1190',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>53,
//         'identificador'=>'1193',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1193',
//         'ce_identify'=>'WordNet - 3-R:A => 5-R:A',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1193',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>54,
//         'identificador'=>'1194',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1194',
//         'ce_identify'=>'PowerNet - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1194',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>55,
//         'identificador'=>'1195',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1195',
//         'ce_identify'=>'Maxmis Telecom - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1195',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>56,
//         'identificador'=>'1201',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1201',
//         'ce_identify'=>'TRT14 - Ariquemes_JK',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1201',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>57,
//         'identificador'=>'1238',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1238',
//         'ce_identify'=>'Rede Record - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1238',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>58,
//         'identificador'=>'1241',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1241',
//         'ce_identify'=>'SEDAM - Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1241',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>59,
//         'identificador'=>'1269',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1269',
//         'ce_identify'=>'Vivo - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1269',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>60,
//         'identificador'=>'1307',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1307',
//         'ce_identify'=>'BRDIGITAL - Galpão_5',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1307',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>61,
//         'identificador'=>'1320',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1320',
//         'ce_identify'=>'Telebras - (DataPrev) - Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1320',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>62,
//         'identificador'=>'1339',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1339',
//         'ce_identify'=>'CEF - Ariquemes - Prefeitura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1339',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>63,
//         'identificador'=>'1374',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1374',
//         'ce_identify'=>'SEJUS - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1374',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>64,
//         'identificador'=>'1380',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1380',
//         'ce_identify'=>'MaisNet - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1380',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>65,
//         'identificador'=>'1381',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1381',
//         'ce_identify'=>'AMAZONFIBER',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1381',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>66,
//         'identificador'=>'1382',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1382',
//         'ce_identify'=>'FAEMA e Centro Educacional Fenix',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1382',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>67,
//         'identificador'=>'1386',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1386',
//         'ce_identify'=>'SEJUS - Ariquemes - JK',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1386',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>68,
//         'identificador'=>'1387',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1387',
//         'ce_identify'=>'Cresol - PA Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1387',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>69,
//         'identificador'=>'1388',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1388',
//         'ce_identify'=>'BTELway - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1388',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>70,
//         'identificador'=>'1414',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1414',
//         'ce_identify'=>'CrediSIS <= Ariquemes - Canaã - CrediAri - [AG-73]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1414',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>71,
//         'identificador'=>'1415',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1415',
//         'ce_identify'=>'CrediSIS <= Ariquemes - Calçadão - [AG-70_MATRIZ]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1415',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>72,
//         'identificador'=>'1425',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1425',
//         'ce_identify'=>'Refrigerantes Dydyo - Ariquemes - Av. Jaru, 1152',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1425',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>73,
//         'identificador'=>'1469',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1469',
//         'ce_identify'=>'DETRAN => Ariquemes - R. Rio São João, 3590',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1469',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>74,
//         'identificador'=>'1545',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1545',
//         'ce_identify'=>'RNP => IFRO - Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1545',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>75,
//         'identificador'=>'1549',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1549',
//         'ce_identify'=>'WorldNet => MNK to 6',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1549',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>76,
//         'identificador'=>'1555',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1555',
//         'ce_identify'=>'Sabenauto (Tigrão Veículos) => Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1555',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>77,
//         'identificador'=>'1576',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1576',
//         'ce_identify'=>'Rede TV => Ariquemes - R. Alameda Vitória-Régia - 2349',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1576',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>78,
//         'identificador'=>'1586',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1586',
//         'ce_identify'=>'WorldNet => Malha - Garimpo Bom Futuro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1586',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>79,
//         'identificador'=>'1587',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1587',
//         'ce_identify'=>'Firelink - Farmácia Pague-menos',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1587',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>80,
//         'identificador'=>'1595',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1595',
//         'ce_identify'=>'CREA <= Ariquemes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1595',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>81,
//         'identificador'=>'1606',
//         'spid'=>'10',
//         'cidade_id'=>5,
//         'nome'=>'LMC.10.AQS.1606',
//         'ce_identify'=>'SICOOB UNIRONDONIA <= Ariquemes - Av. Tancredo Neves',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1606',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>84,
//         'identificador'=>'1118',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1118',
//         'ce_identify'=>'Sesdec - Buritis - Rondonia_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1118',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>85,
//         'identificador'=>'1119',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1119',
//         'ce_identify'=>'Sesdec - Buritis - Foz do Iguacu_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1119',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>86,
//         'identificador'=>'1154',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1154',
//         'ce_identify'=>'Sesdec - Buritis - Porto Velho 0800_DEI/PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1154',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>87,
//         'identificador'=>'1202',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1202',
//         'ce_identify'=>'TRT14 - Buritis_Cerejeiras',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1202',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>88,
//         'identificador'=>'1270',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1270',
//         'ce_identify'=>'Vivo - Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1270',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>89,
//         'identificador'=>'1375',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1375',
//         'ce_identify'=>'SEJUS - Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1375',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>90,
//         'identificador'=>'1417',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1417',
//         'ce_identify'=>'CrediSIS <= Buritis - CrediAri - [AG-71]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1417',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>91,
//         'identificador'=>'1471',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1471',
//         'ce_identify'=>'DETRAN => Buritis - R. Bela Vista, 2498',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1471',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>92,
//         'identificador'=>'1577',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1577',
//         'ce_identify'=>'Rede TV => Buritis - R. Cabo Alcebino',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1577',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>93,
//         'identificador'=>'1604',
//         'spid'=>'10',
//         'cidade_id'=>6,
//         'nome'=>'LMC.10.BTIS.1604',
//         'ce_identify'=>'Sonia Vieira Silva - Buritis',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1604',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>95,
//         'identificador'=>'1028',
//         'spid'=>'10',
//         'cidade_id'=>8,
//         'nome'=>'LMC.10.CAUL.1028',
//         'ce_identify'=>'Cliente BulletNet',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1028',
//         'ativo_id'=>9
//         ] );

                    

//         Lmc::create( [
//         'id'=>96,
//         'identificador'=>'1315',
//         'spid'=>'10',
//         'cidade_id'=>8,
//         'nome'=>'LMC.10.CAUL.1315',
//         'ce_identify'=>'PowerNet - Cacaulandia',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1315',
//         'ativo_id'=>9
//         ] );

                    

//         Lmc::create( [
//         'id'=>97,
//         'identificador'=>'1473',
//         'spid'=>'10',
//         'cidade_id'=>8,
//         'nome'=>'LMC.10.CAUL.1473',
//         'ce_identify'=>'DETRAN => Cacaulândia - Av. Cacau, 1790',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1473',
//         'ativo_id'=>9
//         ] );

                    

//         Lmc::create( [
//         'id'=>98,
//         'identificador'=>'1198',
//         'spid'=>'10',
//         'cidade_id'=>10,
//         'nome'=>'LMC.10.CBA.1198',
//         'ce_identify'=>'Netway - Peer Cuiabá',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1198',
//         'ativo_id'=>41
//         ] );

                    

//         Lmc::create( [
//         'id'=>99,
//         'identificador'=>'1550',
//         'spid'=>'10',
//         'cidade_id'=>10,
//         'nome'=>'LMC.10.CBA.1550',
//         'ce_identify'=>'BRDIGITAL CBA',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1550',
//         'ativo_id'=>41
//         ] );

                    

//         Lmc::create( [
//         'id'=>100,
//         'identificador'=>'1483',
//         'spid'=>'10',
//         'cidade_id'=>7,
//         'nome'=>'LMC.10.CBXI.1483',
//         'ce_identify'=>'DETRAN => Cabixi - Av. Tamoios, 4887',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1483',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>101,
//         'identificador'=>'1026',
//         'spid'=>'10',
//         'cidade_id'=>11,
//         'nome'=>'LMC.10.CDEY.1026',
//         'ce_identify'=>'PPPoE Parceiros - CDEY',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1026',
//         'ativo_id'=>36
//         ] );

                    

//         Lmc::create( [
//         'id'=>102,
//         'identificador'=>'1280',
//         'spid'=>'10',
//         'cidade_id'=>11,
//         'nome'=>'LMC.10.CDEY.1280',
//         'ce_identify'=>'Vivo - Candeias do Jamari',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1280',
//         'ativo_id'=>36
//         ] );

                    

//         Lmc::create( [
//         'id'=>103,
//         'identificador'=>'1467',
//         'spid'=>'10',
//         'cidade_id'=>11,
//         'nome'=>'LMC.10.CDEY.1467',
//         'ce_identify'=>'DETRAN => Candeias do Jamari - Av. Ayrton Senna, 987',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1467',
//         'ativo_id'=>36
//         ] );

                    

//         Lmc::create( [
//         'id'=>104,
//         'identificador'=>'1613',
//         'spid'=>'10',
//         'cidade_id'=>11,
//         'nome'=>'LMC.10.CDEY.1613',
//         'ce_identify'=>'Brasil Digital <= CDEY to PVO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1613',
//         'ativo_id'=>36
//         ] );

                    

//         Lmc::create( [
//         'id'=>105,
//         'identificador'=>'1480',
//         'spid'=>'10',
//         'cidade_id'=>14,
//         'nome'=>'LMC.10.CHUG.1480',
//         'ce_identify'=>'DETRAN => Chupinguaia - R. 19 de Abril, 1360',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1480',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>106,
//         'identificador'=>'1128',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1128',
//         'ce_identify'=>'Sesdec - Cerejeiras - Goias_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1128',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>107,
//         'identificador'=>'1129',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1129',
//         'ce_identify'=>'Sesdec - Cerejeiras - Aracaju_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1129',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>108,
//         'identificador'=>'1232',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1232',
//         'ce_identify'=>'SEDAM - Cerejeiras',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1232',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>109,
//         'identificador'=>'1281',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1281',
//         'ce_identify'=>'Vivo - Cerejeiras',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1281',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>110,
//         'identificador'=>'1356',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1356',
//         'ce_identify'=>'SEJUS - Cerejeirras - Goiais',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1356',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>111,
//         'identificador'=>'1478',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1478',
//         'ce_identify'=>'DETRAN => Cerejeiras - R. Portugal, 2869',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1478',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>112,
//         'identificador'=>'1597',
//         'spid'=>'10',
//         'cidade_id'=>13,
//         'nome'=>'LMC.10.CJW.1597',
//         'ce_identify'=>'CREA <= Cerejeiras',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1597',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>116,
//         'identificador'=>'1530',
//         'spid'=>'10',
//         'cidade_id'=>10,
//         'nome'=>'LMC.10.CMNV.1530',
//         'ce_identify'=>'DETRAN => Campo Novo de Rondônia - Av Tanc. Neves',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1530',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>117,
//         'identificador'=>'1174',
//         'spid'=>'10',
//         'cidade_id'=>17,
//         'nome'=>'LMC.10.CMR.1174',
//         'ce_identify'=>'Sesdec - Costa Marques - Forte Prin. da Beira_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1174',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>118,
//         'identificador'=>'1175',
//         'spid'=>'10',
//         'cidade_id'=>17,
//         'nome'=>'LMC.10.CMR.1175',
//         'ce_identify'=>'Sesdec - Costa Marques - Santa Cruz_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1175',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>119,
//         'identificador'=>'1227',
//         'spid'=>'10',
//         'cidade_id'=>17,
//         'nome'=>'LMC.10.CMR.1227',
//         'ce_identify'=>'SEDAM - Costa Marques',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1227',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>120,
//         'identificador'=>'1367',
//         'spid'=>'10',
//         'cidade_id'=>17,
//         'nome'=>'LMC.10.CMR.1367',
//         'ce_identify'=>'SEJUS - Costa Marques',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1367',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>121,
//         'identificador'=>'1533',
//         'spid'=>'10',
//         'cidade_id'=>17,
//         'nome'=>'LMC.10.CMR.1533',
//         'ce_identify'=>'DETRAN => Costa Marques - Av. Chianca',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1533',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>122,
//         'identificador'=>'1523',
//         'spid'=>'10',
//         'cidade_id'=>16,
//         'nome'=>'LMC.10.CRBR.1523',
//         'ce_identify'=>'DETRAN => Corumbiara - R. Juscelino K.',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1523',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>123,
//         'identificador'=>'1509',
//         'spid'=>'10',
//         'cidade_id'=>12,
//         'nome'=>'LMC.10.CSTH.1509',
//         'ce_identify'=>'DETRAN => Castanheiras - Av. Pinheiros, 1875',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1509',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>124,
//         'identificador'=>'1130',
//         'spid'=>'10',
//         'cidade_id'=>55,
//         'nome'=>'LMC.10.CUJU.1130',
//         'ce_identify'=>'Sesdec - Cujubim - Maracana_PC/PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1130',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>125,
//         'identificador'=>'1522',
//         'spid'=>'10',
//         'cidade_id'=>55,
//         'nome'=>'LMC.10.CUJU.1522',
//         'ce_identify'=>'DETRAN => Cujubim - Av. Condor',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1522',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>126,
//         'identificador'=>'0104',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.0104',
//         'ce_identify'=>'CLICKNET',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0104',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>127,
//         'identificador'=>'1014',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1014',
//         'ce_identify'=>'NetWay Cacoal - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1014',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>128,
//         'identificador'=>'1060',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1060',
//         'ce_identify'=>'Mazzuti – Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1060',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>129,
//         'identificador'=>'1072',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1072',
//         'ce_identify'=>'Fiero – Cacoal – Jose Patrocinio',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1072',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>130,
//         'identificador'=>'1073',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1073',
//         'ce_identify'=>'Fiero – Cacoal – 7 Setembro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1073',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>131,
//         'identificador'=>'1096',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1096',
//         'ce_identify'=>'Sesdec - Cacoal - AV. Brasil_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1096',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>132,
//         'identificador'=>'1097',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1097',
//         'ce_identify'=>'Sesdec - Cacoal - Inderval J. Brasil_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1097',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>133,
//         'identificador'=>'1098',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1098',
//         'ce_identify'=>'Sesdec - Cacoal - Rua Brasil_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1098',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>134,
//         'identificador'=>'1099',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1099',
//         'ce_identify'=>'Sesdec - Cacoal - Presidente Medice_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1099',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>135,
//         'identificador'=>'1107',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1107',
//         'ce_identify'=>'CrediSIS <= Cacoal - CrediAri - [AG-78]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1107',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>136,
//         'identificador'=>'1144',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1144',
//         'ce_identify'=>'Sesdec - Cacoal - Av. Presidente Médici_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1144',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>137,
//         'identificador'=>'1183',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1183',
//         'ce_identify'=>'Sesdec - Cacoal - Av. Juscimeira 215_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1183',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>138,
//         'identificador'=>'1191',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1191',
//         'ce_identify'=>'Coimbra - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1191',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>139,
//         'identificador'=>'1203',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1203',
//         'ce_identify'=>'TRT14 - Cacoal_General Osorio',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1203',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>140,
//         'identificador'=>'1229',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1229',
//         'ce_identify'=>'SEDAM - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1229',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>141,
//         'identificador'=>'1286',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1286',
//         'ce_identify'=>'Vivo - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1286',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>142,
//         'identificador'=>'1313',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1313',
//         'ce_identify'=>'TV Allamanda - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1313',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>143,
//         'identificador'=>'1321',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1321',
//         'ce_identify'=>'Telebras - (DataPrev) - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1321',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>144,
//         'identificador'=>'1336',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1336',
//         'ce_identify'=>'RNP (IFRO) - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1336',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>145,
//         'identificador'=>'1354',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1354',
//         'ce_identify'=>'SEJUS - Cacoal - Itapemirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1354',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>146,
//         'identificador'=>'1355',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1355',
//         'ce_identify'=>'SEJUS - Cacoal - Afonso Pena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1355',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>147,
//         'identificador'=>'1419',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1419',
//         'ce_identify'=>'CrediSIS <= Cacoal - CrediAri - [AG-78]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1419',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>148,
//         'identificador'=>'1429',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1429',
//         'ce_identify'=>'FEASE => Cacoal - Inderval José, 484',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1429',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>149,
//         'identificador'=>'1476',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1476',
//         'ce_identify'=>'DETRAN => Cacoal - R. Ji-Paraná, 2101',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1476',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>150,
//         'identificador'=>'1596',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1596',
//         'ce_identify'=>'CREA <= Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1596',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>151,
//         'identificador'=>'1611',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1611',
//         'ce_identify'=>'SICOOB UNIRONDONIA <= Cacoal - Av. Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1611',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>152,
//         'identificador'=>'1617',
//         'spid'=>'10',
//         'cidade_id'=>9,
//         'nome'=>'LMC.10.CWL.1617',
//         'ce_identify'=>'Firelink => Farmácia Pague-menos - Cacoal',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1617',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>156,
//         'identificador'=>'0111',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.0111',
//         'ce_identify'=>'CENTRANET',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0111',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>157,
//         'identificador'=>'1021',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1021',
//         'ce_identify'=>'Centranet - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1021',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>158,
//         'identificador'=>'1043',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1043',
//         'ce_identify'=>'DPE-RO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1043',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>159,
//         'identificador'=>'1089',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1089',
//         'ce_identify'=>'Sesdec - Espigão  - Rio Grande do Sul_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1089',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>160,
//         'identificador'=>'1090',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1090',
//         'ce_identify'=>'Sesdec - Espigão  - Rosa P. Agostinho_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1090',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>161,
//         'identificador'=>'1285',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1285',
//         'ce_identify'=>'Vivo - Espigão do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1285',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>162,
//         'identificador'=>'1323',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1323',
//         'ce_identify'=>'Telebras - (DataPrev) - Espigão D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1323',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>163,
//         'identificador'=>'1363',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1363',
//         'ce_identify'=>'SEJUS - Espigão do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1363',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>164,
//         'identificador'=>'1395',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1395',
//         'ce_identify'=>'CrediSIS <= Espigão do Oeste - Oeste - [AG-100]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1395',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>165,
//         'identificador'=>'1526',
//         'spid'=>'10',
//         'cidade_id'=>18,
//         'nome'=>'LMC.10.EOE.1526',
//         'ce_identify'=>'DETRAN => Espigão do Oeste - R. Maranhão',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1526',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>167,
//         'identificador'=>'1279',
//         'spid'=>'10',
//         'cidade_id'=>19,
//         'nome'=>'LMC.10.GJT.1279',
//         'ce_identify'=>'Vivo - Governador Jorge Teixeira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1279',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>168,
//         'identificador'=>'1337',
//         'spid'=>'10',
//         'cidade_id'=>19,
//         'nome'=>'LMC.10.GJT.1337',
//         'ce_identify'=>'GIGANET - Malha Gov. Jorge Teixeira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1337',
//         'ativo_id'=>15
//         ] );

                    

//         Lmc::create( [
//         'id'=>169,
//         'identificador'=>'1341',
//         'spid'=>'10',
//         'cidade_id'=>19,
//         'nome'=>'LMC.10.GJT.1341',
//         'ce_identify'=>'FlashNet - Gov. Jorge Teixeira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1341',
//         'ativo_id'=>15
//         ] );

                    

//         Lmc::create( [
//         'id'=>170,
//         'identificador'=>'1474',
//         'spid'=>'10',
//         'cidade_id'=>19,
//         'nome'=>'LMC.10.GJT.1474',
//         'ce_identify'=>'DETRAN => Gover. Jorge Teixeira - Av. Imburana, 9999',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1474',
//         'ativo_id'=>15
//         ] );

                    

//         Lmc::create( [
//         'id'=>171,
//         'identificador'=>'1548',
//         'spid'=>'10',
//         'cidade_id'=>19,
//         'nome'=>'LMC.10.GJT.1548',
//         'ce_identify'=>'Atual Telecom => Rede Provedor <= Gov Jorge Teixeira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1548',
//         'ativo_id'=>15
//         ] );

                    

//         Lmc::create( [
//         'id'=>172,
//         'identificador'=>'1582',
//         'spid'=>'10',
//         'cidade_id'=>19,
//         'nome'=>'LMC.10.GJT.1582',
//         'ce_identify'=>'Gov. Jorge Teixeira <=> Ouro Preto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1582',
//         'ativo_id'=>15
//         ] );

                    

//         Lmc::create( [
//         'id'=>173,
//         'identificador'=>'1159',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1159',
//         'ce_identify'=>'Sesdec - Guajara Mirim - Getulio Vargas_DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1159',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>174,
//         'identificador'=>'1170',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1170',
//         'ce_identify'=>'Sesdec - Guajara Mirim - Duque Caxias1848_PM/GETEC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1170',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>175,
//         'identificador'=>'1171',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1171',
//         'ce_identify'=>'Sesdec - Guajara Mirim - Duque Caxias1720_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1171',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>176,
//         'identificador'=>'1172',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1172',
//         'ce_identify'=>'Sesdec - Guajara Mirim - Ant. Correia Costa_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1172',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>177,
//         'identificador'=>'1173',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1173',
//         'ce_identify'=>'Sesdec - Guajara Mirim - 15 Novembro_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1173',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>178,
//         'identificador'=>'1182',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1182',
//         'ce_identify'=>'Ozonio-Suframa - Guajara Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1182',
//         'ativo_id'=>14
//         ] );

                    

//         Lmc::create( [
//         'id'=>179,
//         'identificador'=>'1205',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1205',
//         'ce_identify'=>'TRT14 - Guajara Mirim_Novo Sertão',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1205',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>180,
//         'identificador'=>'1217',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1217',
//         'ce_identify'=>'MERCONORTE - Guajará',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1217',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>181,
//         'identificador'=>'1234',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1234',
//         'ce_identify'=>'SEDAM - Guajara Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1234',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>182,
//         'identificador'=>'1294',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1294',
//         'ce_identify'=>'Vivo - Guajará-Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1294',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>183,
//         'identificador'=>'1324',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1324',
//         'ce_identify'=>'Telebras - (DataPrev) - Guajará-Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1324',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>184,
//         'identificador'=>'1340',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1340',
//         'ce_identify'=>'Brasil Distribuidora - Guajará Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1340',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>185,
//         'identificador'=>'1368',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1368',
//         'ce_identify'=>'SEJUS - Guajara Mirim - Av. Mascarenhas - 1649 - 10 de Abril - [SemiAberto Masculino]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1368',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>186,
//         'identificador'=>'1369',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1369',
//         'ce_identify'=>'SEJUS - Guajará Mirim - Av. Antonio Correa - 842 - [Casa de Prisão Albergue Feminino]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1369',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>187,
//         'identificador'=>'1370',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1370',
//         'ce_identify'=>'SEJUS - Guajara Mirim - Av. Mascarenhas - 1649 - 10 de Abril - [Casa de Detenção]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1370',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>188,
//         'identificador'=>'1379',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1379',
//         'ce_identify'=>'Portal Telecom - Guaraja Mirim (Peer BGP)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1379',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>189,
//         'identificador'=>'1531',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1531',
//         'ce_identify'=>'DETRAN => Guajará Mirim - Av. 1 De Maio',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1531',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>190,
//         'identificador'=>'1540',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1540',
//         'ce_identify'=>'RNP => IFRO - Guajara Mirin',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1540',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>191,
//         'identificador'=>'1563',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1563',
//         'ce_identify'=>'Portal Telecom - Guaraja Mirim (OLT Fiberhome)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1563',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>192,
//         'identificador'=>'1571',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1571',
//         'ce_identify'=>'FIOS => Receita Federal <= Guajará Mirim Avenida Quinze de Novembro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1571',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>193,
//         'identificador'=>'1598',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1598',
//         'ce_identify'=>'CREA <= Guajara-Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1598',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>194,
//         'identificador'=>'1616',
//         'spid'=>'10',
//         'cidade_id'=>20,
//         'nome'=>'LMC.10.GUM.1616',
//         'ce_identify'=>'Irmãos Gonçalves => Guajará Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1616',
//         'ativo_id'=>16
//         ] );

                    

//         Lmc::create( [
//         'id'=>195,
//         'identificador'=>'1196',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.HUT.1196',
//         'ce_identify'=>'IFAM - Humaita',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1196',
//         'ativo_id'=>17
//         ] );

                    

//         Lmc::create( [
//         'id'=>196,
//         'identificador'=>'1260',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.HUT.1260',
//         'ce_identify'=>'JMB Fibra Telecom - Humaita',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1260',
//         'ativo_id'=>17
//         ] );

                    

//         Lmc::create( [
//         'id'=>197,
//         'identificador'=>'1261',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.HUT.1261',
//         'ce_identify'=>'Curumim Telecom - Humaita',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1261',
//         'ativo_id'=>17
//         ] );

                    

//         Lmc::create( [
//         'id'=>198,
//         'identificador'=>'1262',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.HUT.1262',
//         'ce_identify'=>'7Facilite Software e Consultoria - Humaita',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1262',
//         'ativo_id'=>17
//         ] );

                    

//         Lmc::create( [
//         'id'=>199,
//         'identificador'=>'1542',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.HUT.1542',
//         'ce_identify'=>'IDARON => PF Br 319 km 130',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1542',
//         'ativo_id'=>17
//         ] );

                    

//         Lmc::create( [
//         'id'=>200,
//         'identificador'=>'1615',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.HUT.1615',
//         'ce_identify'=>'NARI EQUIPAMENTOS <= Humaita',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1615',
//         'ativo_id'=>17
//         ] );

                    

//         Lmc::create( [
//         'id'=>201,
//         'identificador'=>'1025',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1025',
//         'ce_identify'=>'PPPoE Parceiros - ITDO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1025',
//         'ativo_id'=>18
//         ] );

                    

//         Lmc::create( [
//         'id'=>202,
//         'identificador'=>'1036',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1036',
//         'ce_identify'=>'Cliente ZVC Turbo Net',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1036',
//         'ativo_id'=>18
//         ] );

                    

//         Lmc::create( [
//         'id'=>203,
//         'identificador'=>'1049',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1049',
//         'ce_identify'=>'WITECHINFO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1049',
//         'ativo_id'=>18
//         ] );

                    

//         Lmc::create( [
//         'id'=>204,
//         'identificador'=>'1067',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1067',
//         'ce_identify'=>'Brasil Digital – Itapuã',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1067',
//         'ativo_id'=>18
//         ] );

                    

//         Lmc::create( [
//         'id'=>205,
//         'identificador'=>'1120',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1120',
//         'ce_identify'=>'Sesdec - Itapua - Airton Senna_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1120',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>206,
//         'identificador'=>'1468',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1468',
//         'ce_identify'=>'DETRAN => Itapuã do Oeste - R. Atilio Ghesso, 1188',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1468',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>207,
//         'identificador'=>'1588',
//         'spid'=>'10',
//         'cidade_id'=>21,
//         'nome'=>'LMC.10.ITDO.1588',
//         'ce_identify'=>'PERMUTA.Restaurante Paraná => ITDO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1588',
//         'ativo_id'=>18
//         ] );

                    

//         Lmc::create( [
//         'id'=>210,
//         'identificador'=>'1018',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1018',
//         'ce_identify'=>'GigaNet JAW - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1018',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>211,
//         'identificador'=>'1053',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1053',
//         'ce_identify'=>'Cliente IG - Mercado (Matriz)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1053',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>212,
//         'identificador'=>'1075',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1075',
//         'ce_identify'=>'Fiero – Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1075',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>213,
//         'identificador'=>'1091',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1091',
//         'ce_identify'=>'Sesdec - Jaru - Marechal Rondon_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1091',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>214,
//         'identificador'=>'1092',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1092',
//         'ce_identify'=>'Sesdec - Jaru - Florianopolis_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1092',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>215,
//         'identificador'=>'1093',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1093',
//         'ce_identify'=>'Sesdec - Jaru - Ricardo Catanhede_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1093',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>216,
//         'identificador'=>'1147',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1147',
//         'ce_identify'=>'Sesdec - Jaru - Raimundo Catanhede_DEI/PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1147',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>217,
//         'identificador'=>'1206',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1206',
//         'ce_identify'=>'TRT14 - Jaru_Raimundo Cantanhede',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1206',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>218,
//         'identificador'=>'1221',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1221',
//         'ce_identify'=>'IFRO - Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1221',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>219,
//         'identificador'=>'1254',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1254',
//         'ce_identify'=>'OuroCredi - Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1254',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>220,
//         'identificador'=>'1276',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1276',
//         'ce_identify'=>'Vivo - Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1276',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>221,
//         'identificador'=>'1325',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1325',
//         'ce_identify'=>'Telebras - (DataPrev) - Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1325',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>222,
//         'identificador'=>'1349',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1349',
//         'ce_identify'=>'SEJUS - Jaru - Ricardo Catanhede_00881',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1349',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>223,
//         'identificador'=>'1350',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1350',
//         'ce_identify'=>'SEJUS - Jaru - Ricardo Catanhede_00824',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1350',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>224,
//         'identificador'=>'1351',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1351',
//         'ce_identify'=>'SEJUS - Jaru - R. Princesa Isabel',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1351',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>225,
//         'identificador'=>'1352',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1352',
//         'ce_identify'=>'SEJUS - Jaru - Rodovia RO 463',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1352',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>226,
//         'identificador'=>'1391',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1391',
//         'ce_identify'=>'Sabenauto - Tigrão Veiculos Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1391',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>227,
//         'identificador'=>'1398',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1398',
//         'ce_identify'=>'CrediSIS <= Jaru - JiCredi - [AG-24]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1398',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>228,
//         'identificador'=>'1438',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1438',
//         'ce_identify'=>'IDARON => Jaru - R. Rio de Janeiro, 3051, Setor 02',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1438',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>229,
//         'identificador'=>'1485',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1485',
//         'ce_identify'=>'DETRAN => Jaru - R. Goias, 3622',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1485',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>230,
//         'identificador'=>'1539',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1539',
//         'ce_identify'=>'BRDIGITAL - Subestação_JARU',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1539',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>231,
//         'identificador'=>'1543',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1543',
//         'ce_identify'=>'RNP =>  IFRO - Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1543',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>232,
//         'identificador'=>'1554',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1554',
//         'ce_identify'=>'Sabenauto (Tigrão Veículos) => Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1554',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>233,
//         'identificador'=>'1557',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1557',
//         'ce_identify'=>'FlashNet => Jaw',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1557',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>234,
//         'identificador'=>'1599',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1599',
//         'ce_identify'=>'CREA <= Jaru',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1599',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>235,
//         'identificador'=>'1607',
//         'spid'=>'10',
//         'cidade_id'=>22,
//         'nome'=>'LMC.10.JAW.1607',
//         'ce_identify'=>'SICOOB UNIRONDONIA <=  Jaru - R. Afonso José',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1607',
//         'ativo_id'=>19
//         ] );

                    

//         Lmc::create( [
//         'id'=>236,
//         'identificador'=>'0106',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.0106',
//         'ce_identify'=>'ONDA AGIL',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0106',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>237,
//         'identificador'=>'0117',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.0117',
//         'ce_identify'=>'Onda Ágil - CDNs',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0117',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>238,
//         'identificador'=>'1013',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1013',
//         'ce_identify'=>'Onda Ágil - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1013',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>239,
//         'identificador'=>'1040',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1040',
//         'ce_identify'=>'E. G. CHAGAS EIRELI - VIP NET',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1040',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>240,
//         'identificador'=>'1042',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1042',
//         'ce_identify'=>'DPE-RO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1042',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>241,
//         'identificador'=>'1065',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1065',
//         'ce_identify'=>'Rei das Tecnologias – Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1065',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>242,
//         'identificador'=>'1068',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1068',
//         'ce_identify'=>'Ozonio-Suframa - Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1068',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>243,
//         'identificador'=>'1074',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1074',
//         'ce_identify'=>'Fiero – Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1074',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>244,
//         'identificador'=>'1088',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1088',
//         'ce_identify'=>'Sesdec - Ji-Parana - 22 Novembro_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1088',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>245,
//         'identificador'=>'1100',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1100',
//         'ce_identify'=>'Sesdec - Ji-Parana - Café Filho_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1100',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>246,
//         'identificador'=>'1101',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1101',
//         'ce_identify'=>'Sesdec - Ji-Parana - Beira Rio_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1101',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>247,
//         'identificador'=>'1145',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1145',
//         'ce_identify'=>'Sesdec - Ji-Parana - Café Filho_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1145',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>248,
//         'identificador'=>'1163',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1163',
//         'ce_identify'=>'Sesdec - Dist. Vista Alegre Do Abunã - Bruneslzv Soltosk/JP_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1163',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>249,
//         'identificador'=>'1164',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1164',
//         'ce_identify'=>'Sesdec - Dist. Rio Pardo - Av. 03_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1164',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>250,
//         'identificador'=>'1165',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1165',
//         'ce_identify'=>'Sesdec - Campo Novo RO - BR421 Pres. Medice_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1165',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>251,
//         'identificador'=>'1166',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1166',
//         'ce_identify'=>'Sesdec - Monte Negro - Justino Luiz Ronconi_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1166',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>252,
//         'identificador'=>'1167',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1167',
//         'ce_identify'=>'Sesdec - Monte Negro - Brasilio P. Gomes_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1167',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>253,
//         'identificador'=>'1168',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1168',
//         'ce_identify'=>'Sesdec - Alto Paraiso - Joao Paulo_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1168',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>254,
//         'identificador'=>'1169',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1169',
//         'ce_identify'=>'Sesdec - Nova Mamore - Raimundo Brasileiro_PC/PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1169',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>255,
//         'identificador'=>'1176',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1176',
//         'ce_identify'=>'Sesdec - Nova Mutum - Genipapo_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1176',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>256,
//         'identificador'=>'1177',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1177',
//         'ce_identify'=>'Sesdec - Dist. Abuna - BR364 km233_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1177',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>257,
//         'identificador'=>'1178',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1178',
//         'ce_identify'=>'Sesdec - Dist. Nova California - Guarani_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1178',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>258,
//         'identificador'=>'1179',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1179',
//         'ce_identify'=>'Sesdec - Dist. Extrema - Duque Caxias_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1179',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>259,
//         'identificador'=>'1180',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1180',
//         'ce_identify'=>'Sesdec - Dist. Extrema - BR364 km1040_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1180',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>260,
//         'identificador'=>'1184',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1184',
//         'ce_identify'=>'CrediSIS <= Ji-Paraná - JiCred - CENTRAL - [AG-00]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1184',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>261,
//         'identificador'=>'1188',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1188',
//         'ce_identify'=>'Coimbra - Guajara Mirim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1188',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>262,
//         'identificador'=>'1189',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1189',
//         'ce_identify'=>'Coimbra - Ji-Parana_Brasil',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1189',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>263,
//         'identificador'=>'1207',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1207',
//         'ce_identify'=>'TRT14 - Ji-Parana_Monte Castelo',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1207',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>264,
//         'identificador'=>'1216',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1216',
//         'ce_identify'=>'MERCONORTE - Jiparana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1216',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>265,
//         'identificador'=>'1224',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1224',
//         'ce_identify'=>'SEDAM - Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1224',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>266,
//         'identificador'=>'1236',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1236',
//         'ce_identify'=>'Coimbra - Ji-Parana_C.Arraes',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1236',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>267,
//         'identificador'=>'1239',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1239',
//         'ce_identify'=>'SpeedWeb - Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1239',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>268,
//         'identificador'=>'1250',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1250',
//         'ce_identify'=>'OuroCredi - Vila dos Palmares',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1250',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>269,
//         'identificador'=>'1272',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1272',
//         'ce_identify'=>'Vivo - Ji-Paraná',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1272',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>270,
//         'identificador'=>'1306',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1306',
//         'ce_identify'=>'BRDIGITAL - Subestação_JIP',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1306',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>271,
//         'identificador'=>'1310',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1310',
//         'ce_identify'=>'Pelikan Net - Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1310',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>272,
//         'identificador'=>'1317',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1317',
//         'ce_identify'=>'Eucredi - Ji-Paraná',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1317',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>273,
//         'identificador'=>'1328',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1328',
//         'ce_identify'=>'Telebras - (DataPrev) - Nova Mamoré',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1328',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>274,
//         'identificador'=>'1377',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1377',
//         'ce_identify'=>'SEJUS - Ji-Paraná - Av. 2 De Abril - Unidade de Monitoramento',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1377',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>275,
//         'identificador'=>'1378',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1378',
//         'ce_identify'=>'SEJUS - Ji-Paraná - Ch Nazaré - Km 4,5 - Presídio SemiAberto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1378',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>276,
//         'identificador'=>'1383',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1383',
//         'ce_identify'=>'SEJUS - Ji-Paraná - Av. 2 De Abril - 1 - Casa de Denteção',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1383',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>277,
//         'identificador'=>'1384',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1384',
//         'ce_identify'=>'SEJUS - Jiparaná - Ch Nazaré - Km 4,5 - Presídio Agenor de Carvalho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1384',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>278,
//         'identificador'=>'1408',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1408',
//         'ce_identify'=>'CrediSIS <= Ji-Paraná - Monte Castelo - JiCredi - [AG-25]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1408',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>279,
//         'identificador'=>'1409',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1409',
//         'ce_identify'=>'CrediSIS <= Ji-Paraná - JiCredi - [CENTRAL]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1409',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>280,
//         'identificador'=>'1410',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1410',
//         'ce_identify'=>'CrediSIS <= Ji-Paraná - 6 de Maio - JiCredi - [AG-20]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1410',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>281,
//         'identificador'=>'1426',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1426',
//         'ce_identify'=>'Refrigerantes Dydyo - Ji-Paraná - BR-364, 3682 - Jardim Florida',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1426',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>282,
//         'identificador'=>'1428',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1428',
//         'ce_identify'=>'FEASE => Ji-Paraná - Av. Transcontinental,  5862',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1428',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>283,
//         'identificador'=>'1456',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1456',
//         'ce_identify'=>'CRESOL => Ji-Paraná',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1456',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>284,
//         'identificador'=>'1490',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1490',
//         'ce_identify'=>'DETRAN => Ji-Paraná - R. Ana Gomes dos Santos, 232',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1490',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>285,
//         'identificador'=>'1491',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1491',
//         'ce_identify'=>'DETRAN => Ji-Paraná - Pista de Testes - R. Paulo Freire, 2046',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1491',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>286,
//         'identificador'=>'1492',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1492',
//         'ce_identify'=>'DETRAN => Ji-Paraná - Posto Avançado - Av. Aracaju, 401',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1492',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>287,
//         'identificador'=>'1493',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1493',
//         'ce_identify'=>'DETRAN => Ji-Paraná - Shopping Cidadão -  R. Martins, 247',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1493',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>288,
//         'identificador'=>'1538',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1538',
//         'ce_identify'=>'IDARON => Fazenda Pau Doleo',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1538',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>289,
//         'identificador'=>'1553',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1553',
//         'ce_identify'=>'Sabenauto (Tigrão Veículos) => Ji-Paraná',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1553',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>290,
//         'identificador'=>'1560',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1560',
//         'ce_identify'=>'Millenium -JIP',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1560',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>291,
//         'identificador'=>'1568',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1568',
//         'ce_identify'=>'FIOS => Receita Federal <= Ji-paraná - Dom Augusto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1568',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>292,
//         'identificador'=>'1569',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1569',
//         'ce_identify'=>'FIOS => Receita Federal <= Ji-Paraná - Doutor Pedro Teixeira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1569',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>293,
//         'identificador'=>'1581',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1581',
//         'ce_identify'=>'CrediSIS <= Ji-Paraná - Maringa - JiCredi - [AG-23]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1581',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>294,
//         'identificador'=>'1600',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1600',
//         'ce_identify'=>'CREA <= Ji-Parana',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1600',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>295,
//         'identificador'=>'1609',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1609',
//         'ce_identify'=>'SICOOB UNIRONDONIA <= Ji-Paraná - Av. Marechal Rondon',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1609',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>296,
//         'identificador'=>'1610',
//         'spid'=>'10',
//         'cidade_id'=>23,
//         'nome'=>'LMC.10.JIP.1610',
//         'ce_identify'=>'SICOOB UNIRONDONIA <= Ji-Paraná - R. Maringa',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1610',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>297,
//         'identificador'=>'1150',
//         'spid'=>'10',
//         'cidade_id'=>15,
//         'nome'=>'LMC.10.KLO.1150',
//         'ce_identify'=>'Sesdec - Colorado - M. Rondon_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1150',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>298,
//         'identificador'=>'1204',
//         'spid'=>'10',
//         'cidade_id'=>15,
//         'nome'=>'LMC.10.KLO.1204',
//         'ce_identify'=>'TRT14 - Colorado_Paulo Assis Ribeiro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1204',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>299,
//         'identificador'=>'1231',
//         'spid'=>'10',
//         'cidade_id'=>15,
//         'nome'=>'LMC.10.KLO.1231',
//         'ce_identify'=>'SEDAM - Colorado',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1231',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>300,
//         'identificador'=>'1282',
//         'spid'=>'10',
//         'cidade_id'=>15,
//         'nome'=>'LMC.10.KLO.1282',
//         'ce_identify'=>'Vivo - Colorado do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1282',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>301,
//         'identificador'=>'1357',
//         'spid'=>'10',
//         'cidade_id'=>15,
//         'nome'=>'LMC.10.KLO.1357',
//         'ce_identify'=>'SEJUS - Colorado - Guapore',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1357',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>302,
//         'identificador'=>'1479',
//         'spid'=>'10',
//         'cidade_id'=>15,
//         'nome'=>'LMC.10.KLO.1479',
//         'ce_identify'=>'DETRAN => Colorado - R. Humaita, 3880',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1479',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>303,
//         'identificador'=>'0110',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.0110',
//         'ce_identify'=>'WEBDA',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0110',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>304,
//         'identificador'=>'1016',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1016',
//         'ce_identify'=>'WebDA - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1016',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>305,
//         'identificador'=>'1059',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1059',
//         'ce_identify'=>'Sicoob Centro Machadinho do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1059',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>306,
//         'identificador'=>'1063',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1063',
//         'ce_identify'=>'Evolution Informatica – Machadinho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1063',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>307,
//         'identificador'=>'1102',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1102',
//         'ce_identify'=>'Sesdec - Machadinho - J. B. Figueiredo_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1102',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>308,
//         'identificador'=>'1103',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1103',
//         'ce_identify'=>'Sesdec - Machadinho - Marechal Dutra_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1103',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>309,
//         'identificador'=>'1104',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1104',
//         'ce_identify'=>'Sesdec - Machadinho - Joao Goulart_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1104',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>310,
//         'identificador'=>'1121',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1121',
//         'ce_identify'=>'Sesdec - Quinto Bec - RO 257_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1121',
//         'ativo_id'=>37
//         ] );

                    

//         Lmc::create( [
//         'id'=>311,
//         'identificador'=>'1208',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1208',
//         'ce_identify'=>'TRT14 - Machadinho_Tocantins',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1208',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>312,
//         'identificador'=>'1219',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1219',
//         'ce_identify'=>'Cronos Telecom',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1219',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>313,
//         'identificador'=>'1223',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1223',
//         'ce_identify'=>'SEDAM - Machadinho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1223',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>314,
//         'identificador'=>'1247',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1247',
//         'ce_identify'=>'OuroCredi - Machadinho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1247',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>315,
//         'identificador'=>'1248',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1248',
//         'ce_identify'=>'OuroCredi - QuintoBEC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1248',
//         'ativo_id'=>37
//         ] );

                    

//         Lmc::create( [
//         'id'=>316,
//         'identificador'=>'1249',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1249',
//         'ce_identify'=>'OuroCredi - Vale do Anari',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1249',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>317,
//         'identificador'=>'1251',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1251',
//         'ce_identify'=>'OuroCredi - Theobroma',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1251',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>318,
//         'identificador'=>'1277',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1277',
//         'ce_identify'=>'Vivo - Machadinho D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1277',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>319,
//         'identificador'=>'1326',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1326',
//         'ce_identify'=>'Telebras - (DataPrev) - Machadinho d Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1326',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>320,
//         'identificador'=>'1376',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1376',
//         'ce_identify'=>'SEJUS - Machadinho do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1376',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>321,
//         'identificador'=>'1389',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1389',
//         'ce_identify'=>'WebDa - Malha => Quinto Bec <= Machadinho do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1389',
//         'ativo_id'=>37
//         ] );

                    

//         Lmc::create( [
//         'id'=>322,
//         'identificador'=>'1399',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1399',
//         'ce_identify'=>'CrediSIS <= Machadinho - JiCredi - [AG-33]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1399',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>323,
//         'identificador'=>'1455',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1455',
//         'ce_identify'=>'IDARON => PF - MA-28 - LH MA-28, km 90, Rio Machado, Dist. MACH',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1455',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>324,
//         'identificador'=>'1518',
//         'spid'=>'10',
//         'cidade_id'=>24,
//         'nome'=>'LMC.10.MACH.1518',
//         'ce_identify'=>'DETRAN => Machadinho do Oeste - R. Aracaju',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1518',
//         'ativo_id'=>21
//         ] );

                    

//         Lmc::create( [
//         'id'=>327,
//         'identificador'=>'1131',
//         'spid'=>'10',
//         'cidade_id'=>25,
//         'nome'=>'LMC.10.MNAZ.1131',
//         'ce_identify'=>'Sesdec - Ministro Andreaza - Tiradentes_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1131',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>328,
//         'identificador'=>'1287',
//         'spid'=>'10',
//         'cidade_id'=>25,
//         'nome'=>'LMC.10.MNAZ.1287',
//         'ce_identify'=>'Vivo - Ministro Andreazza',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1287',
//         'ativo_id'=>10
//         ] );

                    

//         Lmc::create( [
//         'id'=>329,
//         'identificador'=>'1484',
//         'spid'=>'10',
//         'cidade_id'=>25,
//         'nome'=>'LMC.10.MNAZ.1484',
//         'ce_identify'=>'DETRAN => Ministro Andreaaza - Av. Bahia, 5953',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1484',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>330,
//         'identificador'=>'1271',
//         'spid'=>'10',
//         'cidade_id'=>27,
//         'nome'=>'LMC.10.MNK.1271',
//         'ce_identify'=>'Vivo - Monte Negro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1271',
//         'ativo_id'=>3
//         ] );

                    

//         Lmc::create( [
//         'id'=>331,
//         'identificador'=>'1475',
//         'spid'=>'10',
//         'cidade_id'=>27,
//         'nome'=>'LMC.10.MNK.1475',
//         'ce_identify'=>'DETRAN => Monte Negro - Av. Belo Horizonte,2620',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1475',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>332,
//         'identificador'=>'1584',
//         'spid'=>'10',
//         'cidade_id'=>27,
//         'nome'=>'LMC.10.MNK.1584',
//         'ce_identify'=>'CENTRAL INFORMATICA => BULLETNET MNK',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1584',
//         'ativo_id'=>26
//         ] );

                    

//         Lmc::create( [
//         'id'=>333,
//         'identificador'=>'1122',
//         'spid'=>'10',
//         'cidade_id'=>26,
//         'nome'=>'LMC.10.MTRR.1122',
//         'ce_identify'=>'Sesdec - Mirante da Serra - Seguinheiros_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1122',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>334,
//         'identificador'=>'1141',
//         'spid'=>'10',
//         'cidade_id'=>26,
//         'nome'=>'LMC.10.MTRR.1141',
//         'ce_identify'=>'MVW Telecom',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1141',
//         'ativo_id'=>24
//         ] );

                    

//         Lmc::create( [
//         'id'=>335,
//         'identificador'=>'1142',
//         'spid'=>'10',
//         'cidade_id'=>26,
//         'nome'=>'LMC.10.MTRR.1142',
//         'ce_identify'=>'Giganet-Mirante da Serra (MWM)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1142',
//         'ativo_id'=>24
//         ] );

                    

//         Lmc::create( [
//         'id'=>336,
//         'identificador'=>'1197',
//         'spid'=>'10',
//         'cidade_id'=>26,
//         'nome'=>'LMC.10.MTRR.1197',
//         'ce_identify'=>'PortWeb - Mirante da Serra',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1197',
//         'ativo_id'=>24
//         ] );

                    

//         Lmc::create( [
//         'id'=>337,
//         'identificador'=>'1278',
//         'spid'=>'10',
//         'cidade_id'=>26,
//         'nome'=>'LMC.10.MTRR.1278',
//         'ce_identify'=>'Vivo - Mirante da Serra',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1278',
//         'ativo_id'=>24
//         ] );

                    

//         Lmc::create( [
//         'id'=>338,
//         'identificador'=>'1503',
//         'spid'=>'10',
//         'cidade_id'=>26,
//         'nome'=>'LMC.10.MTRR.1503',
//         'ce_identify'=>'DETRAN => Mirante da Serra - R. Getúlio Vargas, 2230',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1503',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>342,
//         'identificador'=>'0102',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.0102',
//         'ce_identify'=>'NETMAIS',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0102',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>343,
//         'identificador'=>'0120',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.0120',
//         'ce_identify'=>'NETMAIS',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0120',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>344,
//         'identificador'=>'1125',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1125',
//         'ce_identify'=>'Sesdec - Nova Brasilandia - Nego Lopes2756_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1125',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>345,
//         'identificador'=>'1242',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1242',
//         'ce_identify'=>'NetMais - NBA => SGRS',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1242',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>346,
//         'identificador'=>'1243',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1243',
//         'ce_identify'=>'NetMais - NBA => SFYO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1243',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>347,
//         'identificador'=>'1244',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1244',
//         'ce_identify'=>'NetMais - NBA => RMM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1244',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>348,
//         'identificador'=>'1266',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1266',
//         'ce_identify'=>'Vivo - Nova Brasilândia D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1266',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>349,
//         'identificador'=>'1327',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1327',
//         'ce_identify'=>'Telebras - (DataPrev) - Nova Brasilândia D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1327',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>350,
//         'identificador'=>'1394',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1394',
//         'ce_identify'=>'CrediSIS <= Nova Brasilândia - CrediBras - [AG-113]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1394',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>351,
//         'identificador'=>'1513',
//         'spid'=>'10',
//         'cidade_id'=>28,
//         'nome'=>'LMC.10.NBA.1513',
//         'ce_identify'=>'DETRAN => Nova Brasilândia - Av. 13 de Maio, 2361',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1513',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>352,
//         'identificador'=>'1393',
//         'spid'=>'10',
//         'cidade_id'=>31,
//         'nome'=>'LMC.10.NHDO.1393',
//         'ce_identify'=>'CrediSIS <= Novo Horizonte - CrediBras - [AG-115]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1393',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>353,
//         'identificador'=>'1527',
//         'spid'=>'10',
//         'cidade_id'=>31,
//         'nome'=>'LMC.10.NHDO.1527',
//         'ce_identify'=>'DETRAN => Novo Horizonte - Av. Dr. Miguel Vieira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1527',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>358,
//         'identificador'=>'1292',
//         'spid'=>'10',
//         'cidade_id'=>29,
//         'nome'=>'LMC.10.NVME.1292',
//         'ce_identify'=>'Vivo - Distrito de Araras',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1292',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>359,
//         'identificador'=>'1293',
//         'spid'=>'10',
//         'cidade_id'=>29,
//         'nome'=>'LMC.10.NVME.1293',
//         'ce_identify'=>'Vivo - Nova Mamoré',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1293',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>360,
//         'identificador'=>'1371',
//         'spid'=>'10',
//         'cidade_id'=>29,
//         'nome'=>'LMC.10.NVME.1371',
//         'ce_identify'=>'SEJUS - Nova Mamoré',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1371',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>361,
//         'identificador'=>'1435',
//         'spid'=>'10',
//         'cidade_id'=>29,
//         'nome'=>'LMC.10.NVME.1435',
//         'ce_identify'=>'IDARON => Jacinópolis - R. Marechal Rondon, Distr. NVME',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1435',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>362,
//         'identificador'=>'1532',
//         'spid'=>'10',
//         'cidade_id'=>29,
//         'nome'=>'LMC.10.NVME.1532',
//         'ce_identify'=>'DETRAN => Nova Mamoré - Av. Dom Pedro I',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1532',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>363,
//         'identificador'=>'1420',
//         'spid'=>'10',
//         'cidade_id'=>30,
//         'nome'=>'LMC.10.NVUO.1420',
//         'ce_identify'=>'CrediSIS <= Nova União - JiCredi - [AG-34]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1420',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>364,
//         'identificador'=>'1504',
//         'spid'=>'10',
//         'cidade_id'=>30,
//         'nome'=>'LMC.10.NVUO.1504',
//         'ce_identify'=>'DETRAN => Nova União - R. Porto Velho, 80',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1504',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>365,
//         'identificador'=>'0109',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.0109',
//         'ce_identify'=>'GIGANET',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0109',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>366,
//         'identificador'=>'1017',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1017',
//         'ce_identify'=>'GigaNet OPO - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1017',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>367,
//         'identificador'=>'1039',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1039',
//         'ce_identify'=>'E. G. CHAGAS EIRELI - VIP NET',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1039',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>368,
//         'identificador'=>'1041',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1041',
//         'ce_identify'=>'Cliente Linkon - OPO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1041',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>369,
//         'identificador'=>'1054',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1054',
//         'ce_identify'=>'Dedicado LoginTelecom',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1054',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>370,
//         'identificador'=>'1094',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1094',
//         'ce_identify'=>'Sesdec - Ouro Preto - 15 Novembro_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1094',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>371,
//         'identificador'=>'1106',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1106',
//         'ce_identify'=>'Sesdec - Ouro Preto - Afonso Rohl_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1106',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>372,
//         'identificador'=>'1143',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1143',
//         'ce_identify'=>'Sesdec - Ouro Preto - Cap. Silvio_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1143',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>373,
//         'identificador'=>'1209',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1209',
//         'ce_identify'=>'TRT14 - Ouro Preto_XV Novembro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1209',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>374,
//         'identificador'=>'1246',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1246',
//         'ce_identify'=>'OuroCredi - Ouro Preto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1246',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>375,
//         'identificador'=>'1255',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1255',
//         'ce_identify'=>'OuroCredi - Vale do Paraiso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1255',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>376,
//         'identificador'=>'1256',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1256',
//         'ce_identify'=>'OuroCredi - Rondominas',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1256',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>377,
//         'identificador'=>'1288',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1288',
//         'ce_identify'=>'Vivo - Ouro Preto do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1288',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>378,
//         'identificador'=>'1338',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1338',
//         'ce_identify'=>'GIGANET - Malha Gov. Jorge Teixeira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1338',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>379,
//         'identificador'=>'1353',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1353',
//         'ce_identify'=>'SEJUS - Ouro Preto - PE Adolfo Rohl',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1353',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>380,
//         'identificador'=>'1400',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1400',
//         'ce_identify'=>'CrediSIS <= Ouro Preto - JiCredi - [AG-32]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1400',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>381,
//         'identificador'=>'1486',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1486',
//         'ce_identify'=>'DETRAN => Ouro Preto do Oeste - R. Castelo Branco, 50',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1486',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>382,
//         'identificador'=>'1559',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1559',
//         'ce_identify'=>'Speed Web => Ouro Preto do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1559',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>383,
//         'identificador'=>'1574',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1574',
//         'ce_identify'=>'Ouro Preto <=> Urupá',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1574',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>384,
//         'identificador'=>'1578',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1578',
//         'ce_identify'=>'DETRAN => Pista de Ouro Preto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1578',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>385,
//         'identificador'=>'1608',
//         'spid'=>'10',
//         'cidade_id'=>32,
//         'nome'=>'LMC.10.OPO.1608',
//         'ce_identify'=>'SICOOB UNIRONDONIA <=  Ouro Preto - R. Ana Nery',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1608',
//         'ativo_id'=>33
//         ] );

                    

//         Lmc::create( [
//         'id'=>387,
//         'identificador'=>'0002',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.0002',
//         'ce_identify'=>'NBS-PBW-NTW-R:X',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0002',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>388,
//         'identificador'=>'0105',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.0105',
//         'ce_identify'=>'NETWAY',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0105',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>389,
//         'identificador'=>'0115',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.0115',
//         'ce_identify'=>'Netway - CDNs',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0115',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>390,
//         'identificador'=>'0126',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.0126',
//         'ce_identify'=>'NBS Servidor',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0126',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>391,
//         'identificador'=>'1022',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1022',
//         'ce_identify'=>'Centranet - Malha (Eletrogoes)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1022',
//         'ativo_id'=>28
//         ] );

                    

//         Lmc::create( [
//         'id'=>392,
//         'identificador'=>'1037',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1037',
//         'ce_identify'=>'ViaFibra - Site Guaporé',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1037',
//         'ativo_id'=>27
//         ] );

                    

//         Lmc::create( [
//         'id'=>393,
//         'identificador'=>'1071',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1071',
//         'ce_identify'=>'Fiero – Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1071',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>394,
//         'identificador'=>'1109',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1109',
//         'ce_identify'=>'Sesdec - Pimenta Bueno - 24 Novembro_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1109',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>395,
//         'identificador'=>'1148',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1148',
//         'ce_identify'=>'Sesdec - Pimenta Bueno - Costa Marques_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1148',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>396,
//         'identificador'=>'1199',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1199',
//         'ce_identify'=>'Netway - L2VC Redundância PBW-CBA',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1199',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>397,
//         'identificador'=>'1210',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1210',
//         'ce_identify'=>'TRT14 - Pimenta Bueno_Floriano Peixoto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1210',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>398,
//         'identificador'=>'1230',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1230',
//         'ce_identify'=>'SEDAM - Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1230',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>399,
//         'identificador'=>'1284',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1284',
//         'ce_identify'=>'Vivo - Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1284',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>400,
//         'identificador'=>'1309',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1309',
//         'ce_identify'=>'CEF - Colorado',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1309',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>401,
//         'identificador'=>'1314',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1314',
//         'ce_identify'=>'TV Allamanda - Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1314',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>402,
//         'identificador'=>'1322',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1322',
//         'ce_identify'=>'Telebras - (DataPrev) - Colorado do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1322',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>403,
//         'identificador'=>'1329',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1329',
//         'ce_identify'=>'Telebras - (DataPrev) - Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1329',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>404,
//         'identificador'=>'1358',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1358',
//         'ce_identify'=>'SEJUS - Pimenta Bueno - Costa Marques',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1358',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>405,
//         'identificador'=>'1412',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1412',
//         'ce_identify'=>'CrediSIS <= Pimenta Bueno - Sudoeste - [AG-61]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1412',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>406,
//         'identificador'=>'1457',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1457',
//         'ce_identify'=>'Irmãos Gonçalves => Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1457',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>407,
//         'identificador'=>'1482',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1482',
//         'ce_identify'=>'DETRAN => Pimenta Bueno - R. 21 de Abril, 118',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1482',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>408,
//         'identificador'=>'1570',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1570',
//         'ce_identify'=>'FIOS => Receita Federal <= Pimenta Bueno - Avenida Marechal Rondon',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1570',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>409,
//         'identificador'=>'1579',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1579',
//         'ce_identify'=>'Olé TV - Servidor PBW',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1579',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>410,
//         'identificador'=>'1593',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1593',
//         'ce_identify'=>'SICTV => Tv Candelaria PBW',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1593',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>411,
//         'identificador'=>'1601',
//         'spid'=>'10',
//         'cidade_id'=>34,
//         'nome'=>'LMC.10.PBW.1601',
//         'ce_identify'=>'CREA <= Pimenta Bueno',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1601',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>412,
//         'identificador'=>'1133',
//         'spid'=>'10',
//         'cidade_id'=>38,
//         'nome'=>'LMC.10.PIVR.1133',
//         'ce_identify'=>'Sesdec - Primavera de RO - Jose Rodrigues_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1133',
//         'ativo_id'=>39
//         ] );

                    

//         Lmc::create( [
//         'id'=>413,
//         'identificador'=>'1500',
//         'spid'=>'10',
//         'cidade_id'=>38,
//         'nome'=>'LMC.10.PIVR.1500',
//         'ce_identify'=>'DETRAN => Primavera de Rondônia - Av. Efrain Goulart de Barros, 3931',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1500',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>414,
//         'identificador'=>'1499',
//         'spid'=>'10',
//         'cidade_id'=>33,
//         'nome'=>'LMC.10.PREC.1499',
//         'ce_identify'=>'DETRAN => Parecis - Av. Carlos Gomes, 184',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1499',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>415,
//         'identificador'=>'1046',
//         'spid'=>'10',
//         'cidade_id'=>35,
//         'nome'=>'LMC.10.PTRS.1046',
//         'ce_identify'=>'Sesdec - Pimenteiras - Brasil_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1046',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>416,
//         'identificador'=>'1481',
//         'spid'=>'10',
//         'cidade_id'=>35,
//         'nome'=>'LMC.10.PTRS.1481',
//         'ce_identify'=>'DETRAN => Pimenteiras do Oeste - Av. Brasil, 1379',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1481',
//         'ativo_id'=>34
//         ] );

                    

//         Lmc::create( [
//         'id'=>417,
//         'identificador'=>'0001',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.0001',
//         'ce_identify'=>'NBS-PVO-DPD-R:X',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0001',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>418,
//         'identificador'=>'0010',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.0010',
//         'ce_identify'=>'Brava Telecom (Via Vivo)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0010',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>419,
//         'identificador'=>'0113',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.0113',
//         'ce_identify'=>'BRDIGITAL',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0113',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>420,
//         'identificador'=>'0125',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.0125',
//         'ce_identify'=>'Brasil Digital - CDNs',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0125',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>421,
//         'identificador'=>'1044',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1044',
//         'ce_identify'=>'DPE-RO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1044',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>422,
//         'identificador'=>'1047',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1047',
//         'ce_identify'=>'Brasil Digital - Circuito IDARON',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1047',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>423,
//         'identificador'=>'1051',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1051',
//         'ce_identify'=>'TV Allamanda – PVO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1051',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>424,
//         'identificador'=>'1055',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1055',
//         'ce_identify'=>'Brasil Distribuidora - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1055',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>425,
//         'identificador'=>'1066',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1066',
//         'ce_identify'=>'Brasil Digital – Dom Pedro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1066',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>426,
//         'identificador'=>'1077',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1077',
//         'ce_identify'=>'Fiero – Nova Mutum – Genipapo',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1077',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>427,
//         'identificador'=>'1078',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1078',
//         'ce_identify'=>'Fiero – Porto Velho – 7 Setembro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1078',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>428,
//         'identificador'=>'1079',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1079',
//         'ce_identify'=>'Fiero – Porto Velho – Rio de Janeiro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1079',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>429,
//         'identificador'=>'1080',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1080',
//         'ce_identify'=>'Fiero – Porto Velho – Oreste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1080',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>430,
//         'identificador'=>'1081',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1081',
//         'ce_identify'=>'Fiero – Porto Velho – Rui Barbosa',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1081',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>431,
//         'identificador'=>'1082',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1082',
//         'ce_identify'=>'Sesdec - Porto Velho - Campos Sales_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1082',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>432,
//         'identificador'=>'1083',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1083',
//         'ce_identify'=>'Sesdec - Porto Velho - Calama_DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1083',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>433,
//         'identificador'=>'1084',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1084',
//         'ce_identify'=>'Sesdec - Porto Velho - R. Cantuaria_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1084',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>434,
//         'identificador'=>'1085',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1085',
//         'ce_identify'=>'Sesdec - Porto Velho - Rio Madeira_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1085',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>435,
//         'identificador'=>'1086',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1086',
//         'ce_identify'=>'Sesdec - Porto Velho - Tiradentes_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1086',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>436,
//         'identificador'=>'1087',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1087',
//         'ce_identify'=>'Sesdec - Porto Velho - A. Lacerda_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1087',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>437,
//         'identificador'=>'1136',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1136',
//         'ce_identify'=>'Sesdec - Porto Velho - Imigrantes_GETEC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1136',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>438,
//         'identificador'=>'1139',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1139',
//         'ce_identify'=>'Sesdec - Porto Velho - Benjamin Constant_DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1139',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>439,
//         'identificador'=>'1140',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1140',
//         'ce_identify'=>'Sesdec - Porto Velho - Benjamin Constant_DEI/GETEC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1140',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>440,
//         'identificador'=>'1155',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1155',
//         'ce_identify'=>'Fiero - Porto Velho - Matrincha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1155',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>441,
//         'identificador'=>'1156',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1156',
//         'ce_identify'=>'Ozonio-Suframa - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1156',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>442,
//         'identificador'=>'1162',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1162',
//         'ce_identify'=>'Sesdec - Dist. União Bandeirantes - Brasilia_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1162',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>443,
//         'identificador'=>'1211',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1211',
//         'ce_identify'=>'TRT14 - Porto Velho_Almirante Barroso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1211',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>444,
//         'identificador'=>'1222',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1222',
//         'ce_identify'=>'SEDAM - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1222',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>445,
//         'identificador'=>'1235',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1235',
//         'ce_identify'=>'Coimbra - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1235',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>446,
//         'identificador'=>'1237',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1237',
//         'ce_identify'=>'Rede Record - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1237',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>447,
//         'identificador'=>'1289',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1289',
//         'ce_identify'=>'Vivo - Distrito de Jaci-Paraná',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1289',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>448,
//         'identificador'=>'1290',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1290',
//         'ce_identify'=>'Vivo - Polo Jirau',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1290',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>449,
//         'identificador'=>'1291',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1291',
//         'ce_identify'=>'Vivo - Abunã',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1291',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>450,
//         'identificador'=>'1295',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1295',
//         'ce_identify'=>'Vivo - Agrupamento RMM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1295',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>451,
//         'identificador'=>'1296',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1296',
//         'ce_identify'=>'Vivo - Agrupamento 5',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1296',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>452,
//         'identificador'=>'1297',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1297',
//         'ce_identify'=>'Vivo - Agrupamento JIP',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1297',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>453,
//         'identificador'=>'1298',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1298',
//         'ce_identify'=>'Vivo - Agrupamento JAW',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1298',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>454,
//         'identificador'=>'1299',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1299',
//         'ce_identify'=>'Vivo - Candeias do Jamari',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1299',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>455,
//         'identificador'=>'1300',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1300',
//         'ce_identify'=>'Vivo - Agrupamento VHA',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1300',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>456,
//         'identificador'=>'1301',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1301',
//         'ce_identify'=>'Vivo - Agrupamento PBW',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1301',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>457,
//         'identificador'=>'1302',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1302',
//         'ce_identify'=>'Vivo - Agrupamento CWL',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1302',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>458,
//         'identificador'=>'1303',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1303',
//         'ce_identify'=>'Vivo - Ouro Preto do Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1303',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>459,
//         'identificador'=>'1304',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1304',
//         'ce_identify'=>'Vivo - Agrupamento PVO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1304',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>460,
//         'identificador'=>'1305',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1305',
//         'ce_identify'=>'Vivo - Agrupamento NVME',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1305',
//         'ativo_id'=>35
//         ] );

                    

//         Lmc::create( [
//         'id'=>461,
//         'identificador'=>'1318',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1318',
//         'ce_identify'=>'Eucredi - Porto - Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1318',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>462,
//         'identificador'=>'1334',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1334',
//         'ce_identify'=>'Telebras - (DataPrev) - Porto-Velho - Estação EletroNorte',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1334',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>463,
//         'identificador'=>'1365',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1365',
//         'ce_identify'=>'SEJUS - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1365',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>464,
//         'identificador'=>'1385',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1385',
//         'ce_identify'=>'RNP - Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1385',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>465,
//         'identificador'=>'1416',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1416',
//         'ce_identify'=>'CrediSIS <= Porto Velho - CrediAri - [AG-72]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1416',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>466,
//         'identificador'=>'1421',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1421',
//         'ce_identify'=>'SEDAM - Porto Velho - Av. Presidente Dutra (Pio XII x Padre Angelo)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1421',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>467,
//         'identificador'=>'1427',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1427',
//         'ce_identify'=>'Refrigerantes Dydyo - Porto Velho - R. Raimundo Cantuária, 7761',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1427',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>468,
//         'identificador'=>'1432',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1432',
//         'ce_identify'=>'FEASE => Porto Velho - Av Farquar, 2986',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1432',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>469,
//         'identificador'=>'1433',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1433',
//         'ce_identify'=>'IDARON => Porto Velho - CONCENTRADOR - Av Farquar, 2986',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1433',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>470,
//         'identificador'=>'1458',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1458',
//         'ce_identify'=>'DETRAN => Porto Velho - SEDE - R. Dr. Adelino, 4477',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1458',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>471,
//         'identificador'=>'1459',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1459',
//         'ce_identify'=>'DETRAN => Porto Velho - Cometran - Av. Imigrantes, 4500',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1459',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>472,
//         'identificador'=>'1460',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1460',
//         'ce_identify'=>'DETRAN => Porto Velho - Galpão - R. Benedito de Souza - 4543 - Pátio 2',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1460',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>473,
//         'identificador'=>'1461',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1461',
//         'ce_identify'=>'DETRAN => Porto Velho - Pátio de Veículos - Estrada da Penal - Pátio 1',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1461',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>474,
//         'identificador'=>'1462',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1462',
//         'ce_identify'=>'DETRAN => Porto Velho - Posto de Serviço Zona Sul - R. Cravo da Índia',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1462',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>475,
//         'identificador'=>'1463',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1463',
//         'ce_identify'=>'DETRAN => Porto Velho - Posto de Serviço Zona Leste - Av. Mamoré',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1463',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>476,
//         'identificador'=>'1464',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1464',
//         'ce_identify'=>'DETRAN => Porto Velho - Escola Pública - Av. 7 Pinheiro Machado',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1464',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>477,
//         'identificador'=>'1465',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1465',
//         'ce_identify'=>'DETRAN => Porto Velho - Shopping Cidadão - Av. 7 De Setembro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1465',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>478,
//         'identificador'=>'1466',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1466',
//         'ce_identify'=>'DETRAN => Porto Velho - SEFIN-SEDE CTI - Av. Presid. Dutra',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1466',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>479,
//         'identificador'=>'1552',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1552',
//         'ce_identify'=>'Sabenauto (Tigrão Veículos) => Porto Velho - Concentrador',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1552',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>480,
//         'identificador'=>'1564',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1564',
//         'ce_identify'=>'FIOS => Receita Federal <= Porto Velho - Concentrador',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1564',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>481,
//         'identificador'=>'1565',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1565',
//         'ce_identify'=>'FIOS => Receita Federal <= Porto Velho - Jose Adelino da Silva',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1565',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>482,
//         'identificador'=>'1566',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1566',
//         'ce_identify'=>'FIOS => Receita Federal <= Porto Velho - Benjamin Constant',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1566',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>483,
//         'identificador'=>'1567',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1567',
//         'ce_identify'=>'FIOS => Receita Federal <= Porto Velho - Rogerio Webber',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1567',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>484,
//         'identificador'=>'1580',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1580',
//         'ce_identify'=>'Olé TV - Servidor PVO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1580',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>485,
//         'identificador'=>'1590',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1590',
//         'ce_identify'=>'BRDIGITAL - Subestação_Porto Velho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1590',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>486,
//         'identificador'=>'1592',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1592',
//         'ce_identify'=>'SICTV => Tv Candelaria PVO',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1592',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>487,
//         'identificador'=>'1594',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1594',
//         'ce_identify'=>'CREA <= Porto Velho - CONCENTRADOR',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1594',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>488,
//         'identificador'=>'1614',
//         'spid'=>'10',
//         'cidade_id'=>36,
//         'nome'=>'LMC.10.PVO.1614',
//         'ce_identify'=>'Brasil Digital <= PVO to CDEY',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1614',
//         'ativo_id'=>7
//         ] );

                    

//         Lmc::create( [
//         'id'=>489,
//         'identificador'=>'0108',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.0108',
//         'ce_identify'=>'UZZY',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0108',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>490,
//         'identificador'=>'1058',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1058',
//         'ce_identify'=>'Sicoob Centro Presidente Medice',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1058',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>491,
//         'identificador'=>'1146',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1146',
//         'ce_identify'=>'Sesdec - Presidente Medice - Macapa_DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1146',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>492,
//         'identificador'=>'1273',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1273',
//         'ce_identify'=>'Vivo - Presidente Médici',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1273',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>493,
//         'identificador'=>'1330',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1330',
//         'ce_identify'=>'Telebras - (DataPrev) - Presidente Médici',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1330',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>494,
//         'identificador'=>'1366',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1366',
//         'ce_identify'=>'SEJUS - Presidente Médici',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1366',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>495,
//         'identificador'=>'1401',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1401',
//         'ce_identify'=>'CrediSIS <= Presidente Médice - JiCredi - [AG-21]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1401',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>496,
//         'identificador'=>'1508',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1508',
//         'ce_identify'=>'DETRAN => Presidente Médici - Av. Dom Bosco, 1563',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1508',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>497,
//         'identificador'=>'1541',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1541',
//         'ce_identify'=>'RNP => UNIR - Presidente Medice',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1541',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>498,
//         'identificador'=>'1551',
//         'spid'=>'10',
//         'cidade_id'=>37,
//         'nome'=>'LMC.10.PYM.1551',
//         'ce_identify'=>'Sesdec - Presidente Médici - Valdemar Fernandes_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1551',
//         'ativo_id'=>22
//         ] );

                    

//         Lmc::create( [
//         'id'=>501,
//         'identificador'=>'1534',
//         'spid'=>'10',
//         'cidade_id'=>39,
//         'nome'=>'LMC.10.RCR.1534',
//         'ce_identify'=>'DETRAN => Rio Crespo - Av Afonso Gago',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1534',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>503,
//         'identificador'=>'0101',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.0101',
//         'ce_identify'=>'SISTEM TELECOM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0101',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>504,
//         'identificador'=>'1019',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1019',
//         'ce_identify'=>'Sistem - Malha',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1019',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>505,
//         'identificador'=>'1033',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1033',
//         'ce_identify'=>'Cliente Infolink',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1033',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>506,
//         'identificador'=>'1061',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1061',
//         'ce_identify'=>'Mazzuti – Rolim',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1061',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>507,
//         'identificador'=>'1069',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1069',
//         'ce_identify'=>'Fiero – Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1069',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>508,
//         'identificador'=>'1110',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1110',
//         'ce_identify'=>'Sesdec - Rolim de Moura - Norte Sul_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1110',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>509,
//         'identificador'=>'1112',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1112',
//         'ce_identify'=>'Sesdec - Rolim de Moura - Rio Madeira_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1112',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>510,
//         'identificador'=>'1152',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1152',
//         'ce_identify'=>'Sesdec - Rolim de Moura - Jamari5426_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1152',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>511,
//         'identificador'=>'1161',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1161',
//         'ce_identify'=>'Sesdec - Rolim de Moura - Corumbiara_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1161',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>512,
//         'identificador'=>'1181',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1181',
//         'ce_identify'=>'Sesdec - Rolim de Moura - Jamari5416_DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1181',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>513,
//         'identificador'=>'1192',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1192',
//         'ce_identify'=>'Coimbra - Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1192',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>514,
//         'identificador'=>'1212',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1212',
//         'ce_identify'=>'TRT14 - Rolim de Moura_Jaguaribe',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1212',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>515,
//         'identificador'=>'1225',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1225',
//         'ce_identify'=>'SEDAM - Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1225',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>516,
//         'identificador'=>'1263',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1263',
//         'ce_identify'=>'Vivo - Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1263',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>517,
//         'identificador'=>'1331',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1331',
//         'ce_identify'=>'Telebras - (DataPrev) - Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1331',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>518,
//         'identificador'=>'1344',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1344',
//         'ce_identify'=>'SEJUS - Rolim de Moura_R. BR Melgaco_03507',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1344',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>519,
//         'identificador'=>'1345',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1345',
//         'ce_identify'=>'SEJUS - Rolim de Moura_AV Macapá - 05791- São Cristovão',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1345',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>520,
//         'identificador'=>'1346',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1346',
//         'ce_identify'=>'SEJUS - Rolim de Moura_AV. H 06399 - Cidade Alta',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1346',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>521,
//         'identificador'=>'1413',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1413',
//         'ce_identify'=>'CrediSIS <= Rolim de Moura - Sudoeste - [AG-60]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1413',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>522,
//         'identificador'=>'1430',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1430',
//         'ce_identify'=>'FEASE => Rolim de Moura - R. Rio Madeira, 5757',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1430',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>523,
//         'identificador'=>'1494',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1494',
//         'ce_identify'=>'DETRAN => Rolim de Moura - R. Afonso Pena, 4349',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1494',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>524,
//         'identificador'=>'1496',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1496',
//         'ce_identify'=>'DETRAN => Rolim de Moura - Shopping Cidadão - Av. 25 de Agosto, 5115',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1496',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>525,
//         'identificador'=>'1602',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1602',
//         'ce_identify'=>'CREA <= Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1602',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>526,
//         'identificador'=>'1605',
//         'spid'=>'10',
//         'cidade_id'=>40,
//         'nome'=>'LMC.10.RMM.1605',
//         'ce_identify'=>'TV ALLAMANDA - Rolim de Moura',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1605',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>533,
//         'identificador'=>'1151',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1151',
//         'ce_identify'=>'Sesdec - São Francisco - Brasil_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1151',
//         'ativo_id'=>47
//         ] );

                    

//         Lmc::create( [
//         'id'=>534,
//         'identificador'=>'1185',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1185',
//         'ce_identify'=>'Sesdec - São Francisco - Brasil_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1185',
//         'ativo_id'=>47
//         ] );

                    

//         Lmc::create( [
//         'id'=>535,
//         'identificador'=>'1240',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1240',
//         'ce_identify'=>'Portal Telecom',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1240',
//         'ativo_id'=>45
//         ] );

                    

//         Lmc::create( [
//         'id'=>536,
//         'identificador'=>'1372',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1372',
//         'ce_identify'=>'SEJUS - São Francisco do Guaporé',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1372',
//         'ativo_id'=>45
//         ] );

                    

//         Lmc::create( [
//         'id'=>532,
//         'identificador'=>'1390',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1390',
//         'ce_identify'=>'VIDEOSAT',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1390',
//         'ativo_id'=>45
//         ] );

                    

//         Lmc::create( [
//         'id'=>537,
//         'identificador'=>'1402',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1402',
//         'ce_identify'=>'CrediSIS <= São Francisco - JiCredi - [AG-29]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1402',
//         'ativo_id'=>45
//         ] );

                    

//         Lmc::create( [
//         'id'=>538,
//         'identificador'=>'1515',
//         'spid'=>'10',
//         'cidade_id'=>53,
//         'nome'=>'LMC.10.SFYO.1515',
//         'ce_identify'=>'DETRAN => São Francisco do Guaporé - R. Macapá',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1515',
//         'ativo_id'=>45
//         ] );

                    

//         Lmc::create( [
//         'id'=>539,
//         'identificador'=>'1187',
//         'spid'=>'10',
//         'cidade_id'=>41,
//         'nome'=>'LMC.10.SKZ.1187',
//         'ce_identify'=>'Sesdec - Santa Luzia - Tancredo A. Neves_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1187',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>540,
//         'identificador'=>'1265',
//         'spid'=>'10',
//         'cidade_id'=>41,
//         'nome'=>'LMC.10.SKZ.1265',
//         'ce_identify'=>'Vivo - Santa Luzia D Oeste',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1265',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>541,
//         'identificador'=>'1348',
//         'spid'=>'10',
//         'cidade_id'=>41,
//         'nome'=>'LMC.10.SKZ.1348',
//         'ce_identify'=>'SEJUS - Santa Luzia do Oeste_Av. Tancredo Neves - 02841',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1348',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>542,
//         'identificador'=>'1497',
//         'spid'=>'10',
//         'cidade_id'=>41,
//         'nome'=>'LMC.10.SKZ.1497',
//         'ce_identify'=>'DETRAN => Santa Luzia - Av. Tancredo Neves, 3192',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1497',
//         'ativo_id'=>38
//         ] );

                    

//         Lmc::create( [
//         'id'=>543,
//         'identificador'=>'1153',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1153',
//         'ce_identify'=>'Sesdec - São Miguel - Pres. Vargas_PC/DEI',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1153',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>544,
//         'identificador'=>'1213',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1213',
//         'ce_identify'=>'TRT14 - São Miguel_16 de Junho',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1213',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>545,
//         'identificador'=>'1267',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1267',
//         'ce_identify'=>'Vivo - São Miguel do Guaporé',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1267',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>546,
//         'identificador'=>'1311',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1311',
//         'ce_identify'=>'Pelikan Net - São Miguel',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1311',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>547,
//         'identificador'=>'1332',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1332',
//         'ce_identify'=>'Telebras - (DataPrev) - São Miguel do Guaporé',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1332',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>548,
//         'identificador'=>'1373',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1373',
//         'ce_identify'=>'SEJUS - São Miguel do Guaporé',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1373',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>549,
//         'identificador'=>'1403',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1403',
//         'ce_identify'=>'CrediSIS <= São Miguel - JiCredi - [AG-26]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1403',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>550,
//         'identificador'=>'1516',
//         'spid'=>'10',
//         'cidade_id'=>44,
//         'nome'=>'LMC.10.SMGE.1516',
//         'ce_identify'=>'DETRAN => São Miguel do Guaporé - Av. Juscelino K.',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1516',
//         'ativo_id'=>46
//         ] );

                    

//         Lmc::create( [
//         'id'=>551,
//         'identificador'=>'1501',
//         'spid'=>'10',
//         'cidade_id'=>42,
//         'nome'=>'LMC.10.SOFP.1501',
//         'ce_identify'=>'DETRAN => São Felipe do Oeste - Av. Tancredo Neves, 9999',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1501',
//         'ativo_id'=>20
//         ] );

                    

//         Lmc::create( [
//         'id'=>552,
//         'identificador'=>'1562',
//         'spid'=>'10',
//         'cidade_id'=>54,
//         'nome'=>'LMC.10.SPO.1562',
//         'ce_identify'=>'NetWay (Sitelbra)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1562',
//         'ativo_id'=>13
//         ] );

                    

//         Lmc::create( [
//         'id'=>553,
//         'identificador'=>'0112',
//         'spid'=>'10',
//         'cidade_id'=>45,
//         'nome'=>'LMC.10.SRGS.0112',
//         'ce_identify'=>'VIDEOSAT',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0112',
//         'ativo_id'=>8
//         ] );

                    

//         Lmc::create( [
//         'id'=>554,
//         'identificador'=>'1134',
//         'spid'=>'10',
//         'cidade_id'=>45,
//         'nome'=>'LMC.10.SRGS.1134',
//         'ce_identify'=>'Sesdec - Seringueiras - Int. Nacional_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1134',
//         'ativo_id'=>47
//         ] );

                    

//         Lmc::create( [
//         'id'=>555,
//         'identificador'=>'1404',
//         'spid'=>'10',
//         'cidade_id'=>45,
//         'nome'=>'LMC.10.SRGS.1404',
//         'ce_identify'=>'CrediSIS <= Seringueiras - JiCredi - [AG-27]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1404',
//         'ativo_id'=>47
//         ] );

                    

//         Lmc::create( [
//         'id'=>556,
//         'identificador'=>'1517',
//         'spid'=>'10',
//         'cidade_id'=>45,
//         'nome'=>'LMC.10.SRGS.1517',
//         'ce_identify'=>'DETRAN => Seringueiras - Av. Alcides F.',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1517',
//         'ativo_id'=>47
//         ] );

                    

//         Lmc::create( [
//         'id'=>561,
//         'identificador'=>'0124',
//         'spid'=>'10',
//         'cidade_id'=>47,
//         'nome'=>'LMC.10.TORM.0124',
//         'ce_identify'=>'WEBDA - Theobroma',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0124',
//         'ativo_id'=>42
//         ] );

                    

//         Lmc::create( [
//         'id'=>562,
//         'identificador'=>'1312',
//         'spid'=>'10',
//         'cidade_id'=>47,
//         'nome'=>'LMC.10.TORM.1312',
//         'ce_identify'=>'PROINFO - Theobroma',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1312',
//         'ativo_id'=>42
//         ] );

                    

//         Lmc::create( [
//         'id'=>563,
//         'identificador'=>'1520',
//         'spid'=>'10',
//         'cidade_id'=>47,
//         'nome'=>'LMC.10.TORM.1520',
//         'ce_identify'=>'DETRAN => Theobrama - Av. Senador Olavo',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1520',
//         'ativo_id'=>42
//         ] );

                    

//         Lmc::create( [
//         'id'=>565,
//         'identificador'=>'1405',
//         'spid'=>'10',
//         'cidade_id'=>46,
//         'nome'=>'LMC.10.TXPP.1405',
//         'ce_identify'=>'CrediSIS <= Teixeirópolis - JiCredi - [AG-30]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1405',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>566,
//         'identificador'=>'1505',
//         'spid'=>'10',
//         'cidade_id'=>46,
//         'nome'=>'LMC.10.TXPP.1505',
//         'ce_identify'=>'DETRAN => Teixeirópolis - R. Afonso Pena, 1192',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1505',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>569,
//         'identificador'=>'1186',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1186',
//         'ce_identify'=>'Sesdec - Urupá - Itauba_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1186',
//         'ativo_id'=>25
//         ] );

                    

//         Lmc::create( [
//         'id'=>570,
//         'identificador'=>'1218',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1218',
//         'ce_identify'=>'E. G. CHAGAS EIRELI - VIP NET',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1218',
//         'ativo_id'=>25
//         ] );

                    

//         Lmc::create( [
//         'id'=>571,
//         'identificador'=>'1274',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1274',
//         'ce_identify'=>'Vivo - Urupá',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1274',
//         'ativo_id'=>25
//         ] );

                    

//         Lmc::create( [
//         'id'=>572,
//         'identificador'=>'1407',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1407',
//         'ce_identify'=>'CrediSIS <= Urupá - JiCredi - [AG-28]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1407',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>573,
//         'identificador'=>'1507',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1507',
//         'ce_identify'=>'DETRAN => Urupá - R. Maracatiara, 3313',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1507',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>574,
//         'identificador'=>'1575',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1575',
//         'ce_identify'=>'Urupá <=> Ouro Preto',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1575',
//         'ativo_id'=>23
//         ] );

                    

//         Lmc::create( [
//         'id'=>575,
//         'identificador'=>'1589',
//         'spid'=>'10',
//         'cidade_id'=>48,
//         'nome'=>'LMC.10.URUW.1589',
//         'ce_identify'=>'PortWeb => Nova União',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1589',
//         'ativo_id'=>25
//         ] );

                    

//         Lmc::create( [
//         'id'=>579,
//         'identificador'=>'1215',
//         'spid'=>'10',
//         'cidade_id'=>50,
//         'nome'=>'LMC.10.VALP.1215',
//         'ce_identify'=>'CENTRAL NET - Vale do Paraiso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1215',
//         'ativo_id'=>44
//         ] );

                    

//         Lmc::create( [
//         'id'=>580,
//         'identificador'=>'1406',
//         'spid'=>'10',
//         'cidade_id'=>50,
//         'nome'=>'LMC.10.VALP.1406',
//         'ce_identify'=>'CrediSIS <= Vale do Paraiso - JiCredi - [AG-31]',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1406',
//         'ativo_id'=>44
//         ] );

                    

//         Lmc::create( [
//         'id'=>581,
//         'identificador'=>'1487',
//         'spid'=>'10',
//         'cidade_id'=>50,
//         'nome'=>'LMC.10.VALP.1487',
//         'ce_identify'=>'DETRAN => Vale do Paraíso - Av Paraíso, 2655',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1487',
//         'ativo_id'=>44
//         ] );

                    

//         Lmc::create( [
//         'id'=>578,
//         'identificador'=>'1560.2',
//         'spid'=>'10',
//         'cidade_id'=>50,
//         'nome'=>'LMC.10.VALP.1560.2',
//         'ce_identify'=>'GigaNet - Malha - Vale do Paraíso',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1560.2',
//         'ativo_id'=>44
//         ] );

                    

//         Lmc::create( [
//         'id'=>583,
//         'identificador'=>'0114',
//         'spid'=>'10',
//         'cidade_id'=>49,
//         'nome'=>'LMC.10.VEAI.0114',
//         'ce_identify'=>'WebDA - Malha (Anari)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0114',
//         'ativo_id'=>43
//         ] );

                    

//         Lmc::create( [
//         'id'=>584,
//         'identificador'=>'1160',
//         'spid'=>'10',
//         'cidade_id'=>49,
//         'nome'=>'LMC.10.VEAI.1160',
//         'ce_identify'=>'Sesdec - Vale do Anari - Pres. Dutra_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1160',
//         'ativo_id'=>43
//         ] );

                    

//         Lmc::create( [
//         'id'=>585,
//         'identificador'=>'1521',
//         'spid'=>'10',
//         'cidade_id'=>49,
//         'nome'=>'LMC.10.VEAI.1521',
//         'ce_identify'=>'DETRAN => Vale do Anari - Av. Vereador Acir José',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1521',
//         'ativo_id'=>43
//         ] );

                    

//         Lmc::create( [
//         'id'=>586,
//         'identificador'=>'0116',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.0116',
//         'ce_identify'=>'VIA FIBRA',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0116',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>587,
//         'identificador'=>'0118',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.0118',
//         'ce_identify'=>'Netway - Malha Colorado (Via VHA)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0118',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>588,
//         'identificador'=>'0119',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.0119',
//         'ce_identify'=>'Netway - Malha Colorado (Via UHA)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0119',
//         'ativo_id'=>29
//         ] );

                    

//         Lmc::create( [
//         'id'=>589,
//         'identificador'=>'0122',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.0122',
//         'ce_identify'=>'Malha Netway - VHA',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.0122',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>590,
//         'identificador'=>'1024',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1024',
//         'ce_identify'=>'Centranet - Malha (Usina Ávila)',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1024',
//         'ativo_id'=>29
//         ] );

                    

//         Lmc::create( [
//         'id'=>591,
//         'identificador'=>'1034',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1034',
//         'ce_identify'=>'ViaFibra - Site São Lourenço',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1034',
//         'ativo_id'=>29
//         ] );

                    

//         Lmc::create( [
//         'id'=>592,
//         'identificador'=>'1035',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1035',
//         'ce_identify'=>'ViaFibra - Cliente Hotel Ávila',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1035',
//         'ativo_id'=>29
//         ] );

                    

//         Lmc::create( [
//         'id'=>593,
//         'identificador'=>'1062',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1062',
//         'ce_identify'=>'Mazzuti – Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1062',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>594,
//         'identificador'=>'1070',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1070',
//         'ce_identify'=>'Fiero – Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1070',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>595,
//         'identificador'=>'1111',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1111',
//         'ce_identify'=>'Sesdec - Vilhena - Tirandentes_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1111',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>596,
//         'identificador'=>'1113',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1113',
//         'ce_identify'=>'Sesdec - Vilhena - Luiz Maziero_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1113',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>597,
//         'identificador'=>'1114',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1114',
//         'ce_identify'=>'Sesdec - Vilhena - Parana_PC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1114',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>598,
//         'identificador'=>'1115',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1115',
//         'ce_identify'=>'Sesdec - Vilhena - P. Diniz da Costa_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1115',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>599,
//         'identificador'=>'1116',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1116',
//         'ce_identify'=>'Sesdec - Vilhena - Ricardo Franco_CBM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1116',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>600,
//         'identificador'=>'1157',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1157',
//         'ce_identify'=>'Ozonio-Suframa - Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1157',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>601,
//         'identificador'=>'1200',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1200',
//         'ce_identify'=>'Sesdec - Vilhena - Tiradentes_GETEC',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1200',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>602,
//         'identificador'=>'1214',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1214',
//         'ce_identify'=>'TRT14 - Vilhena_Rony de Castro Pereira',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1214',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>603,
//         'identificador'=>'1220',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1220',
//         'ce_identify'=>'Sesdec - Cerejeiras - Panama_PM',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1220',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>604,
//         'identificador'=>'1233',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1233',
//         'ce_identify'=>'SEDAM - Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1233',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>605,
//         'identificador'=>'1283',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1283',
//         'ce_identify'=>'Vivo - Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1283',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>606,
//         'identificador'=>'1316',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1316',
//         'ce_identify'=>'IG - Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1316',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>607,
//         'identificador'=>'1333',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1333',
//         'ce_identify'=>'Telebras - (DataPrev) - Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1333',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>608,
//         'identificador'=>'1359',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1359',
//         'ce_identify'=>'SEJUS - Vilhena - Cap Castro',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1359',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>609,
//         'identificador'=>'1360',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1360',
//         'ce_identify'=>'SEJUS - Vilhena - Gonçalves Dias',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1360',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>610,
//         'identificador'=>'1361',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1361',
//         'ce_identify'=>'SEJUS - Vilhena - Rodovia BR 364',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1361',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>611,
//         'identificador'=>'1362',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1362',
//         'ce_identify'=>'SEJUS - Vilhena - Rosalinda a Marangoni',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1362',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>612,
//         'identificador'=>'1431',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1431',
//         'ce_identify'=>'FEASE => Vilhena - Av. Capitão Castro, 2081',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1431',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>613,
//         'identificador'=>'1477',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1477',
//         'ce_identify'=>'DETRAN => Vilhena - Av. Celso Mazzuti, 12404',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1477',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>614,
//         'identificador'=>'1572',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1572',
//         'ce_identify'=>'FIOS => Receita Federal <= Vilhena - Av. Sabino Bezerra de Queiroz',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1572',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>615,
//         'identificador'=>'1573',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1573',
//         'ce_identify'=>'FIOS => Receita Federal <= Vilhena - Avenida Marechal Rondon',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1573',
//         'ativo_id'=>30
//         ] );

                    

//         Lmc::create( [
//         'id'=>616,
//         'identificador'=>'1603',
//         'spid'=>'10',
//         'cidade_id'=>51,
//         'nome'=>'LMC.10.VHA.1603',
//         'ce_identify'=>'CREA <= Vilhena',
//         'vlan_gerencia'=>'300',
//         'created_at'=>'2021-06-03 18:08:14',
//         'interface'=>'subinterface-qinq',
//         'lmce'=>'LMC.10.1603',
//         'ativo_id'=>30
//         ] );
//     }
// }
