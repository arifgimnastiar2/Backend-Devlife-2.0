<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Absensi extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_nis',
        'lokasi',
        'base64',
        'jam_masuk',
        'jam_keluar'
    ];
    protected $table = 'absensi';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_nis', 'nis');
    }
}
