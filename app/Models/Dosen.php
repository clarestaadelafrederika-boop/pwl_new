<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    protected $fillable = [
        'fullname',
        'NIM',
        'NIDN',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat'
    ];
}
