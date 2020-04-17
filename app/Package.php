<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name','rate','time_of_cashout','min_invest','max_invest','capital','status',
    ];
    protected $hidden = ['created_at','updated_at'];
}
