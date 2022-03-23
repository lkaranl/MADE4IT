<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltimaMilhaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ultima_milha';

    /**
     * Run the migrations.
     * @table ultima_milha
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_ultima_milha');
            $table->string('fantasia');
            $table->string('razao_social');
            $table->string('cnpj', 14);
            $table->string('telefone', 45)->nullable()->default(null);
            $table->string('cep', 12)->nullable()->default(null);
            $table->string('endereco')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);

            $table->unique(["fantasia"], 'nome_UNIQUE');

            $table->unique(["razao_social"], 'razao_social_UNIQUE');

            $table->unique(["cnpj"], 'cnpj_UNIQUE');
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
