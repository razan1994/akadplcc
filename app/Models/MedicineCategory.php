<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    use HasFactory;

    protected $table = 'medicine_categories';

    protected $fillable = [
        'medicine_id',
        'name_en',
        'name_ar',
        'status'
    ];


    // ===============================================================================
    // ============================== Relations ======================================
    // ===============================================================================

    public function company(){
        return $this->belongsTo(MedicineCompany::class,'medicine_id');
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
