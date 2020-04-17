<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentPlatform extends Model
{
    protected $fillable =  [
        'name','details_1','details_2','status',
    ];
}
