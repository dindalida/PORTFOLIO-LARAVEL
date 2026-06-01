<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Baris 'use Illuminate\Database\Eloquent\Casts\AsArray;' yang salah sudah dihapus

class Education extends Model
{
    use HasFactory;
    
    protected $table = 'educations';

    protected $fillable = [
        'degree',
        'major',
        'institution',
        'start_year',
        'end_year',
        'gpa',
        'achievements',
    ];

    protected $casts = [
        'achievements' => 'array', // Diubah jadi string 'array' biasa
    ];
}