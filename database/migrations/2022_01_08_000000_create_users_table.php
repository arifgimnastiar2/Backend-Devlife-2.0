<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nis')->unsigned()->unique();
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('kelas_id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('email')->unique();
            $table->string('telepon');
            $table->string('alamat');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_admin')->default(false);
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
        Schema::dropIfExists('users');
    }
}
