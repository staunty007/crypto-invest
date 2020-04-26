<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    protected $fillable = ['user_id','amount','request_ref','payment_type','payment_address',
    'status',];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}   
