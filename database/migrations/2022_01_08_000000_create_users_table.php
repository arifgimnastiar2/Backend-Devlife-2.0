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
            // foreign key kelas
            $table->unsignedBigInteger('kelas_id'); //nullable jika belum bisa dibarengin sama jursuan.
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->enum('jurusan', 
            ['Rekayasa Perangkat Lunak 1', 
            'Rekayasa Perangkat Lunak 2', 
            'Rekayasa Perangkat Lunak 3', 
            'Teknik Komputer Jaringan 1', 
            'Teknik Komputer Jaringan 2',
            'Multimedia']);
            $table->string('email')->unique();
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
