<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'site';

    /**
     * Run the migrations.
     * @table site
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_site');
            $table->string('nome');
            $table->string('sigla', 45);
            $table->integer('faixa_administrativa_id_faixa_administrativa');

            $table->unique(["nome"], 'nome_UNIQUE');

            $table->unique(["sigla"], 'sigla_UNIQUE');

            $table->index(["faixa_administrativa_id_faixa_administrativa"], 'fk_site_faixa_administrativa1_idx');


            $table->foreign('faixa_administrativa_id_faixa_administrativa', 'fk_site_faixa_administrativa1_idx')
                ->references('id_faixa_administrativa')->on('faixa_administrativa')
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
