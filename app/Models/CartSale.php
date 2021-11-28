<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartSale extends Model
{
    use HasFactory;

    // ===================================================================================================================
    // ============================================== Standard Section ===================================================
    // ===================================================================================================================
    protected $table = 'cart_sales';
    protected $fillable = [
        'user_id',
        'location_id',
        'user_type',
        'product_count',
        'discount',
        'promo_code_id',
        'sub_total',
        'total',
        'status',
        'payment_status',
        'invoice_id',
        'invoice_url',
        'delivery_status',
        // Added After Migrate :
        'refNo'
    ];

    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================
    // Relation With Customer Model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    // Relation With CartOperation Model
    public function cartOperations()
    {
        return $this->hasMany(CartOperation::class);
    }

    // Relation With PromoCode Model :
    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class, 'promo_code_id')->withTrashed();
    }

    //  Relation with customer Locations
    public function location(){
        return $this->belongsTo(UserLocation::class, 'location_id');
    }

    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================
    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Pendding';
        } elseif ($value == 2) {
            return 'Accepted';
        } elseif ($value == 3) {
            return 'Rejected';
        }
    }
    public function getPaymentStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Pendding';
        } elseif ($value == 2) {
            return 'Accepted';
        } elseif ($value == 3) {
            return 'Rejected';
        }
    }
    public function getDeliveryStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Pendding';
        } elseif ($value == 2) {
            return 'In Progress';
        } elseif ($value == 3) {
            return 'Received';
        }
    }
}
