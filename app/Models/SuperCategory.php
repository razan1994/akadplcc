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
}
