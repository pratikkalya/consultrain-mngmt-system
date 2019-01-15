<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amcs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->string('purchase_ordr');
            $table->string('project_cost');
            $table->date('start_plnd_dt');
            $table->date('start_actl_dt')->nullable();
            $table->string('period')->nullable();;
            $table->date('visit1_dt')->nullable();;
            $table->string('payment_1')->nullable();;
            $table->date('visit2_dt')->nullable();;
            $table->string('payment_2')->nullable();;
            $table->date('visit3_dt')->nullable();;
            $table->string('payment_3')->nullable();;
            $table->date('visit4_dt')->nullable();;
            $table->string('payment_4')->nullable();;
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('order_id')->references('id')->on('project_managements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amcs');
    }
}
