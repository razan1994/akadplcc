<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuperCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "super_categories";
    protected $fillable = [
        'updated_by',
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'image',
        'status',
    ];
    protected $date = ['deleted_at'];


    //=====================================================================================
    //============================== Relations ============================================
    //=====================================================================================


    // relation with users table
    // by : Mohammed Salah
    public function user(){
        return $this->belongsTo(User::class,'updated_by');
    }

    // relation with main categories table
    // by : Mohammed Salah
    public function mainCategories(){
        return $this->hasMany(MainCategory::class,'super_category_id');
    }

    // relation with sub categories table
    // by : Mohammed Salah
    public function subCategories(){
        return $this->hasMany(SubCategory::class,'super_category_id');
    }

    // relation with products table
    // by : Mohammed Salah
    public function products(){
        return $this->hasMany(Product::class,'super_category_id');
    }

}
