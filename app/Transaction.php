<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wallet;

class Transaction extends Model
{
    protected $fillable = [
        'user_id','description','package_id','platform_id','amount',
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
}
