<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Absensi extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nis',
        'long',
        'lat',
        'base64',
        'jam_masuk',
        'jam_keluar'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_nis', 'nis');
    }  
}
