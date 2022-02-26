<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineProduct extends Model
{
    use HasFactory;

    protected $table = 'medicine_products';

    protected $fillable = [
        'medicine_id',
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
        return $this->belongsTo(MedicineCompany::class,'medicine_id');
    }


    public function category(){
        return $this->belongsTo(MedicineCategory::class,'category_id');
    }


    // ====================================================================================
    // ============================== Accessories =========================================
    // ====================================================================================

    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Pendding';
        } elseif ($value == 2) {
            return 'Active';
        } elseif ($value == 3) {
            return 'Inactive';
        }
    }
}
