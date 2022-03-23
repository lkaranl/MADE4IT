<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgenTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    // public $tableName = 'ultima_milha';

    /**
     * Run the migrations.
     * @table ultima_milha

     *
     * @return void
     */
    public function up()
    {
      Schema::create('ultima_milha', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fantasia');
            $table->string('razao_social');
            $table->string('cnpj');
            $table->string('telefone')->nullable()->default(null);
            $table->string('cep')->nullable()->default(null);
            $table->string('endereco')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->unique(["fantasia"], 'nome_UNIQUE');
            $table->unique(["razao_social"], 'razao_social_UNIQUE');
            $table->unique(["cnpj"], 'cnpj_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('estado', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla', 2);
            $table->unique(["nome"], 'nome_UNIQUE');
            $table->unique(["sigla"], 'sigla_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('cidade', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->string('sigla', 6);
            $table->integer('estado_id')->unsigned()->nullable()->default(null);
            $table->unique(["sigla"], 'sigla_UNIQUE');
            $table->index(["estado_id"], 'fk_cidade_estado1_idx');
            $table->foreign('estado_id', 'fk_cidade_estado1_idx')
                ->references('id')->on('estado')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('cidade_has_ultima_milha', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('cidade_id')->unsigned();
            $table->integer('ultima_milha_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidade')
                ->onDelete('cascade');
            $table->foreign('ultima_milha_id')->references('id')->on('ultima_milha')
                ->onDelete('cascade');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('site', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla', 45);
            $table->string('coordenadas')->nullable()->default(null);
            $table->string('faixa_administrativa', 45);
            $table->integer('estado_id')->unsigned();
            $table->integer('cidade_id')->unsigned();
            $table->unique(["nome"], 'nome_UNIQUE');
            $table->unique(["sigla"], 'sigla_UNIQUE');
            $table->index(["estado_id"], 'fk_estado_id1_idx');
            $table->foreign('estado_id', 'fk_estado_id1_idx')
                ->references('id')->on('estado')
                ->onDelete('no action')
                ->onUpdate('no action');   
            $table->index(["cidade_id"], 'fk_cidade_id1_idx');
            $table->foreign('cidade_id', 'fk_cidade_id1_idx')
                ->references('id')->on('cidade')
                ->onDelete('no action')
                ->onUpdate('no action');     
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('funcao', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('terminacao', 15);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('equipamento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('marca', 45)->nullable()->default(null);
            $table->string('modelo', 45);
            $table->string('serial', 45)->nullable()->default(null);
            $table->string('patrimonio', 45)->nullable()->default(null);
            $table->unique(["patrimonio"], 'patrimonio_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('ativo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descricao');
            $table->string('ip_legado', 45)->nullable()->default(null);
            $table->string('ip', 45);
            $table->string('coordenadas')->nullable()->default(null);
            $table->string('nome', 45);
            $table->tinyInteger('ativo');
            $table->string('observacao')->nullable()->default(null);
            $table->integer('funcao_id')->unsigned();
            $table->integer('equipamento_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->unique(["ip"], 'ip_UNIQUE');
            $table->index(["funcao_id"], 'fk_ativo_funcao1_idx');
            $table->index(["equipamento_id"], 'fk_ativo_equipamento1_idx');
            $table->index(["site_id"], 'fk_ativo_site1_idx');
            $table->foreign('funcao_id', 'fk_ativo_funcao1_idx')
                ->references('id')->on('funcao')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('equipamento_id', 'fk_ativo_equipamento1_idx')
                ->references('id')->on('equipamento')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('site_id', 'fk_ativo_site1_idx')
                ->references('id')->on('site')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('enlace', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('mlink', 45);
            $table->string('faixa', 45);
            $table->string('route_mestre', 45);
            $table->string('route_escravo', 45);
            $table->string('observacoes')->nullable()->default(null);
            $table->integer('ativo_mestre')->unsigned();
            $table->integer('ativo_escravo')->unsigned();
            $table->unique(["faixa"], 'faixa_UNIQUE');
            $table->unique(["mlink"], 'mlink_UNIQUE');
            $table->unique(["route_mestre"], 'route_mestre_UNIQUE');
            $table->unique(["route_escravo"], 'route_escravo_UNIQUE');
            $table->index(["ativo_mestre"], 'fk_enlace_mestre_idx');
            $table->index(["ativo_escravo"], 'fk_enlace_escravo_idx');
            $table->foreign('ativo_mestre', 'fk_enlace_mestre_idx')
                ->references('id')->on('ativo')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('ativo_escravo', 'fk_enlace_escravo_idx')
                ->references('id')->on('ativo')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
      });

      Schema::create('cliente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 45);
            $table->unique(["nome"], 'nome_UNIQUE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('svc', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('identificador', 45);
            $table->string('svct', 2);
            $table->integer('banda')->nullable()->default(null);
            $table->string('gsvcid', 45);
            $table->string('informacoes');
            $table->string('in_vlan', 45)->nullable()->default(null);
            $table->string('out_vlan', 45)->nullable()->default(null);
            $table->string('peering_mrouter', 45)->nullable()->default(null);
            $table->string('peering_cliente1', 45)->nullable()->default(null);
            $table->string('peering_cliente2', 45)->nullable()->default(null);
            $table->string('distinguisher', 45)->nullable()->default(null);
            $table->unique(["identificador"], 'identificador_UNIQUE');
            $table->integer('cliente_id')->unsigned();
            $table->index(["cliente_id"], 'fk_svc_cliente1_idx');
            $table->foreign('cliente_id', 'fk_svc_cliente1_idx')
                ->references('id')->on('cliente')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('lmc', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('identificador', 45);
            $table->string('spid', 45);
            $table->string('coordenadas')->nullable()->default(null);
            $table->string('nome');
            $table->string('ce_identify');
            $table->string('faixa_gerencia', 45)->nullable()->default(null);
            $table->string('lmce', 45)->nullable()->default(null);
            $table->string('vlan_gerencia', 45)->nullable()->default(null);
            $table->string('interface', 45);
            $table->integer('cidade_id')->unsigned();
            $table->integer('ativo_id')->unsigned();
            $table->unique(["identificador"], 'identificador_UNIQUE');
            $table->unique(["nome"], 'nome_UNIQUE');
            $table->index(["cidade_id"], 'fk_lmc_cidade1_idx');
            $table->index(["ativo_id"], 'fk_lmc_ativo1_idx');
            $table->foreign('cidade_id', 'fk_lmc_cidade1_idx')
                ->references('id')->on('cidade')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('ativo_id', 'fk_lmc_ativo1_idx')
                ->references('id')->on('ativo')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('lmx', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 45)->nullable()->default(null);
            $table->integer('lmc_id')->unsigned();
            $table->index(["lmc_id"], 'fk_lmx_lmc1_idx');
            $table->foreign('lmc_id', 'fk_lmx_lmc1_idx')
                ->references('id')->on('lmc')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('subinterface', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->integer('lmx_id')->unsigned();
            $table->index(["lmx_id"], 'fk_lmx_subinterface1_idx');
            $table->foreign('lmx_id', 'fk_lmx_subinterface1_idx')
                ->references('id')->on('lmx')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->integer('svc_id')->unsigned()->nullable()->default(null);
            $table->index(["svc_id"], 'fk_svc_subinterface1_idx');
            $table->foreign('svc_id', 'fk_svc_subinterface1_idx')
                ->references('id')->on('svc')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::create('svc_has_lmc', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('svc_id')->unsigned();
            $table->integer('lmc_id')->unsigned();
            $table->foreign('svc_id')->references('id')->on('svc')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->foreign('lmc_id')->references('id')->on('lmc')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
