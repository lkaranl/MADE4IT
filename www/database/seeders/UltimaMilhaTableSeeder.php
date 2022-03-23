<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UltimaMilha;

class UltimaMilhaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      UltimaMilha::create([
        'id'      => '1',
        'fantasia'     => 'ONDA ÁGIL',
        'razao_social'  => 'R. JOSE DA SILVA E CIA LTDA',
        'cnpj'      => '84.751.411/0004-51',
        'telefone'      => '(69)3422-1298',
        'cep'     => '78390-000',
        'endereco'  => 'Avenida Marechal Rondon, 1770',
        'email'      => 'ondaagil@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '2',
        'fantasia'     => 'NETWAY',
        'razao_social'  => 'NETWAY INFORMÁTICA LTDA',
        'cnpj'      => '85.371.631/0001-70',
        'telefone'      => '(69)3441-2001',
        'cep'     => '76962-186',
        'endereco'  => 'R. Niterói, 1067 - Novo Cacoal, Cacoal - RO',
        'email'      => 'netway@gmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '3',
        'fantasia'     => 'BRASIL DIGITAL TELECOM',
        'razao_social'  => 'BRASIL DIGITAL SERVICOS DE INFORMATICA E COMERCIO LTDA',
        'cnpj'      => '14.629.705/0001-87',
        'telefone'      => '(69)3441-2001',
        'cep'     => '76804-027',
        'endereco'  => 'RUA DOM PEDRO II, 2669 - São Cristovão, Porto Velho - RO',
        'email'      => 'brdigital@gmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '4',
        'fantasia'     => 'CLICKNET TELECOMUNICACOES',
        'razao_social'  => 'CLICKNET TELECOMUNICACOES PROVEDOR DE INTERNET LTDA',
        'cnpj'      => '16.911.389/0001-67',
        'telefone'      => '(69)3441-6060',
        'cep'     => '76962-247',
        'endereco'  => 'Av. Belo Horizonte, 3781 - Novo Cacoal, Cacoal - RO',
        'email'      => 'click@gmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '5',
        'fantasia'     => 'ATUAL TELECOM',
        'razao_social'  => 'ATUAL TELECOM PROVEDOR DE INTERNET LTDA',
        'cnpj'      => '39.481.006/0001-63',
        'telefone'      => '(69)3526-1067',
        'cep'     => '76897-890',
        'endereco'  => 'Av. Francisco Vieira de Souza, Jaru - RO',
        'email'      => 'ismaelsantos@portalevolucao.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '6',
        'fantasia'     => 'BUENONET',
        'razao_social'  => 'GR BUENO NET FIBRA SERVICOS DE COMUNICACAO MULTIMIDIA EIRELI',
        'cnpj'      => '36.169.839/0001-03',
        'telefone'      => '(69)8448-6668',
        'cep'     => '76935-000',
        'endereco'  => 'AVENIDA GUAPORE, 3642, CENTRO, SAO FRANCISCO DO GUAPORE - RO',
        'email'      => 'buenonet.sfg@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '7',
        'fantasia'     => 'FUTUR@ NET',
        'razao_social'  => 'F.A.A PROVEDOR LTDA',
        'cnpj'      => '26.133.539/0001-02',
        'telefone'      => '(69)3238-3009',
        'cep'     => '76880-000',
        'endereco'  => 'Avenida Ayrton Senna, 1189, Buritis - RO',
        'email'      => '',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '8',
        'fantasia'     => 'GIGANET PROVEDOR DE INTERNET',
        'razao_social'  => 'SILVEIRA & GONCALVES COMERCIO DE MATERIAIS DE INFORMATICA LTDA',
        'cnpj'      => '07.672.623/0001-50',
        'telefone'      => '(69)3461-5786',
        'cep'     => '76920-000',
        'endereco'  => 'Rua Ana Nery, 0528 - Sala 01 - JARDIM TROPICAL - OURO PRETO DO OESTE - RO',
        'email'      => '',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '9',
        'fantasia'     => 'LINK NET TELECON',
        'razao_social'  => 'LINK NET TELECOMUNICACOES LTDA',
        'cnpj'      => '10.246.104/0001-34',
        'telefone'      => '(69)3236-8140',
        'cep'     => '78.927-000',
        'endereco'  => 'AVENIDA 03 DE DEZEMBRO , SN - PORTO VELHO - RO',
        'email'      => 'financeirolinknet@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '10',
        'fantasia'     => 'MILLENIUM TELECOM',
        'razao_social'  => 'F JEAN SILVA EIRELI',
        'cnpj'      => '05.203.855/0001-33',
        'telefone'      => '(69)3412-3966',
        'cep'     => '76930-000',
        'endereco'  => 'Rua Jose de Alencar, 4906 - CENTRO - ALVORADA D\'OESTE - RO',
        'email'      => 'carimbos10@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '11',
        'fantasia'     => 'NET MAIS TELECOMUNICACOES',
        'razao_social'  => 'NET MAIS SERVICOS DE TELECOMUNICACOES LTDA',
        'cnpj'      => '07.939.517/0001-90',
        'telefone'      => '(69) 3418-3862',
        'cep'     => '76958-000',
        'endereco'  => 'Rua Principe da Beira, 2011-B - CENTRO NOVA BRASILANDIA D\'OESTE - RO',
        'email'      => 'formulacontabilidade@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '12',
        'fantasia'     => 'NET WAY INFORMATICA',
        'razao_social'  => 'NET WAY INFORMATICA LTDA',
        'cnpj'      => '10.563.381/0001-70',
        'telefone'      => '(69) 3451-6665',
        'cep'     => '76.970-000',
        'endereco'  => 'AVENIDA CASTELO BRANCO , 62 - PIMENTA BUENO - RO',
        'email'      => 'comercial@netway.inf.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '13',
        'fantasia'     => 'RIO NET PROVEDOR',
        'razao_social'  => 'J BOSCO DA SILVA & CIA LTDA',
        'cnpj'      => '05.588.747/0001-26',
        'telefone'      => '(69) 3238-2179',
        'cep'     => '76887-000',
        'endereco'  => 'Avenida Principal, Sn, Distrito Rio Branco, Campo Novo De Rondonia, RO',
        'email'      => 'netbox@netspeed.com.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '14',
        'fantasia'     => 'SISTEM TELECOM',
        'razao_social'  => 'SISTEM TELECOMUNICACOES LTDA',
        'cnpj'      => '14.289.396/0001-43',
        'telefone'      => '(69) 3449-3100',
        'cep'     => '76940-000',
        'endereco'  => 'AVENIDA GUAPORE , 4762 - ROLIM DE MOURA - RO',
        'email'      => '',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '15',
        'fantasia'     => 'UZZY TELECOM',
        'razao_social'  => 'UZZY TELECOM COMERCIO DE EQUIPAMENTOS DE INFORMATICA E SERVICOS DE COMUNICACOES EIRELI',
        'cnpj'      => '11.767.980/0001-79',
        'telefone'      => '(69) 3471-3230',
        'cep'     => '76916-000',
        'endereco'  => 'Rua Jose Vidal, 2648 - CENTRO - PRESIDENTE MEDICI - RO',
        'email'      => 'josenilton@uzzy.com.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '16',
        'fantasia'     => 'SATNET INFORMATICA',
        'razao_social'  => 'SILVA & SILVA VIDEOSATNET LTDA',
        'cnpj'      => '10.749.723/0001-41',
        'telefone'      => '(69) 3642-1034',
        'cep'     => '76932-000',
        'endereco'  => 'Rua Sao Miguel, 2370 - CRISTO REI - SAO MIGUEL DO GUAPORE - RO',
        'email'      => '',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '17',
        'fantasia'     => 'WM INFORMATICA',
        'razao_social'  => 'W M INFORMATICA EIRELI',
        'cnpj'      => '29.647.424/0001-24',
        'telefone'      => '(69) 3643-1446',
        'cep'     => '76952-000',
        'endereco'  => 'Avenida Tancredo de Almeida Neves, 3941 - Centro - Alto Alegre dos Parecis',
        'email'      => 'lucas.roque@wminformatica.net.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '18',
        'fantasia'     => 'WORLDNET FIBRA OPTICA/NBS',
        'razao_social'  => 'WORLDNET SERVICOS DE TELECOMUNICACOES EIRELI',
        'cnpj'      => '18.456.569/0001-21',
        'telefone'      => '(69) 99989-6484',
        'cep'     => '76.880-000',
        'endereco'  => 'RUA HELENITA FERREIRA DE SOUZA , 1601 - BURITIS - RO',
        'email'      => 'financeiro@nbstelecom.com.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '19',
        'fantasia'     => 'PORTAL NET',
        'razao_social'  => 'PORTAL NET COMUNICACAO EIRELI',
        'cnpj'      => '27.209.885/0001-90',
        'telefone'      => '(69) 8481-3388',
        'cep'     => '76.974-000',
        'endereco'  => 'Avenida Piaui, 2840, LIBERDADE - ESPIGÃO D\'OESTE - RO',
        'email'      => 'escritorioceplasa@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '20',
        'fantasia'     => 'KM NET TELECOM',
        'razao_social'  => 'JUCILEY DE GREGORI',
        'cnpj'      => '13.059.655/0001-87',
        'telefone'      => '(69) 3251-1688',
        'cep'     => '76846-000',
        'endereco'  => 'Rua Jose Pereira da Costa, 82 - Vista Alegre do Abuna - RO',
        'email'      => 'km_ro_2010@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '21',
        'fantasia'     => 'CENTRANET',
        'razao_social'  => 'H & F SOLUCOES TECNOLOGICAS LTDA. - EPP',
        'cnpj'      => '84.716.059/0001-70',
        'telefone'      => '(69)34812828_',
        'cep'     => '76974-000',
        'endereco'  => 'RUA SURUI',
        'email'      => 'fabianorondonia@gmail.com, hugo@centranet.com.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);
  
      UltimaMilha::create([
        'id'      => '22',
        'fantasia'     => 'CONECTJA LTDA',
        'razao_social'  => 'CONECT JA - CONECTANDO SONHOS',
        'cnpj'      => '29.200.024/0001-76',
        'telefone'      => '(69)32522078',
        'cep'     => '76847-000',
        'endereco'  => 'RUA NILO PECANHA',
        'email'      => '',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '23',
        'fantasia'     => 'EVOLUTION INFORMATICA',
        'razao_social'  => 'ADILSON BENTO FERREIRA',
        'cnpj'      => '20.558.414/0001-48',
        'telefone'      => '(66)81234869',
        'cep'     => '78335-000',
        'endereco'  => 'AV TARUMA',
        'email'      => 'edilsocolniza@gmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '24',
        'fantasia'     => 'HAASE TELECON',
        'razao_social'  => 'SALES & PEREIRA LTDA',
        'cnpj'      => '10.217.619/0001-06',
        'telefone'      => '(69)992751291',
        'cep'     => '76909-476',
        'endereco'  => 'Rua Luiz Matias Carneiro',
        'email'      => 'oms@brturno.com.br',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '25',
        'fantasia'     => 'MEGALYNK TELECOM',
        'razao_social'  => 'MEGALYNK SERVIÇOS DE TELECOMUNICAÇÕES LTDA',
        'cnpj'      => '10.785.904/0001-23',
        'telefone'      => '',
        'cep'     => '76890-000',
        'endereco'  => 'AV BRASIL',
        'email'      => '',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      UltimaMilha::create([
        'id'      => '26',
        'fantasia'     => 'DUMONT HOBBY- MegaNet',
        'razao_social'  => 'D R ROCHA E SERVIÇOS DE COMUNICAÇÃO',
        'cnpj'      => '18.128.296/0001-96',
        'telefone'      => '(69)992960774',
        'cep'     => '76909-514',
        'endereco'  => 'Rua Monteiro Lobato',
        'email'      => 'demersonrocha@hotmail.com',
        'created_at'     => '2021-05-13 23:16:28',
      ]);

      // UltimaMilha::create([
      //   'id'      => '',
      //   'fantasia'     => '',
      //   'razao_social'  => '',
      //   'cnpj'      => '',
      //   'telefone'      => '',
      //   'cep'     => '',
      //   'endereco'  => '',
      //   'email'      => '',
      //   'created_at'     => '2021-05-13 23:16:28',
      // ]);
    }
}
