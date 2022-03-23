<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvcTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'svc';

    /**
     * Run the migrations.
     * @table svc
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_svc');
            $table->string('identificador', 45);
            $table->string('svct', 2);
            $table->integer('banda')->nullable()->default(null);
            $table->string('informacoes');
            $table->timestamp('data_create')->default('CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()');
            $table->timestamp('data_update')->default('0000-00-00 00:00:00');

            $table->unique(["identificador"], 'identificador_UNIQUE');
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
