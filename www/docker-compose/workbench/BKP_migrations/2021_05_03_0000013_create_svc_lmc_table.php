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
    public $tableName = 'svc_has_lmc';

    /**
     * Run the migrations.
     * @table svc_has_lmc
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('in_vlan', 45)->nullable()->default(null);
            $table->string('out_vlan', 45)->nullable()->default(null);
            $table->string('peering_mrouter', 45)->nullable()->default(null);
            $table->string('peering_cliente1', 45)->nullable()->default(null);
            $table->string('peering_cliente2', 45)->nullable()->default(null);
            $table->string('distinguisher', 45)->nullable()->default(null);
            $table->string('observacoes')->nullable()->default(null);
            $table->integer('svc_id');
            $table->integer('lmc_id');
            $table->index(["svc_id"], 'fk_svc_has_lmc_svc_idx');
            $table->index(["lmc_id"], 'fk_svc_has_lmc_lmc1_idx');
            // $table->foreign('svc_id', 'fk_svc_has_lmc_svc_idx')
            //     ->references('id')->on('svc')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
            // $table->foreign('lmc_id', 'fk_svc_has_lmc_lmc1_idx')
            //     ->references('id')->on('lmc')
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
