<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    use HasFactory;

    protected $table = 'relasi';

    protected $fillable = [
        'kode_stress',
        'kode_gejala',
        'mb',
        'md',
    ];

    // Define relasi dengan tabel tingkat stress
    public function tingkatStress()
    {
        return $this->belongsTo(TingkatStress::class, 'kode_stress', 'kode_stress');
    }

    // Define relasi dengan tabel gejala
    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala', 'kode_gejala');
    }
}
