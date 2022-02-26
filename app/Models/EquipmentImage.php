<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentImage extends Model
{
    use HasFactory;

    protected $table = 'equipment_images';

    protected $fillable = [
        'equipment_id',
        'image'
    ];


    // ===============================================================================
    // ============================== Relations ======================================
    // ===============================================================================

    public function company(){
        return $this->belongsTo(MedicineCompany::class,'equipment_id');
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
