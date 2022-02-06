<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['jurusan', 'slug'];

    
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'jurusan_id', 'id_jurusan');
    }
}
