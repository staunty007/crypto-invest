<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Package;

class PopulatePackageAndPaymentPlatform extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package:payment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate Packages and Payment Platform';

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
        $this->info('Starting Poplutation of Packages');
        DB::table('packages')->insertOrIgnore([
            [
                'name' => 'Basic Plan',
                'rate' => '7',
                'time_of_cashout' => '24 Hours',
                'min_invest' => '20',
                'max_invest' => '650000',
                'status' => true,
                'capital' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium Plan',
                'rate' => '13.7',
                'time_of_cashout' => '14 Days',
                'min_invest' => '6000',
                'max_invest' => '17000000',
                'status' => true,
                'capital' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vip Plan',
                'rate' => '18',
                'time_of_cashout' => '24 Hours',
                'min_invest' => '1 BTC',
                'max_invest' => '3 BTC',
                'status' => true,
                'capital' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tranding Plan',
                'rate' => '7.2',
                'time_of_cashout' => '7  Days',
                'min_invest' => '650',
                'max_invest' => '1500000',
                'status' => true,
                'capital' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        $this->info('Packages Populated');
        $this->info('Starting Poplutation of PaymentPlatforms');

        DB::table('payment_platforms')->insertOrIgnore([
            [
                'name' => 'BTC Wallet Trasfer',
                'details_1' => '16AU6QyvnoNdbCACQAoGmRSDW59gRAMASB',
                'details_2' => 'https://i.ibb.co/56qX9HB/btc-qr.jpgs',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Perfect Money',
                'details_1' => 'U21776834 (USD)',
                'details_2' => '',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CashApp',
                'details_1' => '$Holonunu666',
                'details_2' => '',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        $this->info('Payment Platforms Populated');
    }
}
