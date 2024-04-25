<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "blogs";

    protected $guarded = [];

    protected $date = ['deleted_at'];




    // =========================================
    // ============= Scopes =================
    // =========================================
    public function scopeActive($query)
    {
        // the active products will be thw products that have at least one size and the category that belongs to is active
        return $query->where('status', 1);
    }


    // =========================================
    // ============= Relations =================
    // =========================================
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id') ?? null;
    }
}
