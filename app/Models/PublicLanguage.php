<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicLanguage extends Model
{
    use HasFactory;

    protected $table = 'public_languages';
    protected $fillable = [
        'country_id',
        'name_ar',
        'name_en',
    ];
}
