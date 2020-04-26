<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'users_info';
    protected $fillable = ['user_id','country','payment_type','payment_address'];
    protected $hidden = ['id','user_id','created_at','updated_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
