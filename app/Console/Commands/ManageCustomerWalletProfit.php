<?php

namespace App\Console\Commands;

use App\ManageProfit;
use Illuminate\Console\Command;
use App\Wallet;

class ManageCustomerWalletProfit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:profit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage Customer Wallet Profits';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $manages = ManageProfit::where('status',true)->where('duration_remaining','>', 0)->get();
        $manages->map(function($manage) {
            $remitAmount = $manage['assumed_profit'] / $manage['duration_in_minutes'];
            $newDurationRemaining = $manage['duration_remaining'] - 1;
            $wallet = Wallet::where('user_id', $manage['user_id']);
            $wallet->update(['profit_balance' =>  $wallet->first()['profit_balance'] +  $remitAmount ]);
            ManageProfit::where('user_id', $manage['user_id'])->update(['duration_remaining' => $newDurationRemaining]);
        });
    }
}
