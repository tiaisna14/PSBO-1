<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->bigIncrements('id_tiket');
            $table->timestamp('waktu_pendaftaran');
            $table->integer('harga');
            $table->integer('jumlah_tiket');
            $table->boolean('status');

            $table->foreignId('user_id')->constrained('users');

            $table->unsignedBigInteger('id_event_tkt');
            $table->foreign('id_event_tkt')->references('id_event')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tikets');
    }
}