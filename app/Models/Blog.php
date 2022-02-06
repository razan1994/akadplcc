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
        'status',
        'alt_text_ar',
        'alt_text_en',
        'image_title_text_ar',
        'image_title_text_en',
        'h2_ar',
        'h2_en',
        'seo_title_ar',
        'seo_title_en',
        'keywords_ar',
        'keywords_en',
        'redirect_301_ar',
        'redirect_301_en',
        'meta_desc_ar',
        'meta_desc_en',
    ];

    protected $date = ['deleted_at'];


    // Relation With User Table
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
