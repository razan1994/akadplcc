<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "main_categories";
    protected $fillable = [
        'updated_by',
        'super_category_id',
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


    // relation with super categories table
    // by : Mohammed Salah
    public function superCategory(){
        return $this->belongsTo(SuperCategory::class,'super_category_id')->where('status',1);
    }

    // relation with sub categories table
    // by : Mohammed Salah
    public function subCategories(){
        return $this->hasMany(SubCategory::class,'main_category_id')->where('status',1);
    }


    // relation with products table
    // by : Mohammed Salah
    public function products(){
        return $this->hasMany(Product::class,'main_category_id')->where('status',1);
    }


}
