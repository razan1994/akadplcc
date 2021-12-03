<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdSzeClrRelation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "prod_sze_clr_relations";
    protected $fillable = [
        'main_size_id','main_color_id','product_id','quantity','update_price','status'
    ];

    protected $date = ['deleted_at'];



    // relation with Main Color table
    // by : Mohammed Salah
    public function color(){
        return $this->belongsTo(MainColor::class,'main_color_id');
    }

    // relation with Main Size table
    // by : Mohammed Salah
    public function size(){
        return $this->belongsTo(MainSize::class,'main_size_id');
    }


}

