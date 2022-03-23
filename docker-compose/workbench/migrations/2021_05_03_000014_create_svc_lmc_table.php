<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvcLmcTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'svc_lmc';

    /**
     * Run the migrations.
     * @table svc_lmc
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_svc_lmc');
            $table->string('in_vlan', 45)->nullable()->default(null);
            $table->string('out_vlan', 45)->nullable()->default(null);
            $table->string('peering_mrouter', 45)->nullable()->default(null);
            $table->string('peering_cliente1', 45)->nullable()->default(null);
            $table->string('peering_cliente2', 45)->nullable()->default(null);
            $table->string('distinguisher', 45)->nullable()->default(null);
            $table->string('observacoes')->nullable()->default(null);
            $table->integer('svc_id_svc');
            $table->integer('lmc_id_lmc');

            $table->index(["svc_id_svc"], 'fk_svc_lmc_svc_idx');

            $table->index(["lmc_id_lmc"], 'fk_svc_lmc_lmc1_idx');


            $table->foreign('svc_id_svc', 'fk_svc_lmc_svc_idx')
                ->references('id_svc')->on('svc')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('lmc_id_lmc', 'fk_svc_lmc_lmc1_idx')
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
