<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('id_absensi')->autoIncrement();
            $table->bigInteger('user_nis')->unsigned();
            $table->foreign('user_nis')->references('nis')->on('users');
            $table->double('latitude', 10, 7);
            $table->double('longitude', 10, 7);
            $table->text('base64');
            $table->time('jam_masuk');
            $table->time('jam_keluar')->nullable();
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
        Schema::dropIfExists('absensis');
    }
}
