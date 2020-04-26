<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserInfo;

class ManageProfit extends Model
{
    protected $fillable = [
        'user_id','assumed_profit','starts','end','duration_in_minutes',
        'duration_remaining','status',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function wallet() {
        return $this->belongsTo(Wallet::class , 'user_id', 'user_id');
    }

    public static function userSetup($user, $payment) {
        $selectedPackage = Package::packageDetails($payment['package_id']);
        $startDate = date('Y-m-d H:i:s', strtotime($payment['updated_at']));
        $endDate = date('Y-m-d H:i:s', strtotime($selectedPackage['time_of_cashout']));

        $assumedProfit = round(( (float) $payment['amount'] / 100) * $selectedPackage['rate'], 2);
        $durationInMinutes = self::convertToMinutes([$endDate,$startDate]);

         self::create([
            'user_id' => $user['user_id'],
            'assumed_profit' => $assumedProfit,
            'starts' => $startDate,
            'end' => $endDate,
            'duration_in_minutes' => $durationInMinutes,
            'duration_remaining' => $durationInMinutes
        ]);
    }

    public static function convertToMinutes($array) {
        $end = date('d-m-Y H:i:s',strtotime($array[0])); 
        $start = date('d-m-Y H:i:s',strtotime($array[1]));
        return round((strtotime($end) - strtotime($start)) /60);
    }
    
}
