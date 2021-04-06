<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('covernote');
            $table->integer('refund');
            $table->integer('polis_a');
            $table->integer('polis_b');
            $table->integer('sertifikat');
            $table->integer('enrollment');
            $table->integer('verifikasi');
            $table->integer('analisa');
            $table->integer('total');
            $table->string('productivity');
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
        Schema::dropIfExists('operation');
    }
}
