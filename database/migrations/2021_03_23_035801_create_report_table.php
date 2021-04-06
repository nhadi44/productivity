<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('job_code');
            $table->string('job_name');
            $table->string('job_desc');
            $table->integer('total_process');
            $table->integer('process_time'); //ambil data dari table main_job
            $table->foreignId('ujob_id')->constrained('user_job')->onDelete('cascade');
            $table->foreignId('main_id')->constrained('main_job')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
