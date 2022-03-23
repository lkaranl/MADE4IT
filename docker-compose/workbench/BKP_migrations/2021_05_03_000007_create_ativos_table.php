<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtivosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ativos';

    /**
     * Run the migrations.
     * @table ativos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descricao');
            $table->string('ip_legado', 45)->nullable()->default(null);
            $table->string('ip', 45);
            $table->string('terminacao', 45);
            $table->string('nome', 45);
            $table->tinyInteger('ativo');
            $table->timestamp('data_create')->default('CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()');
            $table->timestamp('data_update')->default('0000-00-00 00:00:00');
            $table->string('observacao')->nullable()->default(null);
            $table->integer('funcao_id');
            $table->integer('equipamento_id');
            $table->integer('site_id');
            $table->unique(["ip"], 'ip_UNIQUE');
            $table->unique(["ip_legado"], 'ip_legado_UNIQUE');
            $table->index(["funcao_id"], 'fk_ativos_funcao1_idx');
            $table->index(["equipamento_id"], 'fk_ativos_equipamento1_idx');
            $table->index(["site_id"], 'fk_ativos_site1_idx');
            // $table->foreign('funcao_id', 'fk_ativos_funcao1_idx')
            //     ->references('id')->on('funcao')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
            // $table->foreign('equipamento_id', 'fk_ativos_equipamento1_idx')
            //     ->references('id')->on('equipamento')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
            // $table->foreign('site_id', 'fk_ativos_site1_idx')
            //     ->references('id')->on('site')
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
