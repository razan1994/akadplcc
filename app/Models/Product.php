<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    // ===================================================================================================================
    // ============================================== Standard Section ===================================================
    // ===================================================================================================================
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name_ar',
        'name_en',
        'main_description_ar',
        'main_description_en',
        'sub_description_ar',
        'sub_description_en',
        'weight',
        'sale_price',
        'on_sale_price_status',
        'on_sale_price',
        'quantity_available',
        'quantity_limit',
        'image',
        'status',
        'created_by',
        // Added After Migrate :
        'weight_unit',
        'ingredient_en',
        'ingredient_ar',
        'benefit_en',
        'benefit_ar',
    ];


    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================


    // relation with users table
    // by : Mohammed Salah
    public function user(){
        return $this->belongsTo(User::class,'updated_by');
    }

    // relation with super categories table
    // by : Mohammed Salah
    public function superCategory(){
        return $this->belongsTo(SuperCategory::class,'super_category_id');
    }

    // relation with main categories table
    // by : Mohammed Salah
    public function mainCategory(){
        return $this->belongsTo(MainCategory::class,'main_category_id');
    }

    // relation with main categories table
    // by : Mohammed Salah
    public function subCategory(){
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }


    // Relation With ProductImage Model :
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Relation With CartOperation Model :
    public function cartOperations()
    {
        return $this->hasMany(CartOperation::class, 'product_id');
    }

    // Relation With ProductReview Table
    // Created By : Layth Al-Dwairi (L.A.L)
    public function productReviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }

    // Relation With ProductReview Table
    // Created By : Layth Al-Dwairi (L.A.L)
    public function productReviewByCustomer()
    {
        return $this->hasMany(ProductReview::class, 'product_id')->where(['user_id' => auth()->user()->id, 'user_type' => 'Customer']);
    }

    // Relation With ProductWishlist Model :
    public function checkWishlistByAuthUser()
    {
        return $this->hasMany(ProductWishlist::class)->where(['customer_id' => auth()->user()->id]);
    }

    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================
    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getOnSalePriceStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getWeightUnitAttribute($value)
    {
        if ($value == 1) {
            return 'ML';
        } elseif ($value == 2) {
            return 'KG';
        } elseif ($value == 3) {
            return 'G';
        }
    }
}
