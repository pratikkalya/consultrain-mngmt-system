<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->date('adv_plnd_dt')->nullable();;
            $table->date('adv_act_dt')->nullable();;
            $table->string('adv_remark')->nullable();;
            $table->date('first_instal_plnd_dt')->nullable();;
            $table->date('first_instal_act_dt')->nullable();;
            $table->string('first_instal_remark')->nullable();;
            $table->date('sec_instal_pl_dt')->nullable();;
            $table->date('sec_instal_act_dt')->nullable();;
            $table->string('sec_instal_remark')->nullable();;
            $table->date('third_instal_pl_dt')->nullable();;
            $table->date('third_instal_act_dt')->nullable();;
            $table->string('third_instal_remark')->nullable();;
            $table->date('final_pay_pl_dt')->nullable();;
            $table->date('final_pay_act_dt')->nullable();;
            $table->string('final_pay_remark')->nullable();;
            $table->timestamps();



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
        Schema::dropIfExists('payments');
    }
}
