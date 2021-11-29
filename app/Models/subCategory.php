<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "sub_categories";
    protected $fillable = [
        'updated_by',
        'super_category_id',
        'main_category_id',
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'image',
        'status',
    ];


    //=====================================================================================
    //============================== Relations ============================================
    //=====================================================================================


    // relation with users table
    // by : Mohammed Salah
    public function user(){
        return $this->belongsTo(User::class,'updated_by');
    }

    // relation with super categories table
    // by : Mohammed Salah
    public function superCategory(){
        return $this->belongsTo(SuperCategory::class,'super_category_id');
    }

    // relation with main categories table
    // by : Mohammed Salah
    public function mainCategory(){
        return $this->belongsTo(MainCategory::class,'main_category_id');
    }


    // relation with products table
    // by : Mohammed Salah
    public function products(){
        return $this->hasMany(Product::class,'sub_category_id');
    }


}
