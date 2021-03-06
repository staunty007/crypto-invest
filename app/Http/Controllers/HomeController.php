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
            return redirect('admin/dashboard');
        }
        
        $new_deposit = Transaction::latest()->where('user_id',auth()->id())->where('status' ,'SUCCESSFUL')->first()['amount'];
        $no_pending_deposit = Transaction::latest()->where('user_id',auth()->id())->where('status' ,'!=','SUCCESSFUL')->count();

        $pending_payouts =  PaymentRequest::where('user_id', auth()->id())->where('status','!=','APPROVED')->count();
        $total_payouts = PaymentRequest::where('user_id', auth()->id())->where('status','APPROVED')->count();
        
        $data = [
            "new_deposit" => number_format($new_deposit, 2),
            "no_of_pending" => $no_pending_deposit,
            "total_payouts" => $total_payouts,
            "pending_payouts" => $pending_payouts,
        ];

        return view('pages.auth.index', compact('data'));

    }

    public function profile()
    {
        return view('pages.auth.profile');
        //return view('home');
    }

    public function transactionList()
    {
        $transactions = Transaction::where('user_id', auth()->id())->with('package:id,name','platform:id,name')->get();
        $pay_requests = PaymentRequest::latest()->where('user_id', auth()->id())->get();
        return view('pages.auth.transaction', compact('transactions','pay_requests'));
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
        return redirect('packages');
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
          return redirect('withdrawal')->with('error', 'fill out amount field');
        }
        
        //Check Customer Total Balance
        $availableBal = auth()->user()->wallet->active_balance + auth()->user()->wallet->profit_balance;

        if($request->amount > $availableBal) {
            return redirect('withdrawal')->with('error', 'insuffient Funds.');
        }

        //Check if Pending Request
        $pendingRequest =  PaymentRequest::where('user_id', auth()->id())->where('status','!=','APPROVED')->count();

        if($pendingRequest > 0){
            return redirect('withdrawal')->with('error', 'Please hold. You have a Pending Withdrawal Request');
        }

        //Check Runing PAckage
        $packageStillActive = ManageProfit::latest()->where('user_id',$request->user()->id)->where('duration_remaining','>', 0)->count();

        if($packageStillActive > 0){
            return redirect('withdrawal')->with('error', 'Package still active. Please request when due.');
        }

        PaymentRequest::create([
            'user_id' => auth()->id(),
            'amount' => $request->amount,
            'request_ref' => Str::random(10),
            'payment_type' => $request->payment_type,
            'payment_address' => $request->payment_address,
            'status' => 'PROCESSING'
        ]);

        return redirect('withdrawal')->with('success', 'Request Submitted, and will be Processed.');
    }

    public function confirmPackagePayment(Request $request)
    {
        $userPackage = UserInfo::where('user_id', auth()->id());
        if($userPackage->first()['package_id'] != null && auth()->user()->status == 0) {
            return response()->json(['error'=>'Welcome, Please Hold as we Confirm your Payment.']);
        }

        if(auth()->user()->transaction->first()->status != 'SUCCESSFUL') {
            return response()->json(['error'=>'Please Hold as we Confirm your Payment.']);
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

    public function cancelPaymentRequest($id) {
        PaymentRequest::find($id)->delete();
        return redirect('my-transactions');
    }

    public function updateProfile($id)
    {
        $user = User::findOrFail($id);
        unset(request()['_token']);
        $user->update([
            'email' => request()->email,
            'phone' => request()->phone
        ]);

        return back();
    }

    public function updateWalletProfile($id)
    {
        $user = User::findOrFail($id);
        unset(request()['_token']);
        $user->info()->update(request()->all());
        return back();
    }

}
