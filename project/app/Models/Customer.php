<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Http\Controllers\Backend\Customer_registercontroller;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customer";
    protected $primaryKey = "customer_id";

    // Mutator
    // public function setFirstNameAttribute($value)
    // {
    //     $this->attributes['first_name'] = ucwords($value);
    // }

    // public function getDobAttribute($value)
    // {
    //     return date( 'Y-m-d', strtotime($value));
    // }


}
