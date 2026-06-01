<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject; // <--- Perbaikan di sini

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'tech_stack',
        'image',
        'demo_url',
        'github_url',
        'featured',
        'sort_order',
    ];

    protected $casts = [
        'tech_stack' => AsArrayObject::class, // <--- Perbaikan di sini
        'featured'   => 'boolean',
    ];

    /**
     * Scope: tampilkan yang featured dulu.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope: filter by category.
     */
    public function scopeOfCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}