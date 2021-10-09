<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\WilayahModel as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class WilayahModel extends Model
{
    protected $table="regions";
    public $timestamps= false;
    protected $primaryKey = 'id_region';

    protected $fillable = [
        'id_region',
        'nama_daerah',
        'alamat',
        'kelurahan',
        'kecamatan',
        'alasan',
        'tanggal',

    ];
}
