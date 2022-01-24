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
            $table->id('id_kelas')->autoIncrement();
            $table->unsignedBigInteger('nip_guru');
            $table->foreign('nip_guru')->references('nip')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->char('nama', 3);
            $table->string('keterangan');
            $table->string('tahun_angkatan');
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
