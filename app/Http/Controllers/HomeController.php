<?php

namespace App\Http\Controllers;

use App\Package;
use App\Transaction;
use Illuminate\Http\Request;
use App\User;
use App\UserInfo;
use Error;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Wallet;
use App\ManageProfit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('nopackage')->except('plans','paymentInfo','confirmPackagePayment','approvePayment','getAllProfitManagements','updatePaymentProfile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return Wallet::where('user_id', 1)->first()['profit_balance'];
        return view('pages.auth.index');
        //return view('home');
    }

    public function profile()
    {
        return view('pages.auth.profile');
        //return view('home');
    }

    public function transactionList()
    {
        $transactions = Transaction::where('user_id', auth()->id())->with('package:id,name','platform:id,name')->get();
        return view('pages.auth.transaction', compact('transactions'));
    }

    public function plans()
    {
        $packages = Package::all();
        return view('pages.auth.plans', compact('packages'));
        //return view('home');
    }

    public function updatePaymentProfile(Request $request)
    {
        UserInfo::where('user_id', auth()->id())
            ->update([
                'payment_type' => $request->payment_type,
                'payment_address' => $request->payment_address
            ]);
        return redirect('plans');
    }

    public function paymentInfo() 
    {
        return view('pages.auth.payment-info');
    }

    public function confirmPackagePayment(Request $request)
    {
        $userPackage = UserInfo::where('user_id', auth()->id());
        if($userPackage->first()['package_id'] != null && auth()->user()->status == 0) {
            throw new Error("Please Hold as we Confirm your Payment");
        }

        if(auth()->user()->status != 0) {
            throw new Error("You already have an active package.");
        }

        $store = Transaction::create([
            'user_id' => auth()->id(),
            'package_id' => $request->package_id,
            'platform_id' => $request->platform_id,
            'status' => "PROCESSING"
        ]);

        if($store) {
            $userPackage->update(['package_id' => $request->package_id]);
            return response()->json(['success'=>'Your Account will be credited soon. Thanks']);
        }
    }

    public function getAllProfitManagements() {
        $users = Wallet::all();
        $profits=  ManageProfit::all();
        return [
            'users' => $users,
            'wallet' => $profits
        ];
    }
    
    public function approvePayment(Request $request) {
        //return ManageProfit::where('status',true)->where('duration_remaining','>', 0)->get();
        // $manages = ManageProfit::where('status',true)->where('duration_remaining','>', 0)->get();
        // $manages->map(function($manage) {
        //     $remitAmount = $manage['assumed_profit'] / $manage['duration_in_minutes'];
        //     $newDurationRemaining = $manage['duration_remaining'] - 1;
        //     $wallet = Wallet::where('user_id', $manage['user_id']);
        //     //return (float) $wallet->first()['profit_balance'] + (float) $remitAmount;
        //     $wallet->update(['profit_balance' =>  $wallet->first()['profit_balance'] +  $remitAmount ]);
        //     ManageProfit::where('user_id', $manage['user_id'])->update(['duration_remaining' => $newDurationRemaining]);
        // });
        //return $ans;


        $payload = [
            'user_id' => auth()->id(),
            'description' => "BTC Payment",
            'amount' => "35",
            'status' => "SUCCESSFUL",
            'transaction_ref' => Transaction::find(1)['transaction_ref']
        ];

        Transaction::approveUserPayment($payload);

        return response()->json(['success'=>'Payment Approved']);
    }

}
