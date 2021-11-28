<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subCategory extends Model
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
}
