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
        $this->middleware('nopackage')->except('plans','confirmPackagePayment','approvePayment','getAllProfitManagements');
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

        $payload = [
            'user_id' => "1",
            'description' => "BTC Payment",
            'amount' => "35",
            'status' => "SUCCESSFUL",
            'transaction_ref' => Transaction::find(1)['transaction_ref']
        ];

        Transaction::approveUserPayment($payload);

        return response()->json(['success'=>'Payment Approved']);
    }

}
