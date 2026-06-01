<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'issuer',
        'date',
        'credential_url',
        'icon',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}