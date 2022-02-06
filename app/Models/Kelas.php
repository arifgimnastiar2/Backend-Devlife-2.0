<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'jurusan_id',
        'nip_guru',
        'nama',
        'kelas',
    ];

    protected $table = 'kelas';

    public function walikelas()
    {
        return $this->belongsTo(Guru::class, 'nip_guru', 'nip');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id_jurusan');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'kelas_id', 'id_kelas');
    }
}
