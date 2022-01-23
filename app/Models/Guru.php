<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nip', 'nama_guru', 'kompetensi_keahlian', 'tlp', 'alamat'];

    public function matpels()
    {
        return $this->hasMany(Matpel::class);
    }
}
