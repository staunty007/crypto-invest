<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['user_id','active_balance','priofit_balance'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function addToUserWallet($data) {
        $user = self::where('user_id', $data['user_id']);
        $userBalance = $user->first()['active_balance'];
        $newBalance = (float) $userBalance + (float) $data['amount'];

        $user->update([
            'active_balance' => $newBalance
        ]);

        User::find($data['user_id'])->update([
            'status' => 1 
        ]);
    }
}
