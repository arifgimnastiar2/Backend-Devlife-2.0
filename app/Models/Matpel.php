<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_matpel',
        'jam_matpel',
        'nip'
    ];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }  
}
