<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wallet;
use Illuminate\Support\Str;

class Transaction extends Model
{
    protected $fillable = [
        'user_id','description','transaction_ref','package_id','platform_id','amount',
        'status',
    ];

    public static function approveUserPayment($data) {
        $approve = self::where('id', $data['user_id'])->update([
            'description' => $data['description'],
            'amount' => $data['amount'],
            'status' => $data['status']
        ]);
        
        if($approve) {
            Wallet::addToUserWallet($data);
        }
    }

    public function package() {
        return $this->belongsTo(Package::class);
    }

    public function platform() {
        return $this->belongsTo(PaymentPlatform::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->transaction_ref = Str::random(10);
        });
    }
}
