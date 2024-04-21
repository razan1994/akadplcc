<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    // =========================================
    // ============= Scopes ====================
    // =========================================
    public function scopeActiveMainCategories($query)
    {
        return $query->whereNull('parent_id')->whereHas('blogsThroughSubcategories')->with('blogsThroughSubcategories');
    }

    public function scopeActiveMainCategoriesWithChildrensHavingBlogs($query)
    {
        return $query->whereNull('parent_id')
            ->whereHas('blogsThroughSubcategories')
            ->with('activeChildrens');
    }



    // =========================================
    // ============= Relations =================
    // =========================================
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public  function activeChildrens()
    {
        return $this->hasMany(Category::class, 'parent_id')->whereHas('activeBlogs');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function activeBlogs()
    {
        return $this->hasMany(Blog::class)->where('status', 1);
    }

    // get all blogs through subcategories
    public function blogsThroughSubcategories()
    {
        // get all related active blogs randomly
        return $this->hasManyThrough(Blog::class, Category::class, 'parent_id', 'category_id', 'id', 'id')->active()->inRandomOrder();
    }
}
