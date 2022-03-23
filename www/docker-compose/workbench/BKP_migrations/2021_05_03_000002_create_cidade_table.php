<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cidade';

    /**
     * Run the migrations.
     * @table cidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla', 6);
            $table->integer('id');
            $table->integer('ultima_milha_id');
            $table->unique(["sigla"], 'sigla_UNIQUE');
            $table->index(["id"], 'fk_cidade_estado1_idx');
            $table->index(["ultima_milha_id"], 'fk_cidade_ultima_milha1_idx');
            // $table->foreign('id', 'fk_cidade_estado1_idx')
            //     ->references('id')->on('estado')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
            // $table->foreign('ultima_milha_id', 'fk_cidade_ultima_milha1_idx')
            //     ->references('id')->on('ultima_milha')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
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
