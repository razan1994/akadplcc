<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainColor extends Model
{
    use HasFactory;

    protected $table = 'main_colors';
    protected $fillable = [
        'name_ar',
        'name_en',
        'color_code',
        'updated_by'
    ];
}
