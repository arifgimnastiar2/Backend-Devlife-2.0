<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'nip_guru',
        'nama',
        'kelas',
    ];

    protected $table = 'kelas';

    public function walikelas()
    {
        return $this->belongsTo(Guru::class, 'nip_guru', 'nip');
    }
}
