<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nip_guru',
        'nama',
        'keterangan',
        'tahun_angkatan'
    ];

    protected $table = 'kelas';

    public function walikelas()
    {
        return $this->belongsTo(Guru::class);
    }
}
