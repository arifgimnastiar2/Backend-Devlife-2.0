<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Matpel;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{   
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'nip';

    protected $table = 'guru';
    
    protected $guard = 'admin';

    protected $fillable = ['nip', 'nama_guru', 'kompetensi_keahlian', 'email', 'password'];

    protected $hidden = ['password', 'remember_tokern',];

    public function guru()
    {
        return $this->hasMany(Matpel::class, 'nis');
    }

    public function walikelas()
    {
        return $this->hasMany(Kelas::class, 'nis');
    }
}
