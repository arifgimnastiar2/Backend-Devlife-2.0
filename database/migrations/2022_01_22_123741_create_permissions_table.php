<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id('permissions_id')->autoIncrement();
            $table->unsignedBigInteger('user_nis');
            $table->foreign('user_nis')->references('nis')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('lampiran')->nullable();
            $table->string('keterangan');
            $table->text('deskripsi');
            $table->time('jam_izin');
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
        Schema::dropIfExists('permissions');
    }
}
