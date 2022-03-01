<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentProduct extends Model
{
    use HasFactory;

    protected $table = 'equipment_products';

    protected $fillable = [
        'equipment_id',
        'category_id',
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image',
        'status'
    ];


    // ===============================================================================
    // ============================== Relations ======================================
    // ===============================================================================

    public function company(){
        return $this->belongsTo(MedicalEquipment::class,'equipment_id');
    }


    public function category(){
        return $this->belongsTo(EquipmentCategory::class,'category_id');
    }


    public function images(){
        return $this->hasMany(EquipmentProductImage::class,'product_id');
    }


    // ====================================================================================
    // ============================== Accessories =========================================
    // ====================================================================================

    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
}
