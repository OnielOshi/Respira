<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnoses';
    
    // public function users()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
