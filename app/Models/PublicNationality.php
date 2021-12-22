<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicNationality extends Model
{
    use HasFactory;

    protected $table = 'public_nationalities';
    protected $fillable = [
        'name_en',
        'name_ar',
        'code'
    ];
}
