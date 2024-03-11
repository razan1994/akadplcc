<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentWalletOrders extends Model
{
    use HasFactory;

    protected $guarded = [];


    // ================================>   Relations   <===============================
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
