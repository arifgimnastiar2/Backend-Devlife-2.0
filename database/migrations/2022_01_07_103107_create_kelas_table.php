<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            // foreign key guru
            $table->unsignedBigInteger('nip_guru');
            $table->foreign('nip_guru')->references('nip')->on('guru')->onDelete('cascade')->onUpdate('cascade');

            // foreign key jurusan
            $table->unsignedBigInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id_jurusan')->on('jurusans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->integer('kelas');
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
        Schema::dropIfExists('kelas');
    }
}
