<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkatstress extends Model
{
    use HasFactory;

    protected $table = 'tingkat_stress';

    protected $primaryKey = 'kode_stress'; // Menentukan kolom kunci utama

    public $incrementing = false; // Jika kunci utama bukan auto-increment
    protected $keyType = 'string'; // Jika tipe data kunci utama adalah string

    protected $fillable = [
        'kode_stress',
        'nama_tingkat_stress',
        'keterangan',
    ];
}
