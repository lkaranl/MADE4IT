<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlaceTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'enlace';

    /**
     * Run the migrations.
     * @table enlace
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_enlace');
            $table->string('mlink', 45);
            $table->string('mestre', 45);
            $table->string('escravo', 45);
            $table->string('faixa', 45);
            $table->string('route_mestre', 45);
            $table->string('route_escravo', 45);
            $table->string('observacoes')->nullable()->default(null);
            $table->integer('ativos_id_ativos1');
            $table->integer('ativos_id_ativos2');

            $table->unique(["faixa"], 'faixa_UNIQUE');

            $table->unique(["mlink"], 'mlink_UNIQUE');

            $table->unique(["route_mestre"], 'route_mestre_UNIQUE');

            $table->unique(["route_escravo"], 'route_escravo_UNIQUE');

            $table->index(["ativos_id_ativos1"], 'fk_enlace_ativos1_idx');

            $table->index(["ativos_id_ativos2"], 'fk_enlace_ativos2_idx');


            $table->foreign('ativos_id_ativos1', 'fk_enlace_ativos1_idx')
                ->references('id_ativos')->on('ativos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ativos_id_ativos2', 'fk_enlace_ativos2_idx')
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
