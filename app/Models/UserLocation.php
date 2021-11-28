<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    use HasFactory;

    protected $table = 'user_locations';
    protected $fillable = [
        'user_id',
        'country',
        'city',
        'retail',
        'phone',
        'phone_extra',
        'address_2'
    ];




    public function customer(){
        return $this->belongsTo(Customer::class,'user_id');
    }

}
