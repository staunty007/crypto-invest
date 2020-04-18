<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Wallet;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','role','phone','gender','country','status','package',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function info() {
        return $this->hasOne(UserInfo::class);
    }

    public function wallet() {
        return $this->hasOne(Wallet::class);
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            Wallet::create([
                'user_id' => $model->id
            ]);
        });
    }
}
