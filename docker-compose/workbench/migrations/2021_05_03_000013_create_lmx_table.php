<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmxTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'lmx';

    /**
     * Run the migrations.
     * @table lmx
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_lmx');
            $table->string('nome', 45)->nullable()->default(null);
            $table->string('faixa_gerencia', 45)->nullable()->default(null);
            $table->string('lmce', 45)->nullable()->default(null);
            $table->string('vlan_gerencia', 45)->nullable()->default(null);
            $table->string('observacoes')->nullable()->default(null);
            $table->tinyInteger('controle');
            $table->timestamp('controle_data')->nullable()->default(null);
            $table->timestamp('data_create')->default('0000-00-00 00:00:00');
            $table->timestamp('data_update')->default('0000-00-00 00:00:00');
            $table->integer('lmc_id_lmc');

            $table->index(["lmc_id_lmc"], 'fk_lmx_lmc1_idx');


            $table->foreign('lmc_id_lmc', 'fk_lmx_lmc1_idx')
                ->references('id_lmc')->on('lmc')
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
