<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatpelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matpel', function (Blueprint $table) {
            $table->id('id_matpel')->autoIncrement();
            $table->unsignedBigInteger('nip_guru');
            $table->foreign('nip_guru')->references('nip')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_matpel', 64);
            $table->string('hari', 10);
            $table->time('jam_matpel');
            $table->text('base64_ikon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matpels');
    }
}
