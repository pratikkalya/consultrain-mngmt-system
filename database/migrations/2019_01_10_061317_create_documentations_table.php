<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->date('qm_planned_date')->nullable();
            $table->date('qm_actual_date')->nullable();
            $table->string('qm_comment')->nullable();
            $table->date('pm_planned_date')->nullable();;
            $table->date('pm_actual_date')->nullable();;
            $table->string('pm_comment')->nullable();
            $table->date('sop_planned_date')->nullable();;
            $table->date('sop_actual_date')->nullable();;
            $table->string('sop_comment')->nullable();;
            $table->date('formo_planned_date')->nullable();;
            $table->date('formo_actual_date')->nullable();
            $table->string('formo_comment')->nullable();
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
        Schema::dropIfExists('documentations');
    }
}
