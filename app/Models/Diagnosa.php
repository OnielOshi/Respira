<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnoses';
    
    protected $fillable = [
        'user_id',
        'waktu_diagnosa',
        'persentase_penyakit_1',
        'persentase_penyakit_2',
        'persentase_penyakit_3',           
        'persentase_penyakit_4',
    ];
    // public function users()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
