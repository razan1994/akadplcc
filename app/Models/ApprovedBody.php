<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedBody extends Model
{
    use HasFactory;

    protected $table = 'approved_bodies';

    protected $fillable = [
        'name','image'
    ];

}
