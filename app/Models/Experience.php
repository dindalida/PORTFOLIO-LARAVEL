<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Baris 'use Illuminate\Database\Eloquent\Casts\AsArray;' yang salah tadi sudah dihapus

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'company',
        'employment_type',
        'start_date',
        'end_date',
        'tasks',
        'tech_used',
        'is_current',
    ];

    protected $casts = [
        'tasks'      => 'array', // Diubah jadi string 'array'
        'tech_used'  => 'array', // Diubah jadi string 'array'
        'start_date' => 'date',
        'end_date'   => 'date',
        'is_current' => 'boolean',
    ];
}