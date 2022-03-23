<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmcTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'lmc';

    /**
     * Run the migrations.
     * @table lmc
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_lmc');
            $table->string('identificador', 45);
            $table->string('spid', 45);
            $table->string('nome', 45);
            $table->string('ce_identify');
            $table->integer('cidade_id_cidade');
            $table->integer('cliente_id_cliente');
            $table->integer('ativos_id_ativos');

            $table->unique(["identificador"], 'identificador_UNIQUE');

            $table->unique(["nome"], 'nome_UNIQUE');

            $table->index(["cidade_id_cidade"], 'fk_lmc_cidade1_idx');

            $table->index(["cliente_id_cliente"], 'fk_lmc_cliente1_idx');

            $table->index(["ativos_id_ativos"], 'fk_lmc_ativos1_idx');


            $table->foreign('cidade_id_cidade', 'fk_lmc_cidade1_idx')
                ->references('id_cidade')->on('cidade')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cliente_id_cliente', 'fk_lmc_cliente1_idx')
                ->references('id_cliente')->on('cliente')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ativos_id_ativos', 'fk_lmc_ativos1_idx')
                ->references('id_ativos')->on('ativos')
                ->onDelete('no action')
                ->onUpdate('no action');
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
