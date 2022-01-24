<?php

namespace App\Models;

use App\Models\User;
use App\Models\Matpel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'permissions_id',
        'user_nis',
        'matpel_id',
        'keterangan',
        'hari_izin',
        'jam_izin'
    ];

    public function detailUser()
    {
        return $this->belongsTo(User::class, 'user_nis', 'nis');
    }

    public function detailMatpel()
    {
        return $this->belongsTo(Matpel::class, 'matpel_id', 'id_matpel');
    }
}
