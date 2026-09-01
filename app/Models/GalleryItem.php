<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_ar',
        'title_en',
        'type',
        'file_path',
        'poster_path',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'status' => 'integer',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 2);
    }
}
