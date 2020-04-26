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
use App\PaymentRequest;
use Illuminate\Support\Str;

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
        if(auth()->user()->role == 'admin') {
            return view('pages.auth.admin.index');
        }
        return view('pages.auth.index');

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

    public function paymentRequestForm()
    {
        $activeBalance = auth()->user()->wallet->active_balance + auth()->user()->wallet->profit_balance;
        $activeBalance = number_format($activeBalance, 2, '.', '');
        return view('pages.auth.payment-request-form' ,compact('activeBalance'));
    }

    public function paymentRequestLists()
    {
        $pay_requests = PaymentRequest::latest()->where('user_id', auth()->id())->get();
        return view('pages.auth.payment-request' ,compact('pay_requests'));
    }

    public function makePaymentRequest(Request $request)
    {
        if (!$request->filled('amount')) {
          return redirect('payment-request-form')->with('error', 'fill out amount field');
        }
        
        //Check Customer Total Balance
        $availableBal = auth()->user()->wallet->active_balance + auth()->user()->wallet->profit_balance;

        if($request->amount > $availableBal) {
            return redirect('payment-request-form')->with('error', 'insuffient Funds.');
        }

        //Check if Pending Request
        $pendingRequest =  PaymentRequest::where('user_id', auth()->id())->where('status','!=','APPROVED')->count();

        if($pendingRequest > 0){
            return redirect('payment-request-form')->with('error', 'Pls hold . You have a Pending Payment Request');
        }

        //Check Runing PAckage
        $packageStillActive = ManageProfit::latest()->where('user_id',$request->user()->id)->where('duration_remaining','>', 0)->count();

        if($packageStillActive > 0){
            return redirect('payment-request-form')->with('error', 'Package still active. Pls request when due.');
        }

        PaymentRequest::create([
            'user_id' => auth()->id(),
            'amount' => $request->amount,
            'request_ref' => Str::random(10),
            'payment_type' => $request->payment_type,
            'payment_address' => $request->payment_address,
            'status' => 'PROCESSING'
        ]);

        return redirect('payment-request-form')->with('success', 'Request Submitted, and will be Processed.');
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
