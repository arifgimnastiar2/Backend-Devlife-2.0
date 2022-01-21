<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = ['nip', 'nama_guru', 'kompetensi_keahlian', 'tlp', 'alamat']; 

    public function matpels(){
        return $this->hasMany(Matpel::class);
    }
}
