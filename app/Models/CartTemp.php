<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartTemp extends Model
{
    use HasFactory;
    // ===================================================================================================================
    // ============================================== Standard Section ===================================================
    // ===================================================================================================================
    protected $table = 'cart_temps';
    protected $fillable = [
        'user_id',
        'user_type',
        'product_id',
        'quantity',
    ];


    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================
    // Relation With Customer Model
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relation With Product Model
    public function product()
    {
        return $this->belongsTo(Product::class)->where('status', 1)->withTrashed();
    }

}
