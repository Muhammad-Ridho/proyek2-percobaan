<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\PendudukModel as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class PendudukModel extends Model
{
    protected $table="penduduks";
    public $timestamps= false;
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'no_telpon',
        'alamat',
        'foto',

    ];
}
