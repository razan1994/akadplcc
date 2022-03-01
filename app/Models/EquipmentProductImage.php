<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentProductImage extends Model
{
    use HasFactory;

    protected $table = 'equipment_product_images';

    protected $fillable = [
        'product_id',
        'image'
    ];
}
