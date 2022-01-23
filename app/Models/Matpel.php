<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matpel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_matpel',
        'jam_matpel',
        'nip'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function permission()
    {
        return $this->hasMany(Permission::class, 'nis');
    }
}
