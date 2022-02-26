<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentCategory extends Model
{
    use HasFactory;

    protected $table = 'equipment_categories';

    protected $fillable = [
        'equipment_id',
        'name_en',
        'name_ar',
        'status'
    ];


    // ===============================================================================
    // ============================== Relations ======================================
    // ===============================================================================

    public function company(){
        return $this->belongsTo(MedicalEquipment::class,'equipment_id');
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
