<?php

namespace App\Console\Commands;

use App\PaymentPlatform;
use Illuminate\Console\Command;
use Faker\Generator as Faker;

class NewPaymentPlatform extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pay:platform';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New Payment Platform';

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
    public function handle(Faker $faker)
    {
        PaymentPlatform::create([
            'name' => $faker->name,
            'details_1' => $faker->secondaryAddress,
            'details_2' => $faker->domainName,
            'status' => true
        ]);
    }
}
