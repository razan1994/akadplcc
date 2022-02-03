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

    protected $fillable = [
        'user_id',
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en',
        'alias_name_ar',
        'alias_name_en',
        'image',
        'status'
    ];

    protected $date = ['deleted_at'];


    // Relation With User Table
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
