<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';

    protected $primaryKey = 'kode_gejala'; // Menentukan kolom kunci utama

    public $incrementing = false; // Jika kunci utama bukan auto-increment
    protected $keyType = 'string'; // Jika tipe data kunci utama adalah string

    protected $fillable = [
        'kode_gejala',
        'nama_gejala',
    ];
}
